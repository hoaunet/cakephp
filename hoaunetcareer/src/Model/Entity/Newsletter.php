<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Newsletter Entity
 *
 * @property int $id
 * @property int $career_id
 * @property int $level_id
 * @property int $user_id
 * @property string $email
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Career $career
 * @property \App\Model\Entity\Level $level
 * @property \App\Model\Entity\User $user
 */
class Newsletter extends Entity
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
