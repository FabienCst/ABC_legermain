<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Postulants Controller
 *
 * @property \App\Model\Table\PostulantsTable $Postulants
 *
 * @method \App\Model\Entity\Postulant[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PostulantsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $postulants = $this->paginate($this->Postulants);

        $this->set(compact('postulants'));
    }

    /**
     * View method
     *
     * @param string|null $id Postulant id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $postulant = $this->Postulants->get($id, [
            'contain' => [],
        ]);

        $this->set('postulant', $postulant);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $postulant = $this->Postulants->newEntity();
        if ($this->request->is('post')) {
            $postulant = $this->Postulants->patchEntity($postulant, $this->request->getData());
            if ($this->Postulants->save($postulant)) {
                $this->Flash->success(__('The postulant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The postulant could not be saved. Please, try again.'));
        }
        $this->set(compact('postulant'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Postulant id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $postulant = $this->Postulants->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $postulant = $this->Postulants->patchEntity($postulant, $this->request->getData());
            if ($this->Postulants->save($postulant)) {
                $this->Flash->success(__('The postulant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The postulant could not be saved. Please, try again.'));
        }
        $this->set(compact('postulant'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Postulant id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $postulant = $this->Postulants->get($id);
        if ($this->Postulants->delete($postulant)) {
            $this->Flash->success(__('The postulant has been deleted.'));
        } else {
            $this->Flash->error(__('The postulant could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
