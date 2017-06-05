<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Subscription Entity
 *
 * @property int $id
 * @property int $plan
 * @property string $storage
 * @property string $project_limit
 * @property string $user_limit
 * @property string $milestone_limit
 * @property int $free_trail_days
 * @property int $price
 * @property int $month
 * @property int $is_active
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Company[] $companies
 * @property \App\Model\Entity\UserSubscription[] $user_subscriptions
 */
class Subscription extends Entity
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
