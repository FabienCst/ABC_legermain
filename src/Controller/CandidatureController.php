<?php

namespace App\Controller;

use Cake\Event\Event;

/**
 * Contrôleur de la page pour postuler à une offre d'emploi.
 *
 * Class CandidatureController
 * @package App\Controller
 */
class CandidatureController extends AppController
{

    /**
     * La méthode "beforeFilter" s'assure de permettre aux utilisateurs d'acceder à ce contenu sans authentification.
     *
     * @param Event $event
     * @return \Cake\Http\Response|void|null
     */
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow();
    }

    /**
     * La méthode "index" fait le lien entre le modèle "postulants" et la vue.
     *
     * Elle se charge d'ajouter les candidatures des différents utilisateurs.
     *
     * @param null $idOffre
     * @return \Cake\Http\Response|null
     */
    public function index($idOffre = null)
    {
        $this->loadModel('Postulants');
        $postulant = $this->Postulants->newEntity();
        $date = date('Y-m-d');

        if ($this->request->is('post')) {

            $myname_cv = $this->request->getData()['cv']['name'];
            $mytmp_cv = $this->request->getData()['cv']['tmp_name'];
            $mypath_cv = "img\candidatures\cv\\".$myname_cv;

            $myname_lm = $this->request->getData()['lettre_motivation']['name'];
            $mytmp_lm = $this->request->getData()['lettre_motivation']['tmp_name'];
            $mypath_lm = "img\candidatures\lettre_motivation\\".$myname_lm;

            if(move_uploaded_file($mytmp_cv,WWW_ROOT.$mypath_cv) && move_uploaded_file($mytmp_lm,WWW_ROOT.$mypath_lm)){

                $postulant->nom = $this->request->getData()['nom'];
                $postulant->prenom = $this->request->getData()['prenom'];
                $postulant->mail = $this->request->getData()['mail'];
                $postulant->telephone = $this->request->getData()['telephone'];
                $postulant->date = $date;
                $postulant->idOffre = $idOffre;
                $postulant->cv = $myname_cv;
                $postulant->lettre_motivation = $myname_lm;

                if ($this->Postulants->save($postulant)) {

                    return $this->redirect(['controller' => 'Recrutement', 'action' => 'index']);
                }
            }

        }

        $this->set('idOffre', $idOffre);
        $this->set('postulant', $postulant);
    }
}