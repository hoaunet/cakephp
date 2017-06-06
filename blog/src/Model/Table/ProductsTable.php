<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Products
 * @property \Cake\ORM\Association\BelongsTo $ProductsTaxClasses
 * @property \Cake\ORM\Association\BelongsTo $Manufacturers
 * @property \Cake\ORM\Association\BelongsTo $Categories
 *
 * @method \App\Model\Entity\Product get($primaryKey, $options = [])
 * @method \App\Model\Entity\Product newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Product[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Product|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Product[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Product findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductsTable extends Table
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

        $this->setTable('products');
        $this->setDisplayField('products_id');
        $this->setPrimaryKey('products_id');

        $this->belongsTo('Products', [
            'foreignKey' => 'products_id',
            'joinType' => 'INNER'
        ]);
     /*   $this->belongsTo('ProductsTaxClasses', [
            'foreignKey' => 'products_tax_class_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Manufacturers', [
            'foreignKey' => 'manufacturers_id'
        ]);*/
        $this->belongsTo('Categories', [
            'foreignKey' => 'categories_id',
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
            ->integer('products_quantity')
            ->requirePresence('products_quantity', 'create')
            ->notEmpty('products_quantity');

        $validator
            ->allowEmpty('products_model');

        $validator
            ->allowEmpty('products_image');

        $validator
            ->decimal('products_price')
            ->requirePresence('products_price', 'create')
            ->notEmpty('products_price');

        $validator
            ->dateTime('products_date_added')
            ->requirePresence('products_date_added', 'create')
            ->notEmpty('products_date_added');

        $validator
            ->dateTime('products_last_modified')
            ->allowEmpty('products_last_modified');

        $validator
            ->dateTime('products_date_available')
            ->allowEmpty('products_date_available');

        $validator
            ->decimal('products_weight')
            ->requirePresence('products_weight', 'create')
            ->notEmpty('products_weight');

        $validator
            ->boolean('products_status')
            ->requirePresence('products_status', 'create')
            ->notEmpty('products_status');

        $validator
            ->integer('products_ordered')
            ->requirePresence('products_ordered', 'create')
            ->notEmpty('products_ordered');

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
        $rules->add($rules->existsIn(['products_id'], 'Products'));
        $rules->add($rules->existsIn(['products_tax_class_id'], 'ProductsTaxClasses'));
        $rules->add($rules->existsIn(['manufacturers_id'], 'Manufacturers'));
        $rules->add($rules->existsIn(['categories_id'], 'Categories'));

        return $rules;
    }
}
