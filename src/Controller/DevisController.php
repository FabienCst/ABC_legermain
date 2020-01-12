<?php

namespace App\Controller;

//App::import("recaptchalib.php");

use Cake\Event\Event;

/**
 * Contrôleur de la page pour formuler une demande de devis.
 *
 * Class DevisController
 * @package App\Controller
 */
class DevisController extends AppController
{
    /**
     * La méthode "beforeFilter" s'assure de permettre aux utilisateurs d'acceder à ce contenu sans authentification.
     *
     * @param Event $event
     * @return \Cake\Http\Response|void|null
     */
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow();
    }

    /**
     * La méthode "index" fait le lien entre le modèle "Prestations" et la vue.
     *
     * Elle se charge d'ajouter les demandes de devis des différents utilisateurs.
     *
     * @return \Cake\Http\Response|null
     */
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

                return $this->redirect(['controller' => 'Pages' , 'action' => 'display']);
            }
        }
        $this->set('projet',$projet);

        $this->set(compact('projets'));
    }
}