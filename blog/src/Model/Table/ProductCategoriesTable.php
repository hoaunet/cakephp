<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Productcategories Model
 *
 * @property \App\Model\Table\ProductcategoriesTable|\Cake\ORM\Association\BelongsTo $ParentProductcategories
 * @property \App\Model\Table\ProductcategoriesTable|\Cake\ORM\Association\HasMany $ChildProductcategories
 *
 * @method \App\Model\Entity\Productcategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\Productcategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Productcategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Productcategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Productcategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Productcategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Productcategory findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductcategoriesTable extends Table
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

        /*$this->setTable('productcategories');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');*/
		$this->addBehavior('Timestamp');
        $this->addBehavior('Tree');

        $this->belongsTo('ParentProductcategories', [
            'className' => 'Productcategories',
            'foreignKey' => 'parent_id'
        ]);
        $this->hasMany('ChildProductcategories', [
            'className' => 'Productcategories',
            'foreignKey' => 'parent_id'
        ]);
		 $this->hasMany('Products', [
            'foreignKey' => 'categories_id'
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
            ->requirePresence('categories_name', 'create')
            ->notEmpty('categories_name');

        $validator
            ->allowEmpty('categories_image');

        $validator
            ->integer('sort_order')
            ->allowEmpty('sort_order');

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
        $rules->add($rules->existsIn(['parent_id'], 'ParentProductcategories'));

        return $rules;
    }
}
