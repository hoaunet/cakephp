<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Timezone Entity
 *
 * @property int $id
 * @property float $gmt_offset
 * @property float $dst_offset
 * @property string $code
 *
 * @property \App\Model\Entity\DailyUpdate[] $daily_updates
 * @property \App\Model\Entity\User[] $users
 */
class Timezone extends Entity
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
