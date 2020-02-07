<?php

namespace App\Controller;

use Cake\Event\Event;

/**
 * Contrôleur de la page présentant les détails d'une réalisation.
 *
 * Class DetailsRealisationController
 * @package App\Controller
 */
class DetailsRealisationController extends AppController
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
     * La méthode "index" fait le lien entre le modèle "Realisations" et la vue.
     *
     * Elle se charge de mettre à disposition les informations d'une réalisation en particulier.
     *
     * @param null $idRealisation
     */
    public function index($idRealisation = null)
    {
        $this->loadModel('Realisations');
        $realisation = $this->Realisations->find('all', array(
            'conditions' => array('Realisations.idRealisation' => $idRealisation)
        ));

        $this->set('realisation', $realisation);
    }

}