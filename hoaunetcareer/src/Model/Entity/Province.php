<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Province Entity
 *
 * @property int $id
 * @property string $province_name
 * @property int $province_type
 * @property int $province_code
 * @property int $parent_id
 * @property int $country_id
 * @property int $status
 *
 * @property \App\Model\Entity\ParentProvince $parent_province
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\ChildProvince[] $child_provinces
 * @property \App\Model\Entity\School[] $schools
 * @property \App\Model\Entity\User[] $users
 */
class Province extends Entity
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
