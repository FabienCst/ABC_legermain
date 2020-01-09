<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Administrateurs Controller
 *
 * @property \App\Model\Table\AdministrateursTable $Administrateurs
 *
 * @method \App\Model\Entity\Administrateur[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdministrateursController extends AppController
{

    public function initialize() {
        parent::initialize();
        $this->Auth->allow(['logout']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $administrateurs = $this->paginate($this->Administrateurs);

        $this->set(compact('administrateurs'));
    }

    /**
     * Index method
     *
     **/
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


    public function logout() {
        $this->Flash->success('Vous avez été déconnecté.');
        return $this->redirect($this->Auth->logout());
    }

    /**
     * View method
     *
     * @param string|null $id Administrateur id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $administrateur = $this->Administrateurs->get($id, [
            'contain' => [],
        ]);

        $this->set('administrateur', $administrateur);
    }

    /**
     * Add method
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
     * Edit method
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
     * Delete method
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

    public function isAuthorized($administrateur) {

        $action = $this->request->getParam('action');
        $pass1 = ($administrateur['actif'] === 1);
        $pass2 = in_array($action, ['login', 'logout']);

        return $pass1 || $pass2;
    }
}
