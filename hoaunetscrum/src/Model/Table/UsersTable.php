<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Uniqs
 * @property \Cake\ORM\Association\BelongsTo $Btprofiles
 * @property \Cake\ORM\Association\BelongsTo $Usersubscriptions
 * @property \Cake\ORM\Association\BelongsTo $Timezones
 * @property \Cake\ORM\Association\HasMany $Archives
 * @property \Cake\ORM\Association\HasMany $CaseActions
 * @property \Cake\ORM\Association\HasMany $CaseActivities
 * @property \Cake\ORM\Association\HasMany $CaseFiles
 * @property \Cake\ORM\Association\HasMany $CaseFilters
 * @property \Cake\ORM\Association\HasMany $CaseRecents
 * @property \Cake\ORM\Association\HasMany $CaseSettings
 * @property \Cake\ORM\Association\HasMany $CaseTemplates
 * @property \Cake\ORM\Association\HasMany $CaseUserEmails
 * @property \Cake\ORM\Association\HasMany $CaseUserViews
 * @property \Cake\ORM\Association\HasMany $CompanyUsers
 * @property \Cake\ORM\Association\HasMany $CustomFilters
 * @property \Cake\ORM\Association\HasMany $DailyUpdates
 * @property \Cake\ORM\Association\HasMany $DailyupdateNotifications
 * @property \Cake\ORM\Association\HasMany $DefaultProjectTemplateCases
 * @property \Cake\ORM\Association\HasMany $DefaultProjectTemplates
 * @property \Cake\ORM\Association\HasMany $EasycaseMilestones
 * @property \Cake\ORM\Association\HasMany $Easycases
 * @property \Cake\ORM\Association\HasMany $EmailReminders
 * @property \Cake\ORM\Association\HasMany $LogActivities
 * @property \Cake\ORM\Association\HasMany $Milestones
 * @property \Cake\ORM\Association\HasMany $OsSessionLogs
 * @property \Cake\ORM\Association\HasMany $ProjectTemplateCases
 * @property \Cake\ORM\Association\HasMany $ProjectTemplates
 * @property \Cake\ORM\Association\HasMany $ProjectUsers
 * @property \Cake\ORM\Association\HasMany $Projects
 * @property \Cake\ORM\Association\HasMany $SaveReports
 * @property \Cake\ORM\Association\HasMany $TemplateModuleCases
 * @property \Cake\ORM\Association\HasMany $Transactions
 * @property \Cake\ORM\Association\HasMany $UserInfos
 * @property \Cake\ORM\Association\HasMany $UserInvitations
 * @property \Cake\ORM\Association\HasMany $UserLogins
 * @property \Cake\ORM\Association\HasMany $UserNotifications
 * @property \Cake\ORM\Association\HasMany $UserSubscriptions
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Uniqs', [
            'foreignKey' => 'uniq_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Btprofiles', [
            'foreignKey' => 'btprofile_id'
        ]);
        $this->belongsTo('Usersubscriptions', [
            'foreignKey' => 'usersubscription_id'
        ]);
        $this->belongsTo('Timezones', [
            'foreignKey' => 'timezone_id'
        ]);
        $this->hasMany('Archives', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('CaseActions', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('CaseActivities', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('CaseFiles', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('CaseFilters', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('CaseRecents', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('CaseSettings', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('CaseTemplates', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('CaseUserEmails', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('CaseUserViews', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('CompanyUsers', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('CustomFilters', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('DailyUpdates', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('DailyupdateNotifications', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('DefaultProjectTemplateCases', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('DefaultProjectTemplates', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('EasycaseMilestones', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Easycases', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('EmailReminders', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('LogActivities', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Milestones', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('OsSessionLogs', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('ProjectTemplateCases', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('ProjectTemplates', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('ProjectUsers', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Projects', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('SaveReports', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('TemplateModuleCases', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Transactions', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('UserInfos', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('UserInvitations', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('UserLogins', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('UserNotifications', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('UserSubscriptions', [
            'foreignKey' => 'user_id'
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
            ->allowEmpty('credit_cardtoken');

        $validator
            ->allowEmpty('card_number');

        $validator
            ->allowEmpty('expiry_date');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->allowEmpty('password');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->integer('is_beta')
            ->requirePresence('is_beta', 'create')
            ->notEmpty('is_beta');

        $validator
            ->allowEmpty('last_name');

        $validator
            ->allowEmpty('short_name');

        $validator
            ->integer('istype')
            ->requirePresence('istype', 'create')
            ->notEmpty('istype');

        $validator
            ->allowEmpty('photo');

        $validator
            ->allowEmpty('photo_reset');

        $validator
            ->integer('isactive')
            ->requirePresence('isactive', 'create')
            ->notEmpty('isactive');

        $validator
            ->integer('isemail')
            ->requirePresence('isemail', 'create')
            ->notEmpty('isemail');

        $validator
            ->integer('is_agree')
            ->requirePresence('is_agree', 'create')
            ->notEmpty('is_agree');

        $validator
            ->integer('usersub_type')
            ->allowEmpty('usersub_type');

        $validator
            ->numeric('est_billing_amount')
            ->allowEmpty('est_billing_amount');

        $validator
            ->dateTime('dt_created')
            ->requirePresence('dt_created', 'create')
            ->notEmpty('dt_created');

        $validator
            ->dateTime('dt_updated')
            ->allowEmpty('dt_updated');

        $validator
            ->dateTime('dt_last_login')
            ->allowEmpty('dt_last_login');

        $validator
            ->dateTime('dt_last_logout')
            ->allowEmpty('dt_last_logout');

        $validator
            ->allowEmpty('query_string');

        $validator
            ->requirePresence('update_email', 'create')
            ->notEmpty('update_email');

        $validator
            ->requirePresence('update_random', 'create')
            ->notEmpty('update_random');

        $validator
            ->allowEmpty('gaccess_token');

        $validator
            ->allowEmpty('ip');

        $validator
            ->requirePresence('sig', 'create')
            ->notEmpty('sig');

        $validator
            ->integer('desk_notify')
            ->requirePresence('desk_notify', 'create')
            ->notEmpty('desk_notify');

        $validator
            ->integer('active_dashboard_tab')
            ->requirePresence('active_dashboard_tab', 'create')
            ->notEmpty('active_dashboard_tab');

        $validator
            ->integer('is_moderator')
            ->requirePresence('is_moderator', 'create')
            ->notEmpty('is_moderator');

        $validator
            ->integer('show_default_inner')
            ->requirePresence('show_default_inner', 'create')
            ->notEmpty('show_default_inner');

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
        $rules->add($rules->existsIn(['uniq_id'], 'Uniqs'));
        $rules->add($rules->existsIn(['btprofile_id'], 'Btprofiles'));
        $rules->add($rules->existsIn(['usersubscription_id'], 'Usersubscriptions'));
        $rules->add($rules->existsIn(['timezone_id'], 'Timezones'));

        return $rules;
    }
}
