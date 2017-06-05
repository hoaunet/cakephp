<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DailyUpdate Entity
 *
 * @property int $id
 * @property int $company_id
 * @property int $project_id
 * @property int $post_by
 * @property string $user_id
 * @property int $timezone_id
 * @property \Cake\I18n\FrozenTime $notification_time
 * @property int $days
 * @property \Cake\I18n\FrozenDate $cron_email_date
 *
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\Project $project
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Timezone $timezone
 */
class DailyUpdate extends Entity
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