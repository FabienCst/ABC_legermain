<?php
namespace App\Controller;

use Cake\Auth\DefaultPasswordHasher;
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
        $date = date('Y-m-d');
        $this->set('date',$date);

        $this->loadModel('Prestations');
        $prestations = $this->Prestations->find('all', ['order' => 'Prestations.idPrestation ASC']);
        $titre_prestations = array();
        foreach($prestations as $prestation) {
            array_push($titre_prestations, $prestation->titre);
        }
        $this->set('titre_prestations',$titre_prestations);



        $realisation = $this->Realisations->newEntity();
        if ($this->request->is('post')) {

            $myname = $this->request->getData()['fichier']['name'];
            $mytmp = $this->request->getData()['fichier']['tmp_name'];
            $myext = substr(strrchr($myname,"."),1);
            $mypath = "img\\realisations\principale\\".$myname;

            if(move_uploaded_file($mytmp,WWW_ROOT.$mypath)){
                //if(copy($mytmp,WWW_ROOT.$mypath)){

                // $prestation = $this->Prestations->patchEntity($prestation, $this->request->getData());

                $idPrestations = $this->Prestations->find('all', array(
                    'conditions' => array('Prestations.titre' => $titre_prestations[$this->request->getData()['presta']])
                ));

                foreach ($idPrestations as $id) {
                    $realisation->idPrestation = (int) $id->idPrestation;
                }

                $realisation->titre = $this->request->getData()['titre'];
                $realisation->date = $this->request->getData()['date'];
                $realisation->description = $this->request->getData()['description'];
                $realisation->image = $myname;

                echo $realisation->titre;
                echo $realisation->description;
                echo $realisation->image;
                echo $realisation->idPrestation;

                if ($this->Realisations->save($realisation)) {
                    $this->Flash->success(__('The realisation has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The realisation could not be saved. Please, try again.'));

            }
            else {
                echo implode( ", ", $this->request->data['fichier']);
                echo $this->request->data['fichier']['tmp_name'];
            }
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
}
