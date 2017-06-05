<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Companies Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Uniqs
 * @property \Cake\ORM\Association\BelongsTo $Subscriptions
 * @property \Cake\ORM\Association\HasMany $Archives
 * @property \Cake\ORM\Association\HasMany $CaseFiles
 * @property \Cake\ORM\Association\HasMany $CaseRecents
 * @property \Cake\ORM\Association\HasMany $CaseTemplates
 * @property \Cake\ORM\Association\HasMany $CompanyUsers
 * @property \Cake\ORM\Association\HasMany $CustomFilters
 * @property \Cake\ORM\Association\HasMany $DailyUpdates
 * @property \Cake\ORM\Association\HasMany $DailyupdateNotifications
 * @property \Cake\ORM\Association\HasMany $DefaultProjectTemplateCases
 * @property \Cake\ORM\Association\HasMany $DefaultProjectTemplates
 * @property \Cake\ORM\Association\HasMany $LogActivities
 * @property \Cake\ORM\Association\HasMany $Milestones
 * @property \Cake\ORM\Association\HasMany $ProjectTemplateCases
 * @property \Cake\ORM\Association\HasMany $ProjectTemplates
 * @property \Cake\ORM\Association\HasMany $ProjectUsers
 * @property \Cake\ORM\Association\HasMany $Projects
 * @property \Cake\ORM\Association\HasMany $TemplateModuleCases
 * @property \Cake\ORM\Association\HasMany $Transactions
 * @property \Cake\ORM\Association\HasMany $TypeCompanies
 * @property \Cake\ORM\Association\HasMany $Types
 * @property \Cake\ORM\Association\HasMany $UserInvitations
 * @property \Cake\ORM\Association\HasMany $UserSubscriptions
 *
 * @method \App\Model\Entity\Company get($primaryKey, $options = [])
 * @method \App\Model\Entity\Company newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Company[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Company|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Company patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Company[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Company findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CompaniesTable extends Table
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

        $this->setTable('companies');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Uniqs', [
            'foreignKey' => 'uniq_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Subscriptions', [
            'foreignKey' => 'subscription_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Archives', [
            'foreignKey' => 'company_id'
        ]);
        $this->hasMany('CaseFiles', [
            'foreignKey' => 'company_id'
        ]);
        $this->hasMany('CaseRecents', [
            'foreignKey' => 'company_id'
        ]);
        $this->hasMany('CaseTemplates', [
            'foreignKey' => 'company_id'
        ]);
        $this->hasMany('CompanyUsers', [
            'foreignKey' => 'company_id'
        ]);
        $this->hasMany('CustomFilters', [
            'foreignKey' => 'company_id'
        ]);
        $this->hasMany('DailyUpdates', [
            'foreignKey' => 'company_id'
        ]);
        $this->hasMany('DailyupdateNotifications', [
            'foreignKey' => 'company_id'
        ]);
        $this->hasMany('DefaultProjectTemplateCases', [
            'foreignKey' => 'company_id'
        ]);
        $this->hasMany('DefaultProjectTemplates', [
            'foreignKey' => 'company_id'
        ]);
        $this->hasMany('LogActivities', [
            'foreignKey' => 'company_id'
        ]);
        $this->hasMany('Milestones', [
            'foreignKey' => 'company_id'
        ]);
        $this->hasMany('ProjectTemplateCases', [
            'foreignKey' => 'company_id'
        ]);
        $this->hasMany('ProjectTemplates', [
            'foreignKey' => 'company_id'
        ]);
        $this->hasMany('ProjectUsers', [
            'foreignKey' => 'company_id'
        ]);
        $this->hasMany('Projects', [
            'foreignKey' => 'company_id'
        ]);
        $this->hasMany('TemplateModuleCases', [
            'foreignKey' => 'company_id'
        ]);
        $this->hasMany('Transactions', [
            'foreignKey' => 'company_id'
        ]);
        $this->hasMany('TypeCompanies', [
            'foreignKey' => 'company_id'
        ]);
        $this->hasMany('Types', [
            'foreignKey' => 'company_id'
        ]);
        $this->hasMany('UserInvitations', [
            'foreignKey' => 'company_id'
        ]);
        $this->hasMany('UserSubscriptions', [
            'foreignKey' => 'company_id'
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
            ->requirePresence('seo_url', 'create')
            ->notEmpty('seo_url');

        $validator
            ->allowEmpty('logo');

        $validator
            ->requirePresence('website', 'create')
            ->notEmpty('website');

        $validator
            ->requirePresence('contact_phone', 'create')
            ->notEmpty('contact_phone');

        $validator
            ->integer('is_beta')
            ->requirePresence('is_beta', 'create')
            ->notEmpty('is_beta');

        $validator
            ->integer('is_active')
            ->requirePresence('is_active', 'create')
            ->notEmpty('is_active');

        $validator
            ->integer('is_deactivated')
            ->requirePresence('is_deactivated', 'create')
            ->notEmpty('is_deactivated');

        $validator
            ->integer('twitted')
            ->requirePresence('twitted', 'create')
            ->notEmpty('twitted');

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
        $rules->add($rules->existsIn(['subscription_id'], 'Subscriptions'));

        return $rules;
    }
}
