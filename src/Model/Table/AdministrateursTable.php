<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Administrateurs Model
 *
 * @method \App\Model\Entity\Administrateur get($primaryKey, $options = [])
 * @method \App\Model\Entity\Administrateur newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Administrateur[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Administrateur|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Administrateur saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Administrateur patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Administrateur[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Administrateur findOrCreate($search, callable $callback = null, $options = [])
 */
class AdministrateursTable extends Table
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

        $this->setTable('administrateurs');
        $this->setDisplayField('idAdministrateur');
        $this->setPrimaryKey('idAdministrateur');
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
            ->integer('idAdministrateur')
            ->allowEmptyString('idAdministrateur', null, 'create');

        $validator
            ->scalar('identifiant')
            ->maxLength('identifiant', 100)
            ->requirePresence('identifiant', 'create')
            ->notEmptyString('identifiant');

        $validator
            ->scalar('mot_de_passe')
            ->maxLength('mot_de_passe', 100)
            ->requirePresence('mot_de_passe', 'create')
            ->notEmptyString('mot_de_passe');

        $validator
            ->scalar('nom')
            ->maxLength('nom', 30)
            ->requirePresence('nom', 'create')
            ->notEmptyString('nom');

        $validator
            ->scalar('prenom')
            ->maxLength('prenom', 30)
            ->requirePresence('prenom', 'create')
            ->notEmptyString('prenom');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('telephone')
            ->maxLength('telephone', 15)
            ->requirePresence('telephone', 'create')
            ->notEmptyString('telephone');

        $validator
            ->integer('actif')
            ->notEmptyString('actif');

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
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
