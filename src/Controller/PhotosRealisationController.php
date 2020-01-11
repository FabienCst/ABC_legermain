<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PhotosRealisation Controller
 *
 * @property \App\Model\Table\PhotosRealisationTable $PhotosRealisation
 *
 * @method \App\Model\Entity\PhotosRealisation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PhotosRealisationController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $photosRealisation = $this->paginate($this->PhotosRealisation);

        $this->set(compact('photosRealisation'));
    }

    /**
     * View method
     *
     * @param string|null $id Photos Realisation id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $photosRealisation = $this->PhotosRealisation->get($id, [
            'contain' => [],
        ]);

        $this->set('photosRealisation', $photosRealisation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $photosRealisation = $this->PhotosRealisation->newEntity();
        if ($this->request->is('post')) {
            $photosRealisation = $this->PhotosRealisation->patchEntity($photosRealisation, $this->request->getData());
            if ($this->PhotosRealisation->save($photosRealisation)) {
                $this->Flash->success(__('The photos realisation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The photos realisation could not be saved. Please, try again.'));
        }
        $this->set(compact('photosRealisation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Photos Realisation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $photosRealisation = $this->PhotosRealisation->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $photosRealisation = $this->PhotosRealisation->patchEntity($photosRealisation, $this->request->getData());
            if ($this->PhotosRealisation->save($photosRealisation)) {
                $this->Flash->success(__('The photos realisation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The photos realisation could not be saved. Please, try again.'));
        }
        $this->set(compact('photosRealisation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Photos Realisation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $photosRealisation = $this->PhotosRealisation->get($id);
        if ($this->PhotosRealisation->delete($photosRealisation)) {
            $this->Flash->success(__('The photos realisation has been deleted.'));
        } else {
            $this->Flash->error(__('The photos realisation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
