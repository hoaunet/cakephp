<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CustomFilters Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ProjectUniqs
 * @property \Cake\ORM\Association\BelongsTo $Companies
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $FilterTypes
 * @property \Cake\ORM\Association\BelongsTo $FilterMembers
 *
 * @method \App\Model\Entity\CustomFilter get($primaryKey, $options = [])
 * @method \App\Model\Entity\CustomFilter newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CustomFilter[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CustomFilter|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CustomFilter patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CustomFilter[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CustomFilter findOrCreate($search, callable $callback = null, $options = [])
 */
class CustomFiltersTable extends Table
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

        $this->setTable('custom_filters');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('ProjectUniqs', [
            'foreignKey' => 'project_uniq_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Companies', [
            'foreignKey' => 'company_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('FilterTypes', [
            'foreignKey' => 'filter_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('FilterMembers', [
            'foreignKey' => 'filter_member_id',
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
            ->requirePresence('filter_name', 'create')
            ->notEmpty('filter_name');

        $validator
            ->allowEmpty('filter_date');

        $validator
            ->dateTime('filter_duedate')
            ->allowEmpty('filter_duedate');

        $validator
            ->requirePresence('filter_status', 'create')
            ->notEmpty('filter_status');

        $validator
            ->requirePresence('filter_priority', 'create')
            ->notEmpty('filter_priority');

        $validator
            ->requirePresence('filter_assignto', 'create')
            ->notEmpty('filter_assignto');

        $validator
            ->requirePresence('filter_search', 'create')
            ->notEmpty('filter_search');

        $validator
            ->dateTime('dt_created')
            ->requirePresence('dt_created', 'create')
            ->notEmpty('dt_created');

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
        $rules->add($rules->existsIn(['project_uniq_id'], 'ProjectUniqs'));
        $rules->add($rules->existsIn(['company_id'], 'Companies'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['filter_type_id'], 'FilterTypes'));
        $rules->add($rules->existsIn(['filter_member_id'], 'FilterMembers'));

        return $rules;
    }
}
