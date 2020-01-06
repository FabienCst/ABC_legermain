<?php

namespace App\Controller;


class DetailsRealisationController extends AppController
{

    public function index($idRealisation = null)
    {
        $this->loadModel('Realisations');
        $realisation = $this->Realisations->find('all', array(
            'conditions' => array('Realisations.idRealisation' => $idRealisation)
        ));

        $this->set('realisation', $realisation);
    }

}