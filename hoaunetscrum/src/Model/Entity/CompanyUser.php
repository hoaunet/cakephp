<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CompanyUser Entity
 *
 * @property int $id
 * @property int $company_id
 * @property string $company_uniq_id
 * @property int $user_id
 * @property int $user_type
 * @property int $is_active
 * @property float $est_billing_amt
 * @property \Cake\I18n\FrozenTime $act_date
 * @property \Cake\I18n\FrozenTime $billing_start_date
 * @property \Cake\I18n\FrozenTime $billing_end_date
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\CompanyUniq $company_uniq
 * @property \App\Model\Entity\User $user
 */
class CompanyUser extends Entity
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
