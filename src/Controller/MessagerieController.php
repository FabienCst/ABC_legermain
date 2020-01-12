<?php

namespace App\Controller;


class MessagerieController extends AppController
{

    public function devis()
    {
        $this->loadModel('Projets');
        $projets = $this->Projets->find('all', ['order' => 'Projets.date ASC']);
        $this->set('projets',$projets);

        $this->viewBuilder()->setLayout('admin');
    }

    public function candidatures()
    {
        $this->loadModel('Postulants');
        $postulants = $this->Postulants->find('all', ['order' => 'Postulants.date ASC']);
        $this->set('postulants',$postulants);

        $this->viewBuilder()->setLayout('admin');
    }

    public function deleteDevis($id = null)
    {
        $this->loadModel('Postulants');
        $this->request->allowMethod(['post', 'delete']);
        $postulant = $this->Postulants->get($id);
        if ($this->Postulants->delete($postulant)) {
            $this->Flash->success(__('Le postulant a été supprimer.'));
        } else {
            $this->Flash->error(__('Le postulant n\'a pas pu être supprimé.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function isAuthorized($administrateur) {

        $action = $this->request->getParam('action');
        $pass1 = ($administrateur['actif'] === 1);
        $pass2 = in_array($action, ['login', 'logout']);

        return $pass1 || $pass2;
    }
}