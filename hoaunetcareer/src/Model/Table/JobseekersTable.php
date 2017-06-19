<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jobseekers Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\CareersTable|\Cake\ORM\Association\BelongsTo $Careers
 * @property \App\Model\Table\DegreesTable|\Cake\ORM\Association\BelongsTo $Degrees
 *
 * @method \App\Model\Entity\Jobseeker get($primaryKey, $options = [])
 * @method \App\Model\Entity\Jobseeker newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Jobseeker[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Jobseeker|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Jobseeker patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Jobseeker[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Jobseeker findOrCreate($search, callable $callback = null, $options = [])
 */
class JobseekersTable extends Table
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

        $this->setTable('jobseekers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Careers', [
            'foreignKey' => 'career_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Degrees', [
            'foreignKey' => 'degree_id',
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
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->requirePresence('numphone', 'create')
            ->notEmpty('numphone');

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
        $rules->add($rules->existsIn(['career_id'], 'Careers'));
        $rules->add($rules->existsIn(['degree_id'], 'Degrees'));

        return $rules;
    }
}
