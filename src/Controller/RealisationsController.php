<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Realisations Controller
 *
 * @property \App\Model\Table\RealisationsTable $Realisations
 *
 * @method \App\Model\Entity\Realisation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RealisationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $realisations = $this->paginate($this->Realisations);

        $this->set(compact('realisations'));
    }

    /**
     * View method
     *
     * @param string|null $id Realisation id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $realisation = $this->Realisations->get($id, [
            'contain' => [],
        ]);

        $this->set('realisation', $realisation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $realisation = $this->Realisations->newEntity();
        if ($this->request->is('post')) {
            $realisation = $this->Realisations->patchEntity($realisation, $this->request->getData());
            if ($this->Realisations->save($realisation)) {
                $this->Flash->success(__('The realisation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The realisation could not be saved. Please, try again.'));
        }
        $this->set(compact('realisation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Realisation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $realisation = $this->Realisations->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $realisation = $this->Realisations->patchEntity($realisation, $this->request->getData());
            if ($this->Realisations->save($realisation)) {
                $this->Flash->success(__('The realisation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The realisation could not be saved. Please, try again.'));
        }
        $this->set(compact('realisation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Realisation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $realisation = $this->Realisations->get($id);
        if ($this->Realisations->delete($realisation)) {
            $this->Flash->success(__('The realisation has been deleted.'));
        } else {
            $this->Flash->error(__('The realisation could not be deleted. Please, try again.'));
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
