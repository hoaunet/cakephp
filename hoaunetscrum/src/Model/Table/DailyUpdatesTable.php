<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DailyUpdates Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Companies
 * @property \Cake\ORM\Association\BelongsTo $Projects
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Timezones
 *
 * @method \App\Model\Entity\DailyUpdate get($primaryKey, $options = [])
 * @method \App\Model\Entity\DailyUpdate newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DailyUpdate[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DailyUpdate|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DailyUpdate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DailyUpdate[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DailyUpdate findOrCreate($search, callable $callback = null, $options = [])
 */
class DailyUpdatesTable extends Table
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

        $this->setTable('daily_updates');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Companies', [
            'foreignKey' => 'company_id',
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
        $this->belongsTo('Timezones', [
            'foreignKey' => 'timezone_id',
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
            ->integer('post_by')
            ->requirePresence('post_by', 'create')
            ->notEmpty('post_by');

        $validator
            ->time('notification_time')
            ->requirePresence('notification_time', 'create')
            ->notEmpty('notification_time');

        $validator
            ->integer('days')
            ->requirePresence('days', 'create')
            ->notEmpty('days');

        $validator
            ->date('cron_email_date')
            ->allowEmpty('cron_email_date');

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
        $rules->add($rules->existsIn(['project_id'], 'Projects'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['timezone_id'], 'Timezones'));

        return $rules;
    }
}
