<?php

namespace App\Controller;

use Cake\Auth\DefaultPasswordHasher;
use App\Controller\AppController;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;

/**
 * Contrôleur de l'objet "Realisations"
 *
 * @property \App\Model\Table\RealisationsTable $Realisations
 *
 * @method \App\Model\Entity\Realisation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RealisationsController extends AppController
{
    /**
     * La methode "index" va être la première méthode appelée lors de la sollicitation du Contrôleur "Realisations".
     *
     * Elle fait le lien entre le model et la vue dans l'onglet "Realisations" de la partie admin.
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $realisations = $this->paginate($this->Realisations);

        $this->set(compact('realisations'));

        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * La méthode "add" va être responsable de l'ajout de réalisations dans la base de données.
     *
     * Elle fait le lien entre le modèle et la vue dans l'onglet "Ajouter une réalisation" de la partie admin.
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

            if(move_uploaded_file($mytmp,WWW_ROOT.$mypath)) {

                $idPrestations = $this->Prestations->find('all', array(
                    'conditions' => array('Prestations.titre' => $titre_prestations[$this->request->getData()['presta']])
                ));

                foreach ($idPrestations as $id) {
                    $realisation->idPrestation = (int) $id->idPrestation;
                }

                $realisation->titre = $this->request->getData()['titre'];
                $realisation->date = date('Y-m-d', strtotime(implode('-',$this->request->getData()['date'])));
                $realisation->description = $this->request->getData()['description'];
                $realisation->image = $myname;

                if ($this->Realisations->save($realisation)) {

                    return $this->redirect(['action' => 'index']);
                }

            }
        }
        $this->set(compact('realisation'));

        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * La méthode "edit" va être responsable de la modification de réalisations en base de données.
     *
     * Elle fait le lien entre le modèle et la vue pour modifier une réalisation dans la partie admin.
     *
     * @param null $id
     * @return \Cake\Http\Response|null
     */
    public function edit($id = null)
    {
        $this->loadModel('Prestations');
        $prestations = $this->Prestations->find('all', ['order' => 'Prestations.idPrestation ASC']);
        $titre_prestations = array();
        foreach($prestations as $prestation) {
            array_push($titre_prestations, $prestation->titre);
        }
        $this->set('titre_prestations',$titre_prestations);

        $realisation = $this->Realisations->get($id, [
            'contain' => [],
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {


            $myname = $this->request->getData()['fichier']['name'];
            $mytmp = $this->request->getData()['fichier']['tmp_name'];
            $myext = substr(strrchr($myname,"."),1);
            $mypath = "img\\realisations\principale\\".$myname;

            if(move_uploaded_file($mytmp,WWW_ROOT.$mypath)) {

                $realisation = $this->Realisations->patchEntity($realisation, $this->request->getData());

                $idPrestations = $this->Prestations->find('all', array(
                    'conditions' => array('Prestations.titre' => $titre_prestations[$this->request->getData()['presta']])
                ));

                foreach ($idPrestations as $id) {
                    $realisation->idPrestation = (int) $id->idPrestation;
                }

                $realisation->titre = $this->request->getData()['titre'];
                $realisation->date = date('Y-m-d', strtotime(implode('-',$this->request->getData()['date'])));
                $realisation->description = $this->request->getData()['description'];
                $realisation->image = $myname;

                if ($this->Realisations->save($realisation)) {

                    return $this->redirect(['action' => 'index']);
                }
            }
        }
        $this->set(compact('realisation'));

        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * La méthode "delete" va être responsable de la suppression de réalisations en base de données.
     *
     * Elle fait le lien entre le modèle et la vue pour supprimer une réalisation dans la partie admin.
     *
     * @param string|null $id Actualite id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $realisation = $this->Realisations->get($id);
        if ($this->Realisations->delete($realisation)) {
            return $this->redirect(['action' => 'index']);
        }

        $this->viewBuilder()->setLayout('admin');
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
