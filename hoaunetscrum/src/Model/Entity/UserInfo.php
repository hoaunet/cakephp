<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserInfo Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $access_token
 * @property int $is_google_signup
 *
 * @property \App\Model\Entity\User $user
 */
class UserInfo extends Entity
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
