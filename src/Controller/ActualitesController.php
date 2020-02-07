<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Contrôleur de l'objet "Actualites"
 *
 * @property \App\Model\Table\ActualitesTable $Actualites
 *
 * @method \App\Model\Entity\Actualite[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ActualitesController extends AppController
{
    /**
     * La methode "index" va être la première méthode appelée lors de la sollicitation du Contrôleur "Actualites".
     *
     * Elle fait le lien entre le model et la vue dans l'onglet "Actualités" de la partie admin.
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $actualites = $this->paginate($this->Actualites);

        $this->set(compact('actualites'));

        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * La méthode "add" va être responsable de l'ajout d'actualités dans la base de données.
     *
     * Elle fait le lien entre le modèle et la vue dans l'onglet "Ajouter une actualité" de la partie admin.
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $date = date('Y-m-d');
        $actualite = $this->Actualites->newEntity();
        if ($this->request->is('post')) {

            $myname = $this->request->getData()['fichier']['name'];
            $mytmp = $this->request->getData()['fichier']['tmp_name'];
            $myext = substr(strrchr($myname,"."),1);
            $mypath = "img\\actualites\principale\\".$myname;

            if(move_uploaded_file($mytmp,WWW_ROOT.$mypath)) {

                $actualite->titre = $this->request->getData()['titre'];
                $actualite->date = $date;
                $actualite->description = $this->request->getData()['description'];
                $actualite->image = $myname;

                if ($this->Actualites->save($actualite)) {

                    return $this->redirect(['action' => 'index']);
                }
            }
        }
        $this->set(compact('actualite'));

        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * La méthode "edit" va être responsable de la modification d'actualités en base de données.
     *
     * Elle fait le lien entre le modèle et la vue pour modifier une actualité dans la partie admin.
     *
     * @param string|null $id Actualite id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $actualite = $this->Actualites->get($id, [
            'contain' => [],
        ]);

        $date = date('Y-m-d');
        if ($this->request->is(['patch', 'post', 'put'])) {
            $myname = $this->request->getData()['fichier']['name'];
            $mytmp = $this->request->getData()['fichier']['tmp_name'];
            $myext = substr(strrchr($myname,"."),1);
            $mypath = "img\\actualites\principale\\".$myname;

            if(move_uploaded_file($mytmp,WWW_ROOT.$mypath)) {

                $actualite->titre = $this->request->getData()['titre'];
                $actualite->date = $date;
                $actualite->description = $this->request->getData()['description'];
                $actualite->image = $myname;

                if ($this->Actualites->save($actualite)) {

                    return $this->redirect(['action' => 'index']);
                }

            }
        }
        $this->set(compact('actualite'));

        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * La méthode "delete" va être responsable de la suppression d'actualités en base de données.
     *
     * Elle fait le lien entre le modèle et la vue pour supprimer une actualité dans la partie admin.
     *
     * @param string|null $id Actualite id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $actualite = $this->Actualites->get($id);
        if ($this->Actualites->delete($actualite)) {
            return $this->redirect(['action' => 'index']);
        }

        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * La méthode "isAuthorized" determine si l'utilisateur peut acceder ou non à ce contenu.
     *
     * @param $administrateur
     * @return bool
     */
    public function isAuthorized($administrateur) {

        $action = $this->request->getParam('action');
        $pass1 = ($administrateur['actif'] === 1);
        $pass2 = in_array($action, ['login', 'logout']);

        return $pass1 || $pass2;
    }
}
