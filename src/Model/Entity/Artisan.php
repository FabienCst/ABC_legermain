<?php


namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class Artisan extends Entity
{

    protected $_accessible = [
        'idArtisan' => true,
        'identifiant' => true,
        'mot_de_passe' => true,
        'nom' => true,
        'prenom' => true,
        'email' => true,
        'telephone' => true

    ];

   /* // Tout le code de bake sera ici.

    // Ajoutez cette méthode
    protected function _setPassword($value)
    {
        if (strlen($value)) {
            $hasher = new DefaultPasswordHasher();

            return $hasher->hash($value);
        }
    }*/
}
