<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Offre Entity
 *
 * @property int $idOffre
 * @property string $type
 * @property string $description
 * @property string $exp_requise
 * @property string $corps_metier
 * @property \Cake\I18n\FrozenDate|null $date_debut
 * @property \Cake\I18n\FrozenDate|null $date_fin
 * @property string|null $duree
 */
class Offre extends Entity
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
        'type' => true,
        'description' => true,
        'exp_requise' => true,
        'corps_metier' => true,
        'date_debut' => true,
        'date_fin' => true,
        'duree' => true,
    ];
}
