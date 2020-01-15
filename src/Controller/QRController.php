<?php


namespace App\Controller;

/**
 * Contrôleur de la page du QRCode de la carte de visite d'une candidature ou d'une demande de devis.
 *
 * Class QRController
 * @package App\Controller
 */
class QRController extends AppController
{

    /**
     * La méthode "qrCodeDevis" crée à partir des données d'un postulant, un QRCode représentant le vCard de celui-ci.
     *
     * @param null $idPostulant
     */
    public function qrCodePostulant($idPostulant = null)
    {
        $this->loadModel('Postulants');
        $postulants = $this->Postulants->find('all', array(
            'conditions' => array('Postulants.idPostulant' => $idPostulant)
        ));
        $postulantData = null;
        foreach ($postulants as $postulant) {
            $postulantData = $postulant;
        }

        $this->set("postulantData",$postulantData);

        $this->viewBuilder()->setLayout('admin');

        $this->render('/Qr/qr-code-postulant');
    }

    /**
     * La méthode "qrCodeDevis" crée à partir des données d'un projet, un QRCode représentant le vCard de celui-ci.
     *
     * @param null $idProjet
     */
    public function qrCodeProjet($idProjet = null)
    {
        $this->loadModel('Projets');
        $projets = $this->Projets->find('all', array(
            'conditions' => array('Projets.idProjet' => $idProjet)
        ));
        $projetData = null;
        foreach ($projets as $projet) {
            $projetData = $projet;
        }

        $this->set("projetData",$projetData);

        $this->viewBuilder()->setLayout('admin');

        $this->render('/Qr/qr-code-projet');
    }

    /**
     * La méthode "isAuthorized" determine si l'utilisateur peut acceder ou non à ce contenu.
     *
     * @param $administrateur
     * @return bool
     */
    public function isAuthorized($administrateur) {

        $action = $this->request->getParam('action');
        $pass1 = ($administrateur['actif'] === 1);
        $pass2 = in_array($action, ['login', 'logout']);

        return $pass1 || $pass2;
    }
}