<?php
namespace App\Controller;

use Cake\Auth\DefaultPasswordHasher;
use App\Controller\AppController;

/**
 * Contrôleur de l'objet "Prestations"
 *
 * @property \App\Model\Table\PrestationsTable $Prestations
 *
 * @method \App\Model\Entity\Prestation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PrestationsController extends AppController
{
    /**
     * La methode "index" va être la première méthode appelée lors de la sollicitation du Contrôleur "Prestations".
     *
     * Elle fait le lien entre le model et la vue dans l'onglet "Prestations" de la partie admin.
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $prestations = $this->paginate($this->Prestations);

        $this->set(compact('prestations'));

        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * La méthode "add" va être responsable de l'ajout de prestations dans la base de données.
     *
     * Elle fait le lien entre le modèle et la vue dans l'onglet "Ajouter une prestation" de la partie admin.
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

                $prestation->titre = $this->request->getData()['titre'];
                $prestation->sous_titre = $this->request->getData()['sous_titre'];
                $prestation->description = $this->request->getData()['description'];
                $prestation->image = $myname;

                if ($this->Prestations->save($prestation)) {
                    return $this->redirect(['action' => 'index']);
                }

            }
        }
        $this->set(compact('prestation'));

        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * La méthode "edit" va être responsable de la modification de prestations en base de données.
     *
     * Elle fait le lien entre le modèle et la vue pour modifier une prestation dans la partie admin.
     *
     * @param string|null $id Actualite id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $prestation = $this->Prestations->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $myname = $this->request->getData()['fichier']['name'];
            $mytmp = $this->request->getData()['fichier']['tmp_name'];
            $myext = substr(strrchr($myname,"."),1);
            $hasher = new DefaultPasswordHasher();
            //$mynameHash = $hasher->hash($myname);
            $mypath = "img\prestations\\".$myname;

            if(move_uploaded_file($mytmp,WWW_ROOT.$mypath)) {

                $prestation->titre = $this->request->getData()['titre'];
                $prestation->sous_titre = $this->request->getData()['sous_titre'];
                $prestation->description = $this->request->getData()['description'];
                $prestation->image = $myname;

                if ($this->Prestations->save($prestation)) {

                    return $this->redirect(['action' => 'index']);
                }
            }
        }
        $this->set(compact('prestation'));

        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * La méthode "delete" va être responsable de la suppression de prestations en base de données.
     *
     * Elle fait le lien entre le modèle et la vue pour supprimer une prestation dans la partie admin.
     *
     * @param null $id
     * @return \Cake\Http\Response|null
     */
    public function delete($id = null)
    {
        $this->loadModel('Realisations');
        $realisations = $this->Realisations->find('all', array(
            'conditions' => array('Realisations.idPrestation' => $id)
        ));

        $this->request->allowMethod(['post', 'delete']);
        $prestation = $this->Prestations->get($id);
        if ($this->Prestations->delete($prestation)) {
            return $this->redirect(['action' => 'index']);
        }

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
