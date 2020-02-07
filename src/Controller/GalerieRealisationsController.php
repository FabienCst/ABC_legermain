<?php

namespace App\Controller;

use Cake\Event\Event;

/**
 * Contrôleur de la page présentant les différentes réalisations.
 *
 * Class GalerieRealisationsController
 * @package App\Controller
 */
class GalerieRealisationsController extends AppController
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
     * La méthode "index" fait le lien entre les modèle "Realisations" et "Prestations" et la vue.
     *
     * Elle se charge de présenter les différentes réalisations sous forme d'une galerie d'image.
     *
     * @param null $idOffre
     * @return \Cake\Http\Response|null
     */
    public function index($idPrestation = null)
    {
        $this->loadModel('Realisations');
        $realisations = $this->Realisations->find('all', array(
            'conditions' => array('Realisations.idPrestation' => $idPrestation)
        ));

        $this->loadModel('Prestations');
        $prestations = $this->Prestations->find('all', array(
            'conditions' => array('Prestations.idPrestation' => $idPrestation),
        ));

        foreach ($prestations as $presta) {
            $prestation = $presta->image;
        }

        $this->set('realisations', $realisations);
        $this->set('prestation',$prestation);
    }
}