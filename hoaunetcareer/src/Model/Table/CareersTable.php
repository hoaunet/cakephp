<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Careers Model
 *
 * @property \App\Model\Table\CareersTable|\Cake\ORM\Association\BelongsTo $ParentCareers
 * @property \App\Model\Table\CareersTable|\Cake\ORM\Association\HasMany $ChildCareers
 *
 * @method \App\Model\Entity\Career get($primaryKey, $options = [])
 * @method \App\Model\Entity\Career newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Career[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Career|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Career patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Career[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Career findOrCreate($search, callable $callback = null, $options = [])
 */
class CareersTable extends Table
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

        $this->setTable('careers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('ParentCareers', [
            'className' => 'Careers',
            'foreignKey' => 'parent_id'
        ]);
        $this->hasMany('ChildCareers', [
            'className' => 'Careers',
            'foreignKey' => 'parent_id'
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
            ->requirePresence('career_name', 'create')
            ->notEmpty('career_name');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

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
        $rules->add($rules->existsIn(['parent_id'], 'ParentCareers'));

        return $rules;
    }
}
