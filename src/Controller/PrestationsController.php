<?php
namespace App\Controller;

use Cake\Auth\DefaultPasswordHasher;
use App\Controller\AppController;

/**
 * Prestations Controller
 *
 * @property \App\Model\Table\PrestationsTable $Prestations
 *
 * @method \App\Model\Entity\Prestation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PrestationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $prestations = $this->paginate($this->Prestations);

        $this->set(compact('prestations'));
    }

    /**
     * View method
     *
     * @param string|null $id Prestation id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $prestation = $this->Prestations->get($id, [
            'contain' => [],
        ]);

        $this->set('prestation', $prestation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $prestation = $this->Prestations->newEntity();
        if ($this->request->is('post')) {

            $myname = $this->request->getData()['fichier']['name'];
            $mytmp = $this->request->getData()['fichier']['tmp_name'];
            $myext = substr(strrchr($myname,"."),1);
            $hasher = new DefaultPasswordHasher();
            //$mynameHash = $hasher->hash($myname);
            $mypath = "img\prestations\\".$myname;

            if(move_uploaded_file($mytmp,WWW_ROOT.$mypath)){
            //if(copy($mytmp,WWW_ROOT.$mypath)){

                // $prestation = $this->Prestations->patchEntity($prestation, $this->request->getData());



                $prestation->titre = $this->request->getData()['titre'];
                $prestation->sous_titre = $this->request->getData()['sous_titre'];
                $prestation->description = $this->request->getData()['description'];
                $prestation->image = $myname;

                if ($this->Prestations->save($prestation)) {
                    $this->Flash->success(__('The prestation has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The prestation could not be saved. Please, try again.'));

            }
        }
        $this->set(compact('prestation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Prestation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $prestation = $this->Prestations->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prestation = $this->Prestations->patchEntity($prestation, $this->request->getData());
            if ($this->Prestations->save($prestation)) {
                $this->Flash->success(__('The prestation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prestation could not be saved. Please, try again.'));
        }
        $this->set(compact('prestation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Prestation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $prestation = $this->Prestations->get($id);
        if ($this->Prestations->delete($prestation)) {
            $this->Flash->success(__('The prestation has been deleted.'));
        } else {
            $this->Flash->error(__('The prestation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
