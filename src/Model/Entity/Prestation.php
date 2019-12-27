<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Prestation Entity
 *
 * @property int $idPrestation
 * @property string $titre
 * @property string $sous_titre
 * @property string $description
 */
class Prestation extends Entity
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
        'sous_titre' => true,
        'description' => true,
    ];
}
