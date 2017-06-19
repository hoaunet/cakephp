<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Userinfo Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $access_token
 * @property int $is_google_signup
 * @property bool $gender
 * @property \Cake\I18n\FrozenTime $birdthday
 * @property bool $is_mariage
 * @property string $address
 * @property string $contact_phone
 * @property int $province_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Province $province
 */
class Userinfo extends Entity
{

}
