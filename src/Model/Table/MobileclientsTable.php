<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mobileclients Model
 *
 * @method \App\Model\Entity\Mobileclient get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mobileclient newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Mobileclient[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mobileclient|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mobileclient saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mobileclient patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mobileclient[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mobileclient findOrCreate($search, callable $callback = null, $options = [])
 */
class MobileclientsTable extends Table
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

        $this->setTable('mobileclients');
        $this->setDisplayField('name');
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->allowEmptyString('name');

        $validator
            ->scalar('endpoint')
            ->allowEmptyString('endpoint');

        $validator
            ->scalar('p256dh')
            ->allowEmptyString('p256dh');

        $validator
            ->scalar('auth')
            ->allowEmptyString('auth');

        return $validator;
    }
}
