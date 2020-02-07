<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projets Model
 *
 * @method \App\Model\Entity\Projet get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projet newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projet[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projet|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projet saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projet patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projet[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projet findOrCreate($search, callable $callback = null, $options = [])
 */
class ProjetsTable extends Table
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

        $this->setTable('projets');
        $this->setDisplayField('idProjet');
        $this->setPrimaryKey('idProjet');
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
            ->integer('idProjet')
            ->allowEmptyString('idProjet', null, 'create');

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
            ->scalar('mail')
            ->maxLength('mail', 250)
            ->requirePresence('mail', 'create')
            ->notEmptyString('mail');

        $validator
            ->scalar('telephone')
            ->maxLength('telephone', 20)
            ->requirePresence('telephone', 'create')
            ->notEmptyString('telephone');

        $validator
            ->scalar('adresse')
            ->maxLength('adresse', 100)
            ->requirePresence('adresse', 'create')
            ->notEmptyString('adresse');

        $validator
            ->scalar('code_postal')
            ->maxLength('code_postal', 10)
            ->requirePresence('code_postal', 'create')
            ->notEmptyString('code_postal');

        $validator
            ->scalar('ville')
            ->maxLength('ville', 50)
            ->requirePresence('ville', 'create')
            ->notEmptyString('ville');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->scalar('type')
            ->maxLength('type', 50)
            ->requirePresence('type', 'create')
            ->notEmptyString('type');

        $validator
            ->date('date')
            ->allowEmptyDate('date');

        return $validator;
    }
}
