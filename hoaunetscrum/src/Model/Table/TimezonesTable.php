<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Timezones Model
 *
 * @property \Cake\ORM\Association\HasMany $DailyUpdates
 * @property \Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Timezone get($primaryKey, $options = [])
 * @method \App\Model\Entity\Timezone newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Timezone[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Timezone|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Timezone patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Timezone[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Timezone findOrCreate($search, callable $callback = null, $options = [])
 */
class TimezonesTable extends Table
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

        $this->setTable('timezones');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('DailyUpdates', [
            'foreignKey' => 'timezone_id'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'timezone_id'
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
            ->numeric('gmt_offset')
            ->allowEmpty('gmt_offset');

        $validator
            ->numeric('dst_offset')
            ->allowEmpty('dst_offset');

        $validator
            ->allowEmpty('code');

        return $validator;
    }
}
