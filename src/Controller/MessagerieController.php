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
            return $this->redirect(['action' => 'candidatures']);
        } else {
            $this->Flash->error(__('La candidature n\'a pas pu être supprimé.'));
        }
    }

    public function deleteProjet($id = null)
    {
        $this->loadModel('Offres');
        $this->request->allowMethod(['post', 'delete']);
        $offre = $this->Offres->get($id);
        if ($this->Offres->delete($offre)) {
            return $this->redirect(['action' => 'devis']);
        } else {
            $this->Flash->error(__('La demande de devis n\'a pas pu être supprimé.'));
        }
    }

    public function isAuthorized($administrateur) {

        $action = $this->request->getParam('action');
        $pass1 = ($administrateur['actif'] === 1);
        $pass2 = in_array($action, ['login', 'logout']);

        return $pass1 || $pass2;
    }
}