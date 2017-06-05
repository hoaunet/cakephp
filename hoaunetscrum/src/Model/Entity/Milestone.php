<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Milestone Entity
 *
 * @property int $id
 * @property string $uniq_id
 * @property int $project_id
 * @property int $company_id
 * @property string $title
 * @property string $description
 * @property int $user_id
 * @property \Cake\I18n\FrozenDate $start_date
 * @property \Cake\I18n\FrozenDate $end_date
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $isactive
 * @property int $id_seq
 *
 * @property \App\Model\Entity\Uniq $uniq
 * @property \App\Model\Entity\Project $project
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\EasycaseMilestone[] $easycase_milestones
 */
class Milestone extends Entity
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
