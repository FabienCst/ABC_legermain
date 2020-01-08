<?php


namespace App\Controller;
use App\Controller\AppController;

/**
 * AdminActualites Controller
 *
 * @property \App\Model\Table\ActualitesTable $Actualites
 *
 * @method \App\Model\Entity\Actualite[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdminActualitesController extends AppController
{
    public function index(){}

    public function delete(){}

    public function edit(){}

    public function view(){}

    public function add(){}

    public function isAuthorized($user) {


        $action = $this->request->getParam('action');
        $pass1 = ($user['idArtisan']->Artisan->exists('idArtisan'));

        return $pass1;

    }
}
