<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CustomFilter Entity
 *
 * @property int $id
 * @property string $project_uniq_id
 * @property int $company_id
 * @property int $user_id
 * @property string $filter_name
 * @property string $filter_date
 * @property \Cake\I18n\FrozenTime $filter_duedate
 * @property string $filter_type_id
 * @property string $filter_status
 * @property string $filter_member_id
 * @property string $filter_priority
 * @property string $filter_assignto
 * @property string $filter_search
 * @property \Cake\I18n\FrozenTime $dt_created
 *
 * @property \App\Model\Entity\ProjectUniq $project_uniq
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\FilterType $filter_type
 * @property \App\Model\Entity\FilterMember $filter_member
 */
class CustomFilter extends Entity
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
