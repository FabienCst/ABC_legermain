<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Contrôleur de l'objet "Offres"
 *
 * @property \App\Model\Table\OffresTable $Offres
 *
 * @method \App\Model\Entity\Offre[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OffresController extends AppController
{
    /**
     * La methode "index" va être la première méthode appelée lors de la sollicitation du Contrôleur "Offres".
     *
     * Elle fait le lien entre le model et la vue dans l'onglet "Recrutement" de la partie admin.
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $offres = $this->paginate($this->Offres);

        $this->set(compact('offres'));

        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * La méthode "add" va être responsable de l'ajout d'offres dans la base de données.
     *
     * Elle fait le lien entre le modèle et la vue dans l'onglet "Ajouter une offres" de la partie admin.
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $offre = $this->Offres->newEntity();
        if ($this->request->is('post')) {
            $offre = $this->Offres->patchEntity($offre, $this->request->getData());

            if ($this->Offres->save($offre)) {

                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set(compact('offre'));

        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * La méthode "edit" va être responsable de la modification d'offres en base de données.
     *
     * Elle fait le lien entre le modèle et la vue pour modifier une offre dans la partie admin.
     *
     * @param null $id
     * @return \Cake\Http\Response|null
     */
    public function edit($id = null)
    {
        $offre = $this->Offres->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $offre = $this->Offres->patchEntity($offre, $this->request->getData());

            if ($this->Offres->save($offre)) {

                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set(compact('offre'));

        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * La méthode "delete" va être responsable de la suppression d'offres en base de données.
     *
     * Elle fait le lien entre le modèle et la vue pour supprimer une offre dans la partie admin.
     *
     * @param null $id
     * @return \Cake\Http\Response|null
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $offre = $this->Offres->get($id);
        if ($this->Offres->delete($offre)) {
            return $this->redirect(['action' => 'index']);
        }

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
