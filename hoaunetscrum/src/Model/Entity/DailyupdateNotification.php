<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DailyupdateNotification Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $company_id
 * @property int $dly_update
 * @property string $notification_time
 * @property string $proj_name
 * @property \Cake\I18n\FrozenTime $mail_sent
 * @property \Cake\I18n\FrozenTime $modified
 * @property bool $status
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Company $company
 */
class DailyupdateNotification extends Entity
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