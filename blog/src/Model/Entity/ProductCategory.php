<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Productcategory Entity
 *
 * @property int $id
 * @property string $categories_name
 * @property string $categories_image
 * @property int $parent_id
 * @property int $sort_order
 * @property \Cake\I18n\FrozenTime $date_added
 * @property \Cake\I18n\FrozenTime $last_modified
 *
 * @property \App\Model\Entity\ParentProductcategory $parent_productcategory
 * @property \App\Model\Entity\ChildProductcategory[] $child_productcategories
 */
class Productcategory extends Entity
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
