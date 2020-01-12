<?php

namespace App\Controller;

use Cake\Event\Event;

/**
 * Contrôleur de la page pour consulter une offre d'emploi.
 *
 * Class DetailsOffreController
 * @package App\Controller
 */
class DetailsOffreController extends AppController
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
     * La méthode "index" fait le lien entre le modèle "Offres" et la vue.
     *
     * Elle se charge de mettre à disposition les informations d'une offre en particulier.
     *
     * @param null $idOffre
     * @return \Cake\Http\Response|null
     */
    public function index($idOffre = null)
    {
        $this->loadModel('Offres');
        $offre = $this->Offres->find('all', array(
            'conditions' => array('Offres.idOffre' => $idOffre)
        ));

        $this->set('offre', $offre);
    }
}