<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projects Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Uniqs
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Companies
 * @property \Cake\ORM\Association\HasMany $CaseActivities
 * @property \Cake\ORM\Association\HasMany $CaseFileDrives
 * @property \Cake\ORM\Association\HasMany $CaseFiles
 * @property \Cake\ORM\Association\HasMany $CaseRecents
 * @property \Cake\ORM\Association\HasMany $CaseSettings
 * @property \Cake\ORM\Association\HasMany $CaseUserViews
 * @property \Cake\ORM\Association\HasMany $DailyUpdates
 * @property \Cake\ORM\Association\HasMany $EasycaseMilestones
 * @property \Cake\ORM\Association\HasMany $Easycases
 * @property \Cake\ORM\Association\HasMany $Milestones
 * @property \Cake\ORM\Association\HasMany $ProjectTechnologies
 * @property \Cake\ORM\Association\HasMany $ProjectUsers
 * @property \Cake\ORM\Association\HasMany $TemplateModuleCases
 * @property \Cake\ORM\Association\HasMany $UserInvitations
 *
 * @method \App\Model\Entity\Project get($primaryKey, $options = [])
 * @method \App\Model\Entity\Project newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Project[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Project|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Project patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Project[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Project findOrCreate($search, callable $callback = null, $options = [])
 */
class ProjectsTable extends Table
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

        $this->setTable('projects');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Uniqs', [
            'foreignKey' => 'uniq_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Companies', [
            'foreignKey' => 'company_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('CaseActivities', [
            'foreignKey' => 'project_id'
        ]);
        $this->hasMany('CaseFileDrives', [
            'foreignKey' => 'project_id'
        ]);
        $this->hasMany('CaseFiles', [
            'foreignKey' => 'project_id'
        ]);
        $this->hasMany('CaseRecents', [
            'foreignKey' => 'project_id'
        ]);
        $this->hasMany('CaseSettings', [
            'foreignKey' => 'project_id'
        ]);
        $this->hasMany('CaseUserViews', [
            'foreignKey' => 'project_id'
        ]);
        $this->hasMany('DailyUpdates', [
            'foreignKey' => 'project_id'
        ]);
        $this->hasMany('EasycaseMilestones', [
            'foreignKey' => 'project_id'
        ]);
        $this->hasMany('Easycases', [
            'foreignKey' => 'project_id'
        ]);
        $this->hasMany('Milestones', [
            'foreignKey' => 'project_id'
        ]);
        $this->hasMany('ProjectTechnologies', [
            'foreignKey' => 'project_id'
        ]);
        $this->hasMany('ProjectUsers', [
            'foreignKey' => 'project_id'
        ]);
        $this->hasMany('TemplateModuleCases', [
            'foreignKey' => 'project_id'
        ]);
        $this->hasMany('UserInvitations', [
            'foreignKey' => 'project_id'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('short_name', 'create')
            ->notEmpty('short_name');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->requirePresence('logo', 'create')
            ->notEmpty('logo');

        $validator
            ->integer('project_type')
            ->requirePresence('project_type', 'create')
            ->notEmpty('project_type');

        $validator
            ->integer('default_assign')
            ->requirePresence('default_assign', 'create')
            ->notEmpty('default_assign');

        $validator
            ->integer('isactive')
            ->requirePresence('isactive', 'create')
            ->notEmpty('isactive');

        $validator
            ->dateTime('dt_created')
            ->requirePresence('dt_created', 'create')
            ->notEmpty('dt_created');

        $validator
            ->dateTime('dt_updated')
            ->allowEmpty('dt_updated');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['company_id'], 'Companies'));

        return $rules;
    }
}
