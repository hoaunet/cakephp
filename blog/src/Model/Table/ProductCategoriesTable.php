<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductCategories Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Categories
 * @property \Cake\ORM\Association\BelongsTo $ParentProductCategories
 * @property \Cake\ORM\Association\HasMany $ChildProductCategories
 *
 * @method \App\Model\Entity\ProductCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductCategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProductCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductCategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductCategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductCategory findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductCategoriesTable extends Table
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

        $this->setTable('product_categories');
        $this->setDisplayField('categories_id');
        $this->setPrimaryKey('categories_id');

        $this->belongsTo('ProductCategories', [
            'foreignKey' => 'categories_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ParentProductCategories', [
            'className' => 'ProductCategories',
            'foreignKey' => 'parent_id'
        ]);
       /* $this->hasMany('ChildProductCategories', [
            'className' => 'ProductCategories',
            'foreignKey' => 'parent_id'
        ]);*/
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
        $rules->add($rules->existsIn(['categories_id'], 'ProductCategories'));
        $rules->add($rules->existsIn(['parent_id'], 'ParentProductCategories'));

        return $rules;
    }
}
