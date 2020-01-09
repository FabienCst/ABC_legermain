<?php
/**
 * Created by PhpStorm.
 * User: Fabie
 * Date: 09/01/2020
 * Time: 00:52
 */

namespace App\Controller;


class DetailsOffreController extends AppController
{

    public function index($idOffre = null)
    {
        $this->loadModel('Offres');
        $offre = $this->Offres->find('all', array(
            'conditions' => array('Offres.idOffre' => $idOffre)
        ));

        $this->set('offre', $offre);
    }

}