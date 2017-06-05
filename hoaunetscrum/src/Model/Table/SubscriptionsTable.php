<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Subscriptions Model
 *
 * @property \Cake\ORM\Association\HasMany $Companies
 * @property \Cake\ORM\Association\HasMany $UserSubscriptions
 *
 * @method \App\Model\Entity\Subscription get($primaryKey, $options = [])
 * @method \App\Model\Entity\Subscription newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Subscription[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Subscription|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Subscription patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Subscription[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Subscription findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SubscriptionsTable extends Table
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

        $this->setTable('subscriptions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Companies', [
            'foreignKey' => 'subscription_id'
        ]);
        $this->hasMany('UserSubscriptions', [
            'foreignKey' => 'subscription_id'
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
            ->integer('plan')
            ->requirePresence('plan', 'create')
            ->notEmpty('plan');

        $validator
            ->requirePresence('storage', 'create')
            ->notEmpty('storage');

        $validator
            ->requirePresence('project_limit', 'create')
            ->notEmpty('project_limit');

        $validator
            ->requirePresence('user_limit', 'create')
            ->notEmpty('user_limit');

        $validator
            ->requirePresence('milestone_limit', 'create')
            ->notEmpty('milestone_limit');

        $validator
            ->integer('free_trail_days')
            ->requirePresence('free_trail_days', 'create')
            ->notEmpty('free_trail_days');

        $validator
            ->integer('price')
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        $validator
            ->integer('month')
            ->requirePresence('month', 'create')
            ->notEmpty('month');

        $validator
            ->integer('is_active')
            ->requirePresence('is_active', 'create')
            ->notEmpty('is_active');

        return $validator;
    }
}
