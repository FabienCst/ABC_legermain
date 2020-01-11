<?php

namespace App\Controller;


class MessagerieController extends AppController
{

    public function devis()
    {
        $this->viewBuilder()->setLayout('admin');
    }

    public function candidatures()
    {
        $this->viewBuilder()->setLayout('admin');
    }

    public function isAuthorized($administrateur) {

        $action = $this->request->getParam('action');
        $pass1 = ($administrateur['actif'] === 1);
        $pass2 = in_array($action, ['login', 'logout']);

        return $pass1 || $pass2;
    }
}