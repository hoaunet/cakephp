<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Manufacturer Entity
 *
 * @property int $id
 * @property string $manufacturers_name
 * @property string $manufacturers_image
 * @property \Cake\I18n\FrozenTime $date_added
 * @property \Cake\I18n\FrozenTime $last_modified
 */
class Manufacturer extends Entity
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
        '*' => true,
        'id' => false
    ];
}
