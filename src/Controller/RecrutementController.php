<?php

namespace App\Controller;


class RecrutementController extends AppController
{

    public function index()
    {
        $this->loadModel('Offres');
        $offres = $this->Offres->find('all');

        $this->set('offres', $offres);
    }

    public function isAuthorized($administrateur) {
        return true;
    }

}