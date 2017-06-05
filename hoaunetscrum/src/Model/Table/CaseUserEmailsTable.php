<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CaseUserEmails Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Easycases
 * @property \Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\CaseUserEmail get($primaryKey, $options = [])
 * @method \App\Model\Entity\CaseUserEmail newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CaseUserEmail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CaseUserEmail|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CaseUserEmail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CaseUserEmail[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CaseUserEmail findOrCreate($search, callable $callback = null, $options = [])
 */
class CaseUserEmailsTable extends Table
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

        $this->setTable('case_user_emails');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Easycases', [
            'foreignKey' => 'easycase_id',
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
            ->integer('ismail')
            ->requirePresence('ismail', 'create')
            ->notEmpty('ismail');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
