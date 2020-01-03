<?php

namespace App\Controller;


class GalerieRealisationsController extends AppController
{

    public function index($idPrestation = null)
    {
        $this->loadModel('Realisations');
        $realisations = $this->Realisations->find('all', array(
            'conditions' => array('Realisations.idPrestation' => $idPrestation)
        ));

        $this->set('realisations', $realisations);
    }

}