<?php
/**
 * Created by PhpStorm.
 * User: Fabie
 * Date: 09/01/2020
 * Time: 01:28
 */

namespace App\Controller;


class CandidatureController extends AppController
{

    public function index($idOffre = null)
    {
        $this->loadModel('Postulants');
        $postulant = $this->Postulants->newEntity();
        if ($this->request->is('post')) {
            $postulant = $this->Postulants->patchEntity($postulant, $this->request->getData());
            if ($this->Postulants->save($postulant)) {
                $this->Flash->success(__('Votre candidature a bien été envoyé..'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Votre candidature n\'a malheureusement pas pu être envoyé.'));
        }

        $date = date('Y-m-d');
        $this->set('date',$date);
        $this->set('postulant', $postulant);
        $this->set("idOffre",$idOffre);
    }

}