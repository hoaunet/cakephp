<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * School Entity
 *
 * @property int $id
 * @property string $school_name
 * @property string $school_address
 * @property string $school_type
 * @property string $school_website
 * @property int $province_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Province $province
 * @property \App\Model\Entity\Resume[] $resumes
 */
class School extends Entity
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
