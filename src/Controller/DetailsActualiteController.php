<?php

namespace App\Controller;

use Cake\Event\Event;

/**
 * Contrôleur de la page pour acceder aux détails d'une actualité..
 *
 * Class DetailsActualiteController
 * @package App\Controller
 */
class DetailsActualiteController extends AppController
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
     * La méthode "index" fait le lien entre le modèle "Actualites" et la vue.
     *
     * Elle se charge de mettre à disposition les informations d'une actulité en particulier.
     *
     * @param null $idActualite
     * @return \Cake\Http\Response|null
     */
    public function index($idActualite = null)
    {
        $this->loadModel('Actualites');
        $actualite = $this->Actualites->find('all', array(
            'conditions' => array('Actualites.idActualite' => $idActualite)
        ));

        $this->set('actualite', $actualite);
    }

}