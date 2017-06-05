<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transaction Entity
 *
 * @property int $id
 * @property string $btsubscription_id
 * @property string $transaction_id
 * @property int $plan_id
 * @property string $status
 * @property float $subscription_price
 * @property float $amt
 * @property float $discount
 * @property float $addon
 * @property string $transaction_type
 * @property int $invoice_mail_flag
 * @property string $invoice_id
 * @property \Cake\I18n\FrozenTime $created
 * @property string $ip
 * @property int $company_id
 * @property int $user_id
 *
 * @property \App\Model\Entity\Btsubscription $btsubscription
 * @property \App\Model\Entity\Transaction[] $transactions
 * @property \App\Model\Entity\Plan $plan
 * @property \App\Model\Entity\Invoice $invoice
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\User $user
 */
class Transaction extends Entity
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
