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
        $date = date('Y-m-d');

        if ($this->request->is('post')) {

            $myname_cv = $this->request->getData()['cv']['name'];
            $mytmp_cv = $this->request->getData()['cv']['tmp_name'];
            $mypath_cv = "img\candidatures\cv\\".$myname_cv;

            $myname_lm = $this->request->getData()['lettre_motivation']['name'];
            $mytmp_lm = $this->request->getData()['lettre_motivation']['tmp_name'];
            $mypath_lm = "img\candidatures\lettre_motivation\\".$myname_lm;

            if(move_uploaded_file($mytmp_cv,WWW_ROOT.$mypath_cv) && move_uploaded_file($mytmp_lm,WWW_ROOT.$mypath_lm)){

                $postulant->nom = $this->request->getData()['nom'];
                $postulant->prenom = $this->request->getData()['prenom'];
                $postulant->mail = $this->request->getData()['mail'];
                $postulant->telephone = $this->request->getData()['telephone'];
                $postulant->date = $date;
                $postulant->idOffre = $idOffre;
                $postulant->cv = $myname_cv;
                $postulant->lettre_motivation = $myname_lm;

                if ($this->Postulants->save($postulant)) {
                    $this->Flash->success(__('Votre candidature a bien été envoyé..'));

                    return $this->redirect(['controller' => 'Recrutement', 'action' => 'index']);
                }
                $this->Flash->error(__('Votre candidature n\'a malheureusement pas pu être envoyé.'));
            }

        }

        $this->set('idOffre', $idOffre);
        $this->set('postulant', $postulant);
    }

    public function isAuthorized($administrateur) {
        return true;
    }

}