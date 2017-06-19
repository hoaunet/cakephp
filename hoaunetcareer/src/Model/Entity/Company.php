<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Company Entity
 *
 * @property int $id
 * @property string $uniq_id
 * @property string $name
 * @property string $seo_url
 * @property int $subscription_id
 * @property string $logo
 * @property string $website
 * @property string $contact_phone
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $is_beta
 * @property int $is_active
 * @property int $is_deactivated
 * @property int $twitted
 *
 * @property \App\Model\Entity\Uniq $uniq
 * @property \App\Model\Entity\Subscription $subscription
 * @property \App\Model\Entity\Companyuser[] $companyusers
 */
class Company extends Entity
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
