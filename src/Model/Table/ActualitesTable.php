<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Actualites Model
 *
 * @method \App\Model\Entity\Actualite get($primaryKey, $options = [])
 * @method \App\Model\Entity\Actualite newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Actualite[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Actualite|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Actualite saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Actualite patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Actualite[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Actualite findOrCreate($search, callable $callback = null, $options = [])
 */
class ActualitesTable extends Table
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

        $this->setTable('actualites');
        $this->setDisplayField('idActualite');
        $this->setPrimaryKey('idActualite');
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
            ->integer('idActualite')
            ->allowEmptyString('idActualite', null, 'create');

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

        return $validator;
    }
}
