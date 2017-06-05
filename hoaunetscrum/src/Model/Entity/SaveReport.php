<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SaveReport Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $rpt_type
 * @property \Cake\I18n\FrozenDate $frm_dt
 * @property \Cake\I18n\FrozenDate $to_dt
 * @property \Cake\I18n\FrozenTime $created
 * @property string $ip
 *
 * @property \App\Model\Entity\User $user
 */
class SaveReport extends Entity
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
