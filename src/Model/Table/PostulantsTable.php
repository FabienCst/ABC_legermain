<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Postulants Model
 *
 * @method \App\Model\Entity\Postulant get($primaryKey, $options = [])
 * @method \App\Model\Entity\Postulant newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Postulant[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Postulant|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Postulant saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Postulant patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Postulant[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Postulant findOrCreate($search, callable $callback = null, $options = [])
 */
class PostulantsTable extends Table
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

        $this->setTable('postulants');
        $this->setDisplayField('idPostulant');
        $this->setPrimaryKey('idPostulant');
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
            ->integer('idPostulant')
            ->allowEmptyString('idPostulant', null, 'create');

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
            ->maxLength('mail', 100)
            ->requirePresence('mail', 'create')
            ->notEmptyString('mail');

        $validator
            ->scalar('telephone')
            ->maxLength('telephone', 20)
            ->requirePresence('telephone', 'create')
            ->notEmptyString('telephone');

        $validator
            ->date('date')
            ->allowEmptyDate('date');

        $validator
            ->scalar('cv')
            ->maxLength('cv', 250)
            ->requirePresence('cv', 'create')
            ->notEmptyString('cv');

        $validator
            ->scalar('lettre_motivation')
            ->maxLength('lettre_motivation', 250)
            ->requirePresence('lettre_motivation', 'create')
            ->notEmptyString('lettre_motivation');

        $validator
            ->integer('idOffre')
            ->requirePresence('idOffre', 'create')
            ->notEmptyString('idOffre');

        return $validator;
    }
}
