<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $uniq_id
 * @property string $btprofile_id
 * @property int $usersubscription_id
 * @property string $email
 * @property string $password
 * @property string $fullname
 * @property int $istype
 * @property string $photo
 * @property int $isactive
 * @property \Cake\I18n\FrozenTime $dt_last_login
 * @property \Cake\I18n\FrozenTime $dt_last_logout
 * @property string $ip
 * @property int $active_dashboard_tab
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Uniq $uniq
 * @property \App\Model\Entity\Btprofile $btprofile
 * @property \App\Model\Entity\Usersubscription $usersubscription
 * @property \App\Model\Entity\Timezone $timezone
 * @property \App\Model\Entity\Province $province
 * @property \App\Model\Entity\Companyuser[] $companyusers
 * @property \App\Model\Entity\Newsletter[] $newsletters
 * @property \App\Model\Entity\Userinfo[] $userinfos
 * @property \App\Model\Entity\Userlogin[] $userlogins
 */
class User extends Entity
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

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
