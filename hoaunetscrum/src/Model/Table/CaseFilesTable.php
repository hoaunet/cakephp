<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CaseFiles Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Projects
 * @property \Cake\ORM\Association\BelongsTo $Companies
 * @property \Cake\ORM\Association\BelongsTo $Easycases
 * @property \Cake\ORM\Association\BelongsTo $Comments
 * @property \Cake\ORM\Association\HasMany $Archives
 *
 * @method \App\Model\Entity\CaseFile get($primaryKey, $options = [])
 * @method \App\Model\Entity\CaseFile newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CaseFile[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CaseFile|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CaseFile patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CaseFile[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CaseFile findOrCreate($search, callable $callback = null, $options = [])
 */
class CaseFilesTable extends Table
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

        $this->setTable('case_files');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Projects', [
            'foreignKey' => 'project_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Companies', [
            'foreignKey' => 'company_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Easycases', [
            'foreignKey' => 'easycase_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Comments', [
            'foreignKey' => 'comment_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Archives', [
            'foreignKey' => 'case_file_id'
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
            ->requirePresence('file', 'create')
            ->notEmpty('file');

        $validator
            ->requirePresence('thumb', 'create')
            ->notEmpty('thumb');

        $validator
            ->decimal('file_size')
            ->requirePresence('file_size', 'create')
            ->notEmpty('file_size');

        $validator
            ->integer('count')
            ->requirePresence('count', 'create')
            ->notEmpty('count');

        $validator
            ->allowEmpty('downloadurl');

        $validator
            ->integer('isactive')
            ->requirePresence('isactive', 'create')
            ->notEmpty('isactive');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['project_id'], 'Projects'));
        $rules->add($rules->existsIn(['company_id'], 'Companies'));
        $rules->add($rules->existsIn(['easycase_id'], 'Easycases'));
        $rules->add($rules->existsIn(['comment_id'], 'Comments'));

        return $rules;
    }
}
