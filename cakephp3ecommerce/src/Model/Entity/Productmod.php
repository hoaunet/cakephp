<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Productmod Entity
 *
 * @property int $id
 * @property int $product_id
 * @property string $sku
 * @property string $name
 * @property string $value
 * @property float $price
 * @property float $weight
 * @property int $active
 * @property int $views
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Product $product
 */
class Productmod extends Entity
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
