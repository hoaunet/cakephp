<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $products_id
 * @property int $products_quantity
 * @property string $products_model
 * @property string $products_image
 * @property float $products_price
 * @property \Cake\I18n\FrozenTime $products_date_added
 * @property \Cake\I18n\FrozenTime $products_last_modified
 * @property \Cake\I18n\FrozenTime $products_date_available
 * @property float $products_weight
 * @property bool $products_status
 * @property int $products_tax_class_id
 * @property int $manufacturers_id
 * @property int $products_ordered
 * @property int $categories_id
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\ProductsTaxClass $products_tax_class
 * @property \App\Model\Entity\Manufacturer $manufacturer
 * @property \App\Model\Entity\Category $category
 */
class Product extends Entity
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
        'products_id' => false
    ];
}
