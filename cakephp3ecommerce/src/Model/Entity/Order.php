<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $billing_address
 * @property string $billing_address2
 * @property string $billing_city
 * @property string $billing_zip
 * @property string $billing_state
 * @property string $billing_country
 * @property string $shipping_address
 * @property string $shipping_address2
 * @property string $shipping_city
 * @property string $shipping_zip
 * @property string $shipping_state
 * @property string $shipping_country
 * @property float $weight
 * @property int $order_item_count
 * @property float $subtotal
 * @property float $tax
 * @property float $shipping
 * @property float $total
 * @property string $order_type
 * @property string $authorization
 * @property string $transaction
 * @property string $status
 * @property string $ip_address
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\OrderItem[] $order_items
 */
class Order extends Entity
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
