<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BizUserBalance Model
 *
 * @property \Cake\ORM\Association\BelongsTo $BizUsers
 *
 * @method \App\Model\Entity\BizUserBalance get($primaryKey, $options = [])
 * @method \App\Model\Entity\BizUserBalance newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BizUserBalance[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BizUserBalance|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BizUserBalance patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BizUserBalance[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BizUserBalance findOrCreate($search, callable $callback = null)
 */
class BizUserBalanceTable extends Table
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

        $this->table('biz_user_balance');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('BizUsers', [
            'foreignKey' => 'biz_user_id',
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

//        $validator
//            ->requirePresence('description', 'create');

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
        $rules->add($rules->existsIn(['biz_user_id'], 'BizUsers'));

        return $rules;
    }
}
