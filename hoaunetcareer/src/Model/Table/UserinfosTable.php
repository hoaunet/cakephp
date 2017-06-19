<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Userinfos Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\ProvincesTable|\Cake\ORM\Association\BelongsTo $Provinces
 *
 * @method \App\Model\Entity\Userinfo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Userinfo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Userinfo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Userinfo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Userinfo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Userinfo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Userinfo findOrCreate($search, callable $callback = null, $options = [])
 */
class UserinfosTable extends Table
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

        $this->setTable('userinfos');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('Provinces', [
            'foreignKey' => 'province_id',
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
            ->requirePresence('id', 'create')
            ->notEmpty('id');

        $validator
            ->allowEmpty('access_token');

        $validator
            ->integer('is_google_signup')
            ->requirePresence('is_google_signup', 'create')
            ->notEmpty('is_google_signup');

        $validator
            ->boolean('gender')
            ->requirePresence('gender', 'create')
            ->notEmpty('gender');

        $validator
            ->dateTime('birdthday')
            ->requirePresence('birdthday', 'create')
            ->notEmpty('birdthday');

        $validator
            ->boolean('is_mariage')
            ->requirePresence('is_mariage', 'create')
            ->notEmpty('is_mariage');

        $validator
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->requirePresence('contact_phone', 'create')
            ->notEmpty('contact_phone');

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
        $rules->add($rules->existsIn(['province_id'], 'Provinces'));

        return $rules;
    }
}
