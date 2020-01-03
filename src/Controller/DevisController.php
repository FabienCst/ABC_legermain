<?php
namespace App\Controller;


class DevisController extends AppController
{

    public function index()
    {
        $this->loadModel('Projets');
        $projet = $this->Projets->newEntity();
        if ($this->request->is('post')) {
            $projet = $this->Projets->patchEntity($projet, $this->request->getData());
            if ($this->Projets->save($projet)) {
                $this->Flash->success(__('Votre demande de devis a bien été envoyé.'));

                return $this->redirect(['controller' => 'Pages' , 'action' => 'display']);
            }
            $this->Flash->error(__('Votre demande de devis n\'a malheureusement pas pu être envoyé.'));
        }
        $this->set('projet',$projet);

        $this->set(compact('projets'));
    }
}