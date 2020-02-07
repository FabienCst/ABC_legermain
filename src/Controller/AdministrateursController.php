<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Contrôleur de l'objet "Administrateurs"
 *
 * @property \App\Model\Table\AdministrateursTable $Administrateurs
 *
 * @method \App\Model\Entity\Administrateur[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdministrateursController extends AppController
{

    /**
     * La methode "initialize" va être la première méthode appelée lors de la sollicitation du contrôleur "Administrateurs".
     */
    public function initialize() {
        parent::initialize();
        $this->Auth->allow(['logout']);
    }

    /**
     * La methode "index" va être la deuxième méthode appelée si l'initalisation du contrôleur est concluante.
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $administrateurs = $this->paginate($this->Administrateurs);

        $this->set(compact('administrateurs'));
    }

    /**
     * La methode "login" va être responsable de la connexion d'un utlisateur.
     *
     * Elle fait le lien entre le modèle et la vue pour l'onglet de connexion.
     *
     * @return \Cake\Http\Response|null
     */
    public function login() {
        if ($this->request->is('post')) {

            $administrateur = $this->Auth->identify();
            if ($administrateur) {
                $this->Auth->setUser($administrateur);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Votre identifiant ou votre mot de passe est incorrect.');
        }
    }

    /**
     * La methode "logout" va être responsable de la deconnexion d'un utlisateur.
     *
     * @return \Cake\Http\Response|null
     */
    public function logout() {
        $this->Flash->success('Vous avez été déconnecté.');
        $this->Auth->logout();
        return $this->redirect(['controller' => 'Pages','action' => 'display']);
    }

    /**
     * La méthode "add" va être responsable de l'ajout d'administrateurs dans la base de données.
     *
     * Elle fait le lien entre le modèle et la vue dans l'onglet "Ajouter une actualité" de la partie admin.
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $administrateur = $this->Administrateurs->newEntity();
        if ($this->request->is('post')) {
            $administrateur = $this->Administrateurs->patchEntity($administrateur, $this->request->getData());
            if ($this->Administrateurs->save($administrateur)) {
                $this->Flash->success(__('The administrateur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The administrateur could not be saved. Please, try again.'));
        }
        $this->set(compact('administrateur'));
    }

    /**
     * La méthode "edit" va être responsable de la modification d'administrateurs en base de données.
     *
     * @param string|null $id Administrateur id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $administrateur = $this->Administrateurs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $administrateur = $this->Administrateurs->patchEntity($administrateur, $this->request->getData());
            if ($this->Administrateurs->save($administrateur)) {
                $this->Flash->success(__('The administrateur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The administrateur could not be saved. Please, try again.'));
        }
        $this->set(compact('administrateur'));
    }

    /**
     * La méthode "delete" va être responsable de la suppression d'administrateurs en base de données.
     *
     * @param string|null $id Administrateur id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $administrateur = $this->Administrateurs->get($id);
        if ($this->Administrateurs->delete($administrateur)) {
            $this->Flash->success(__('The administrateur has been deleted.'));
        } else {
            $this->Flash->error(__('The administrateur could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
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
