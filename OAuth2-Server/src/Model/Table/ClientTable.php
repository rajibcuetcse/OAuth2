<?php
namespace App\Model\Table;

use App\Model\Entity\OauthClient;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OauthClients Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ParentOauthClients
 * @property \Cake\ORM\Association\HasMany $ChildOauthClients
 */
class ClientTable extends Table
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

        $this->table('oauth_clients');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('ParentOauthClients', [
            'className' => 'OauthClients',
            'foreignKey' => 'parent_id'
        ]);
        $this->hasMany('ChildOauthClients', [
            'className' => 'OauthClients',
            'foreignKey' => 'parent_id'
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('client_secret', 'create')
            ->notEmpty('client_secret');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name',(__('Please enter name your app.')));

        $validator
            ->requirePresence('redirect_uri', 'create')
            ->notEmpty('redirect_uri');

        $validator
            ->allowEmpty('parent_model');

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
        $rules->add($rules->existsIn(['parent_id'], 'ParentOauthClients'));
        return $rules;
    }
}
