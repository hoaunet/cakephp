<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Provinces Model
 *
 * @property \App\Model\Table\ProvincesTable|\Cake\ORM\Association\BelongsTo $ParentProvinces
 * @property \App\Model\Table\CountriesTable|\Cake\ORM\Association\BelongsTo $Countries
 * @property \App\Model\Table\ProvincesTable|\Cake\ORM\Association\HasMany $ChildProvinces
 * @property \App\Model\Table\SchoolsTable|\Cake\ORM\Association\HasMany $Schools
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Province get($primaryKey, $options = [])
 * @method \App\Model\Entity\Province newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Province[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Province|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Province patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Province[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Province findOrCreate($search, callable $callback = null, $options = [])
 */
class ProvincesTable extends Table
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

        $this->setTable('provinces');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('ParentProvinces', [
            'className' => 'Provinces',
            'foreignKey' => 'parent_id'
        ]);
        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('ChildProvinces', [
            'className' => 'Provinces',
            'foreignKey' => 'parent_id'
        ]);
        $this->hasMany('Schools', [
            'foreignKey' => 'province_id'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'province_id'
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
            ->requirePresence('province_name', 'create')
            ->notEmpty('province_name');

        $validator
            ->integer('province_type')
            ->requirePresence('province_type', 'create')
            ->notEmpty('province_type');

        $validator
            ->integer('province_code')
            ->requirePresence('province_code', 'create')
            ->notEmpty('province_code');

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
        $rules->add($rules->existsIn(['parent_id'], 'ParentProvinces'));
        $rules->add($rules->existsIn(['country_id'], 'Countries'));

        return $rules;
    }
}
