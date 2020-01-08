<?php

namespace App\Controller;

use App\Controller\AppController;


class MessagerieController extends AppController
{
    public function index(){}

    public function delete(){}

    public function export(){}

    public function view(){}

    public function isAuthorized($user) {


        $action = $this->request->getParam('action');
        $pass1 = ($user['idArtisan']->Artisan->exists('idArtisan'));

        return $pass1 ;

    }
}
