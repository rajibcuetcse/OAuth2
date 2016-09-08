<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserBalance Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\UserBalance get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserBalance newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UserBalance[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserBalance|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserBalance patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserBalance[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserBalance findOrCreate($search, callable $callback = null)
 */
class UserBalanceTable extends Table
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

        $this->table('client_balance');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Client', [
            'foreignKey' => 'client_id',
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('balance', 'create')
            ->notEmpty('balance');

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
        $rules->add($rules->existsIn(['client_id'], 'Client'));

        return $rules;
    }
}
