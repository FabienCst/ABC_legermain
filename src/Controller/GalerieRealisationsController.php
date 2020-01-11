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
