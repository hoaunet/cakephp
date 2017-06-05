<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Easycases Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Uniqs
 * @property \Cake\ORM\Association\BelongsTo $Projects
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Types
 * @property \Cake\ORM\Association\HasMany $Archives
 * @property \Cake\ORM\Association\HasMany $CaseActions
 * @property \Cake\ORM\Association\HasMany $CaseActivities
 * @property \Cake\ORM\Association\HasMany $CaseFileDrives
 * @property \Cake\ORM\Association\HasMany $CaseFiles
 * @property \Cake\ORM\Association\HasMany $CaseRecents
 * @property \Cake\ORM\Association\HasMany $CaseUserEmails
 * @property \Cake\ORM\Association\HasMany $CaseUserViews
 * @property \Cake\ORM\Association\HasMany $EasycaseMilestones
 *
 * @method \App\Model\Entity\Easycase get($primaryKey, $options = [])
 * @method \App\Model\Entity\Easycase newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Easycase[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Easycase|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Easycase patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Easycase[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Easycase findOrCreate($search, callable $callback = null, $options = [])
 */
class EasycasesTable extends Table
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

        $this->setTable('easycases');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->belongsTo('Uniqs', [
            'foreignKey' => 'uniq_id',
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
        $this->belongsTo('Types', [
            'foreignKey' => 'type_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Archives', [
            'foreignKey' => 'easycase_id'
        ]);
        $this->hasMany('CaseActions', [
            'foreignKey' => 'easycase_id'
        ]);
        $this->hasMany('CaseActivities', [
            'foreignKey' => 'easycase_id'
        ]);
        $this->hasMany('CaseFileDrives', [
            'foreignKey' => 'easycase_id'
        ]);
        $this->hasMany('CaseFiles', [
            'foreignKey' => 'easycase_id'
        ]);
        $this->hasMany('CaseRecents', [
            'foreignKey' => 'easycase_id'
        ]);
        $this->hasMany('CaseUserEmails', [
            'foreignKey' => 'easycase_id'
        ]);
        $this->hasMany('CaseUserViews', [
            'foreignKey' => 'easycase_id'
        ]);
        $this->hasMany('EasycaseMilestones', [
            'foreignKey' => 'easycase_id'
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
            ->integer('case_count')
            ->requirePresence('case_count', 'create')
            ->notEmpty('case_count');

        $validator
            ->integer('updated_by')
            ->requirePresence('updated_by', 'create')
            ->notEmpty('updated_by');

        $validator
            ->allowEmpty('priority');

        $validator
            ->allowEmpty('title');

        $validator
            ->requirePresence('message', 'create')
            ->notEmpty('message');

        $validator
            ->decimal('estimated_hours')
            ->requirePresence('estimated_hours', 'create')
            ->notEmpty('estimated_hours');

        $validator
            ->decimal('hours')
            ->requirePresence('hours', 'create')
            ->notEmpty('hours');

        $validator
            ->integer('completed_task')
            ->requirePresence('completed_task', 'create')
            ->notEmpty('completed_task');

        $validator
            ->integer('assign_to')
            ->requirePresence('assign_to', 'create')
            ->notEmpty('assign_to');

        $validator
            ->date('due_date')
            ->allowEmpty('due_date');

        $validator
            ->integer('istype')
            ->requirePresence('istype', 'create')
            ->notEmpty('istype');

        $validator
            ->integer('format')
            ->requirePresence('format', 'create')
            ->notEmpty('format');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->integer('legend')
            ->requirePresence('legend', 'create')
            ->notEmpty('legend');

        $validator
            ->integer('isactive')
            ->requirePresence('isactive', 'create')
            ->notEmpty('isactive');

        $validator
            ->dateTime('dt_created')
            ->requirePresence('dt_created', 'create')
            ->notEmpty('dt_created');

        $validator
            ->dateTime('actual_dt_created')
            ->requirePresence('actual_dt_created', 'create')
            ->notEmpty('actual_dt_created');

        $validator
            ->integer('reply_type')
            ->requirePresence('reply_type', 'create')
            ->notEmpty('reply_type');

        $validator
            ->boolean('is_chrome_extension')
            ->requirePresence('is_chrome_extension', 'create')
            ->notEmpty('is_chrome_extension');

        $validator
            ->boolean('from_email')
            ->requirePresence('from_email', 'create')
            ->notEmpty('from_email');

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
        $rules->add($rules->existsIn(['uniq_id'], 'Uniqs'));
        $rules->add($rules->existsIn(['project_id'], 'Projects'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['type_id'], 'Types'));

        return $rules;
    }
}
