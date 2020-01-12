<?php
namespace App\Controller;


class DevisController extends AppController
{

    public function index()
    {
        $this->loadModel('Prestations');
        $prestations = $this->Prestations->find('all', ['order' => 'Prestations.idPrestation ASC']);
        $titre_prestations = array();
        foreach($prestations as $prestation) {
            array_push($titre_prestations, $prestation->titre);
        }
        $this->set('titre_prestations',$titre_prestations);
        $date = date('Y-m-d');
        $this->set('date',$date);

        $this->loadModel('Projets');
        $projet = $this->Projets->newEntity();
        if ($this->request->is('post')) {

            $projet->nom = $this->request->getData()['nom'];
            $projet->prenom = $this->request->getData()['prenom'];
            $projet->mail = $this->request->getData()['mail'];
            $projet->telephone = $this->request->getData()['telephone'];
            $projet->adresse = $this->request->getData()['adresse'];
            $projet->code_postal = $this->request->getData()['code_postal'];
            $projet->ville = $this->request->getData()['ville'];
            $projet->description = $this->request->getData()['description'];
            $projet->type = $titre_prestations[$this->request->getData()['type']];
            $projet->date = $date;

            if ($this->Projets->save($projet)) {
                $this->Flash->success(__('Votre demande de devis a bien été envoyé.'));

                return $this->redirect(['controller' => 'Pages' , 'action' => 'display']);
            }
            $this->Flash->error(__('Votre demande de devis n\'a malheureusement pas pu être envoyé.'));
        }
        $this->set('projet',$projet);

        $this->set(compact('projets'));
    }

    public function isAuthorized($administrateur) {
        return true;
    }
}