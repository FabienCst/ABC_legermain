<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Postulant Entity
 *
 * @property int $idPostulant
 * @property string $nom
 * @property string $prenom
 * @property string $mail
 * @property string $telephone
 * @property \Cake\I18n\FrozenDate|null $date
 * @property string $cv
 * @property string $lettre_motivation
 * @property int $idOffre
 */
class Postulant extends Entity
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
        'telephone' => true,
        'date' => true,
        'cv' => true,
        'lettre_motivation' => true,
        'idOffre' => true,
    ];
}
