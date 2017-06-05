<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MailTbls Model
 *
 * @method \App\Model\Entity\MailTbl get($primaryKey, $options = [])
 * @method \App\Model\Entity\MailTbl newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MailTbl[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MailTbl|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MailTbl patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MailTbl[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MailTbl findOrCreate($search, callable $callback = null, $options = [])
 */
class MailTblsTable extends Table
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

        $this->setTable('mail_tbls');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->requirePresence('mail', 'create')
            ->notEmpty('mail');

        return $validator;
    }
}
