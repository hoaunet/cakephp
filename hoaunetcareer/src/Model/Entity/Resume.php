<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Resume Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $career_id
 * @property int $degree_id
 * @property int $level_id
 * @property int $salary_id
 * @property int $school_id
 * @property int $experience
 * @property string $address
 * @property string $uploadcv
 * @property string $lastcompany
 * @property string $summary
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Career $career
 * @property \App\Model\Entity\Degree $degree
 * @property \App\Model\Entity\Level $level
 * @property \App\Model\Entity\Salary $salary
 * @property \App\Model\Entity\School $school
 */
class Resume extends Entity
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
