<?php

namespace App\Controller;

/**
 * Contrôleur de la page pour visualiser les candidatures et les demandes de devis du coté de la partie admin.
 *
 * Class MessagerieController
 * @package App\Controller
 */
class MessagerieController extends AppController
{

    /**
     * La méthode "devis" fait le lien entre le modèle "Projets" et la vue.
     *
     * Elle se charge de mettre à disposition les informations des demandes de devis.
     */
    public function devis()
    {
        $this->loadModel('Projets');
        $projets = $this->Projets->find('all', ['order' => 'Projets.date ASC']);
        $this->set('projets',$projets);

        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * La méthode "candidatures" fait le lien entre le modèle "Postulants" et la vue.
     *
     * Elle se charge de mettre à disposition les informations des candidatures.
     */
    public function candidatures()
    {
        $this->loadModel('Postulants');
        $postulants = $this->Postulants->find('all', ['order' => 'Postulants.date ASC']);
        $this->set('postulants',$postulants);

        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * La méthode "deleteDevis" va être responsable de la suppression d'une demande de devis en base de données.
     *
     * @param null $id
     * @return \Cake\Http\Response|null
     */
    public function deleteDevis($id = null)
    {
        $this->loadModel('Postulants');
        $this->request->allowMethod(['post', 'delete']);
        $postulant = $this->Postulants->get($id);
        if ($this->Postulants->delete($postulant)) {
            return $this->redirect(['action' => 'candidatures']);
        }
    }

    /**
     * La méthode "deleteProjet" va être responsable de la suppression d'une candidature en base de données.
     *
     * @param null $id
     * @return \Cake\Http\Response|null
     */
    public function deleteProjet($id = null)
    {
        $this->loadModel('Projets');
        $this->request->allowMethod(['post', 'delete']);
        $projet = $this->Projets->get($id);
        if ($this->Projets->delete($projet)) {
            return $this->redirect(['action' => 'devis']);
        }
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