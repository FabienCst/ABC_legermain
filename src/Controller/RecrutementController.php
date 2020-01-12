<?php

namespace App\Controller;

use Cake\Event\Event;

/**
 * Contrôleur de la page présentant les offres d'emploi.
 *
 * Class RecrutementController
 * @package App\Controller
 */
class RecrutementController extends AppController
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
     * La méthode "index" fait le lien entre le modèle "Offres" et la vue.
     *
     * Elle se charge de mettre à disposition les informations des offres d'emploi.
     *
     * @param null $idRealisation
     */
    public function index()
    {
        $this->loadModel('Offres');
        $offres = $this->Offres->find('all');

        $this->set('offres', $offres);
    }

}