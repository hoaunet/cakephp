<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Manufacturers Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Manufacturers
 *
 * @method \App\Model\Entity\Manufacturer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Manufacturer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Manufacturer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Manufacturer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Manufacturer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Manufacturer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Manufacturer findOrCreate($search, callable $callback = null, $options = [])
 */
class ManufacturersTable extends Table
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

        $this->setTable('manufacturers');
        $this->setDisplayField('manufacturers_id');
        $this->setPrimaryKey('manufacturers_id');

        $this->belongsTo('Manufacturers', [
            'foreignKey' => 'manufacturers_id',
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
            ->requirePresence('manufacturers_name', 'create')
            ->notEmpty('manufacturers_name');

        $validator
            ->allowEmpty('manufacturers_image');

        $validator
            ->dateTime('date_added')
            ->allowEmpty('date_added');

        $validator
            ->dateTime('last_modified')
            ->allowEmpty('last_modified');

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
        $rules->add($rules->existsIn(['manufacturers_id'], 'Manufacturers'));

        return $rules;
    }
}
