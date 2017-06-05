<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CaseActivities Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Easycases
 * @property \Cake\ORM\Association\BelongsTo $Comments
 * @property \Cake\ORM\Association\BelongsTo $Projects
 * @property \Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\CaseActivity get($primaryKey, $options = [])
 * @method \App\Model\Entity\CaseActivity newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CaseActivity[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CaseActivity|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CaseActivity patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CaseActivity[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CaseActivity findOrCreate($search, callable $callback = null, $options = [])
 */
class CaseActivitiesTable extends Table
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

        $this->setTable('case_activities');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Easycases', [
            'foreignKey' => 'easycase_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Comments', [
            'foreignKey' => 'comment_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Projects', [
            'foreignKey' => 'project_id',
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
            ->integer('case_no')
            ->requirePresence('case_no', 'create')
            ->notEmpty('case_no');

        $validator
            ->integer('type')
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        $validator
            ->integer('isactive')
            ->requirePresence('isactive', 'create')
            ->notEmpty('isactive');

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
        $rules->add($rules->existsIn(['easycase_id'], 'Easycases'));
        $rules->add($rules->existsIn(['comment_id'], 'Comments'));
        $rules->add($rules->existsIn(['project_id'], 'Projects'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
