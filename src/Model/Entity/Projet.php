<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projet Entity
 *
 * @property int $idProjet
 * @property string $nom
 * @property string $prenom
 * @property string $mail
 * @property string $adresse
 * @property string $code_postal
 * @property string $ville
 * @property string $description
 * @property string $type
 * @property \Cake\I18n\FrozenDate|null $date
 */
class Projet extends Entity
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
        'nom' => true,
        'prenom' => true,
        'mail' => true,
        'adresse' => true,
        'code_postal' => true,
        'ville' => true,
        'description' => true,
        'type' => true,
        'date' => true,
    ];
}
