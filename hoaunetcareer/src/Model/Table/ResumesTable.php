<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Resumes Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\CareersTable|\Cake\ORM\Association\BelongsTo $Careers
 * @property \App\Model\Table\DegreesTable|\Cake\ORM\Association\BelongsTo $Degrees
 * @property \App\Model\Table\LevelsTable|\Cake\ORM\Association\BelongsTo $Levels
 * @property \App\Model\Table\SalariesTable|\Cake\ORM\Association\BelongsTo $Salaries
 * @property \App\Model\Table\SchoolsTable|\Cake\ORM\Association\BelongsTo $Schools
 *
 * @method \App\Model\Entity\Resume get($primaryKey, $options = [])
 * @method \App\Model\Entity\Resume newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Resume[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Resume|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Resume patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Resume[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Resume findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ResumesTable extends Table
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

        $this->setTable('resumes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

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
        $this->belongsTo('Levels', [
            'foreignKey' => 'level_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Salaries', [
            'foreignKey' => 'salary_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Schools', [
            'foreignKey' => 'school_id',
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
            ->integer('experience')
            ->requirePresence('experience', 'create')
            ->notEmpty('experience');

        $validator
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->requirePresence('uploadcv', 'create')
            ->notEmpty('uploadcv');

        $validator
            ->requirePresence('lastcompany', 'create')
            ->notEmpty('lastcompany');

        $validator
            ->requirePresence('summary', 'create')
            ->notEmpty('summary');

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
        $rules->add($rules->existsIn(['level_id'], 'Levels'));
        $rules->add($rules->existsIn(['salary_id'], 'Salaries'));
        $rules->add($rules->existsIn(['school_id'], 'Schools'));

        return $rules;
    }
}
