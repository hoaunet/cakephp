<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductCategory Entity
 *
 * @property int $categories_id
 * @property string $categories_image
 * @property int $parent_id
 * @property int $sort_order
 * @property \Cake\I18n\FrozenTime $date_added
 * @property \Cake\I18n\FrozenTime $last_modified
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\ParentProductCategory $parent_product_category
 * @property \App\Model\Entity\ChildProductCategory[] $child_product_categories
 */
class ProductCategory extends Entity
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
        'categories_id' => false
    ];
}
