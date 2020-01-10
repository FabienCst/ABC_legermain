<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Administrateur Entity
 *
 * @property int $idAdministrateur
 * @property string $identifiant
 * @property string $mot_de_passe
 * @property string $nom
 * @property string $prenom
 * @property string $email
 * @property string $telephone
 * @property int $actif
 */
class Administrateur extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'identifiant' => true,
        'mot_de_passe' => true,
        'nom' => true,
        'prenom' => true,
        'email' => true,
        'telephone' => true,
        'actif' => true,
    ];
}
