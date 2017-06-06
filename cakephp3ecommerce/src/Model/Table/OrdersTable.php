<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Orders Model
 *
 * @property \Cake\ORM\Association\HasMany $OrderItems
 *
 * @method \App\Model\Entity\Order get($primaryKey, $options = [])
 * @method \App\Model\Entity\Order newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Order[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Order|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Order patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Order[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Order findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OrdersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('orders');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('OrderItems', [
            'foreignKey' => 'order_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('first_name');

        $validator
            ->allowEmpty('last_name');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->allowEmpty('phone');

        $validator
            ->allowEmpty('billing_address');

        $validator
            ->allowEmpty('billing_address2');

        $validator
            ->allowEmpty('billing_city');

        $validator
            ->allowEmpty('billing_zip');

        $validator
            ->allowEmpty('billing_state');

        $validator
            ->allowEmpty('billing_country');

        $validator
            ->allowEmpty('shipping_address');

        $validator
            ->allowEmpty('shipping_address2');

        $validator
            ->allowEmpty('shipping_city');

        $validator
            ->allowEmpty('shipping_zip');

        $validator
            ->allowEmpty('shipping_state');

        $validator
            ->allowEmpty('shipping_country');

        $validator
            ->decimal('weight')
            ->allowEmpty('weight');

        $validator
            ->integer('order_item_count')
            ->allowEmpty('order_item_count');

        $validator
            ->decimal('subtotal')
            ->allowEmpty('subtotal');

        $validator
            ->decimal('tax')
            ->allowEmpty('tax');

        $validator
            ->decimal('shipping')
            ->allowEmpty('shipping');

        $validator
            ->decimal('total')
            ->allowEmpty('total');

        $validator
            ->allowEmpty('order_type');

        $validator
            ->allowEmpty('authorization');

        $validator
            ->allowEmpty('transaction');

        $validator
            ->allowEmpty('status');

        $validator
            ->allowEmpty('ip_address');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
