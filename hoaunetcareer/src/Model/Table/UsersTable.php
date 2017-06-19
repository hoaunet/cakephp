<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\UniqsTable|\Cake\ORM\Association\BelongsTo $Uniqs
 * @property \App\Model\Table\BtprofilesTable|\Cake\ORM\Association\BelongsTo $Btprofiles
 * @property \App\Model\Table\UsersubscriptionsTable|\Cake\ORM\Association\BelongsTo $Usersubscriptions
 * @property |\Cake\ORM\Association\HasMany $Articles
 * @property \App\Model\Table\CompanyusersTable|\Cake\ORM\Association\HasMany $Companyusers
 * @property \App\Model\Table\NewslettersTable|\Cake\ORM\Association\HasMany $Newsletters
 * @property |\Cake\ORM\Association\HasMany $Resumes
 * @property \App\Model\Table\UserinfosTable|\Cake\ORM\Association\HasMany $Userinfos
 * @property \App\Model\Table\UserloginsTable|\Cake\ORM\Association\HasMany $Userlogins
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
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

        $this->addBehavior('Timestamp');

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
        $this->hasMany('Articles', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Companyusers', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Newsletters', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Resumes', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Userinfos', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Userlogins', [
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
            ->requirePresence('id', 'create')
            ->notEmpty('id');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->allowEmpty('password');

        $validator
            ->requirePresence('fullname', 'create')
            ->notEmpty('fullname');

        $validator
            ->integer('istype')
            ->requirePresence('istype', 'create')
            ->notEmpty('istype');

        $validator
            ->allowEmpty('photo');

        $validator
            ->integer('isactive')
            ->requirePresence('isactive', 'create')
            ->notEmpty('isactive');

        $validator
            ->dateTime('dt_last_login')
            ->allowEmpty('dt_last_login');

        $validator
            ->dateTime('dt_last_logout')
            ->allowEmpty('dt_last_logout');

        $validator
            ->allowEmpty('ip');

        $validator
            ->integer('active_dashboard_tab')
            ->requirePresence('active_dashboard_tab', 'create')
            ->notEmpty('active_dashboard_tab');

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

        return $rules;
    }
}
