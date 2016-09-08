<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BizUsers Model
 *
 * @property \Cake\ORM\Association\HasMany $BizUserBalance
 *
 * @method \App\Model\Entity\BizUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\BizUser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BizUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BizUser|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BizUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BizUser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BizUser findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BizUsersTable extends Table
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

        $this->table('biz_users');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('BizUserBalance', [
            'foreignKey' => 'biz_user_id'
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
            ->allowEmpty('username');

        $validator
            ->allowEmpty('password');

        $validator
            ->allowEmpty('role');

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
        $rules->add($rules->isUnique(['username']));

        return $rules;
    }
}
