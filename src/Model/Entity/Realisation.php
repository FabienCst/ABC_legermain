<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Realisation Entity
 *
 * @property int $idRealisation
 * @property string $titre
 * @property string|null $description
 * @property \Cake\I18n\FrozenDate|null $date
 * @property int $idPrestation
 */
class Realisation extends Entity
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
        'titre' => true,
        'description' => true,
        'date' => true,
        'idPrestation' => true,
    ];
}
