<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Realisations Model
 *
 * @method \App\Model\Entity\Realisation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Realisation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Realisation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Realisation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Realisation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Realisation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Realisation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Realisation findOrCreate($search, callable $callback = null, $options = [])
 */
class RealisationsTable extends Table
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

        $this->setTable('realisations');
        $this->setDisplayField('idRealisation');
        $this->setPrimaryKey('idRealisation');
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
            ->integer('idRealisation')
            ->allowEmptyString('idRealisation', null, 'create');

        $validator
            ->scalar('titre')
            ->maxLength('titre', 100)
            ->requirePresence('titre', 'create')
            ->notEmptyString('titre');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->date('date')
            ->allowEmptyDate('date');

        $validator
            ->scalar('image')
            ->maxLength('image', 100)
            ->requirePresence('image', 'create')
            ->notEmptyFile('image');

        $validator
            ->integer('idPrestation')
            ->requirePresence('idPrestation', 'create')
            ->notEmptyString('idPrestation');

        return $validator;
    }
}
