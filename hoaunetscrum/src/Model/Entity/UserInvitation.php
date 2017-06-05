<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserInvitation Entity
 *
 * @property int $id
 * @property int $invitor_id
 * @property int $company_id
 * @property int $user_type
 * @property string $project_id
 * @property int $user_id
 * @property int $is_active
 * @property string $qstr
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Invitor $invitor
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\Project $project
 * @property \App\Model\Entity\User $user
 */
class UserInvitation extends Entity
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
