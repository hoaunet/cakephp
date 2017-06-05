<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProjectUser Entity
 *
 * @property int $id
 * @property int $project_id
 * @property int $company_id
 * @property int $user_id
 * @property int $istype
 * @property int $default_email
 * @property \Cake\I18n\FrozenTime $dt_visited
 *
 * @property \App\Model\Entity\Project $project
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\User $user
 */
class ProjectUser extends Entity
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
