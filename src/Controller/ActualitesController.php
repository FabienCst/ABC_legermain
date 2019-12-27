<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Actualites Controller
 *
 * @property \App\Model\Table\ActualitesTable $Actualites
 *
 * @method \App\Model\Entity\Actualite[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ActualitesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $actualites = $this->paginate($this->Actualites);

        $this->set(compact('actualites'));
    }

    /**
     * View method
     *
     * @param string|null $id Actualite id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $actualite = $this->Actualites->get($id, [
            'contain' => [],
        ]);

        $this->set('actualite', $actualite);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $actualite = $this->Actualites->newEntity();
        if ($this->request->is('post')) {
            $actualite = $this->Actualites->patchEntity($actualite, $this->request->getData());
            if ($this->Actualites->save($actualite)) {
                $this->Flash->success(__('The actualite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The actualite could not be saved. Please, try again.'));
        }
        $this->set(compact('actualite'));
    }

    /**
     * Edit method
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
        if ($this->request->is(['patch', 'post', 'put'])) {
            $actualite = $this->Actualites->patchEntity($actualite, $this->request->getData());
            if ($this->Actualites->save($actualite)) {
                $this->Flash->success(__('The actualite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The actualite could not be saved. Please, try again.'));
        }
        $this->set(compact('actualite'));
    }

    /**
     * Delete method
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
            $this->Flash->success(__('The actualite has been deleted.'));
        } else {
            $this->Flash->error(__('The actualite could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
