<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SaveReports Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\SaveReport get($primaryKey, $options = [])
 * @method \App\Model\Entity\SaveReport newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SaveReport[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SaveReport|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SaveReport patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SaveReport[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SaveReport findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SaveReportsTable extends Table
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

        $this->setTable('save_reports');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

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
            ->integer('rpt_type')
            ->requirePresence('rpt_type', 'create')
            ->notEmpty('rpt_type');

        $validator
            ->date('frm_dt')
            ->requirePresence('frm_dt', 'create')
            ->notEmpty('frm_dt');

        $validator
            ->date('to_dt')
            ->requirePresence('to_dt', 'create')
            ->notEmpty('to_dt');

        $validator
            ->requirePresence('ip', 'create')
            ->notEmpty('ip');

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

        return $rules;
    }
}
