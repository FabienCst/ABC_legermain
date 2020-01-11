<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DocumentsActualite Controller
 *
 * @property \App\Model\Table\DocumentsActualiteTable $DocumentsActualite
 *
 * @method \App\Model\Entity\DocumentsActualite[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DocumentsActualiteController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $documentsActualite = $this->paginate($this->DocumentsActualite);

        $this->set(compact('documentsActualite'));
    }

    /**
     * View method
     *
     * @param string|null $id Documents Actualite id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $documentsActualite = $this->DocumentsActualite->get($id, [
            'contain' => [],
        ]);

        $this->set('documentsActualite', $documentsActualite);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $documentsActualite = $this->DocumentsActualite->newEntity();
        if ($this->request->is('post')) {
            $documentsActualite = $this->DocumentsActualite->patchEntity($documentsActualite, $this->request->getData());
            if ($this->DocumentsActualite->save($documentsActualite)) {
                $this->Flash->success(__('The documents actualite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The documents actualite could not be saved. Please, try again.'));
        }
        $this->set(compact('documentsActualite'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Documents Actualite id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $documentsActualite = $this->DocumentsActualite->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $documentsActualite = $this->DocumentsActualite->patchEntity($documentsActualite, $this->request->getData());
            if ($this->DocumentsActualite->save($documentsActualite)) {
                $this->Flash->success(__('The documents actualite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The documents actualite could not be saved. Please, try again.'));
        }
        $this->set(compact('documentsActualite'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Documents Actualite id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $documentsActualite = $this->DocumentsActualite->get($id);
        if ($this->DocumentsActualite->delete($documentsActualite)) {
            $this->Flash->success(__('The documents actualite has been deleted.'));
        } else {
            $this->Flash->error(__('The documents actualite could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
