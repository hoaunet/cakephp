<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Transactions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Btsubscriptions
 * @property \Cake\ORM\Association\BelongsTo $Transactions
 * @property \Cake\ORM\Association\BelongsTo $Plans
 * @property \Cake\ORM\Association\BelongsTo $Invoices
 * @property \Cake\ORM\Association\BelongsTo $Companies
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\HasMany $Transactions
 *
 * @method \App\Model\Entity\Transaction get($primaryKey, $options = [])
 * @method \App\Model\Entity\Transaction newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Transaction[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Transaction|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Transaction patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Transaction[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Transaction findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TransactionsTable extends Table
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

        $this->setTable('transactions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Btsubscriptions', [
            'foreignKey' => 'btsubscription_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Transactions', [
            'foreignKey' => 'transaction_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Plans', [
            'foreignKey' => 'plan_id'
        ]);
        $this->belongsTo('Invoices', [
            'foreignKey' => 'invoice_id'
        ]);
        $this->belongsTo('Companies', [
            'foreignKey' => 'company_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Transactions', [
            'foreignKey' => 'transaction_id'
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
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->numeric('subscription_price')
            ->allowEmpty('subscription_price');

        $validator
            ->numeric('amt')
            ->requirePresence('amt', 'create')
            ->notEmpty('amt');

        $validator
            ->numeric('discount')
            ->allowEmpty('discount');

        $validator
            ->numeric('addon')
            ->allowEmpty('addon');

        $validator
            ->requirePresence('transaction_type', 'create')
            ->notEmpty('transaction_type');

        $validator
            ->integer('invoice_mail_flag')
            ->allowEmpty('invoice_mail_flag');

        $validator
            ->requirePresence('ip', 'create')
            ->notEmpty('ip');

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
        $rules->add($rules->existsIn(['btsubscription_id'], 'Btsubscriptions'));
        $rules->add($rules->existsIn(['transaction_id'], 'Transactions'));
        $rules->add($rules->existsIn(['plan_id'], 'Plans'));
        $rules->add($rules->existsIn(['invoice_id'], 'Invoices'));
        $rules->add($rules->existsIn(['company_id'], 'Companies'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
