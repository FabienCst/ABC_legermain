<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Offres Model
 *
 * @method \App\Model\Entity\Offre get($primaryKey, $options = [])
 * @method \App\Model\Entity\Offre newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Offre[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Offre|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Offre saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Offre patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Offre[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Offre findOrCreate($search, callable $callback = null, $options = [])
 */
class OffresTable extends Table
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

        $this->setTable('offres');
        $this->setDisplayField('idOffre');
        $this->setPrimaryKey('idOffre');
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
            ->integer('idOffre')
            ->allowEmptyString('idOffre', null, 'create');

        $validator
            ->scalar('titre')
            ->maxLength('titre', 100)
            ->requirePresence('titre', 'create')
            ->notEmptyString('titre');

        $validator
            ->scalar('type')
            ->maxLength('type', 30)
            ->requirePresence('type', 'create')
            ->notEmptyString('type');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->scalar('exp_requise')
            ->maxLength('exp_requise', 100)
            ->requirePresence('exp_requise', 'create')
            ->notEmptyString('exp_requise');

        $validator
            ->scalar('corps_metier')
            ->maxLength('corps_metier', 30)
            ->requirePresence('corps_metier', 'create')
            ->notEmptyString('corps_metier');

        $validator
            ->date('date_debut')
            ->allowEmptyDate('date_debut');

        $validator
            ->date('date_fin')
            ->allowEmptyDate('date_fin');

        $validator
            ->scalar('duree')
            ->maxLength('duree', 30)
            ->allowEmptyString('duree');

        return $validator;
    }
}
