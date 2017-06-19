<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Companyusers Model
 *
 * @property \App\Model\Table\CompaniesTable|\Cake\ORM\Association\BelongsTo $Companies
 * @property \App\Model\Table\CompanyUniqsTable|\Cake\ORM\Association\BelongsTo $CompanyUniqs
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Companyuser get($primaryKey, $options = [])
 * @method \App\Model\Entity\Companyuser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Companyuser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Companyuser|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Companyuser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Companyuser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Companyuser findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CompanyusersTable extends Table
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

        $this->setTable('companyusers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Companies', [
            'foreignKey' => 'company_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('CompanyUniqs', [
            'foreignKey' => 'company_uniq_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
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
            ->integer('user_type')
            ->requirePresence('user_type', 'create')
            ->notEmpty('user_type');

        $validator
            ->integer('is_active')
            ->requirePresence('is_active', 'create')
            ->notEmpty('is_active');

        $validator
            ->numeric('est_billing_amt')
            ->requirePresence('est_billing_amt', 'create')
            ->notEmpty('est_billing_amt');

        $validator
            ->dateTime('act_date')
            ->allowEmpty('act_date');

        $validator
            ->dateTime('billing_start_date')
            ->allowEmpty('billing_start_date');

        $validator
            ->dateTime('billing_end_date')
            ->allowEmpty('billing_end_date');

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
        $rules->add($rules->existsIn(['company_id'], 'Companies'));
        $rules->add($rules->existsIn(['company_uniq_id'], 'CompanyUniqs'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
