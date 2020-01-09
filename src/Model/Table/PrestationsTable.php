<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Prestations Model
 *
 * @method \App\Model\Entity\Prestation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Prestation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Prestation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Prestation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Prestation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Prestation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Prestation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Prestation findOrCreate($search, callable $callback = null, $options = [])
 */
class PrestationsTable extends Table
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

        $this->setTable('prestations');
        $this->setDisplayField('idPrestation');
        $this->setPrimaryKey('idPrestation');
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
            ->integer('idPrestation')
            ->allowEmptyString('idPrestation', null, 'create');

        $validator
            ->scalar('titre')
            ->maxLength('titre', 100)
            ->requirePresence('titre', 'create')
            ->notEmptyString('titre');

        $validator
            ->scalar('sous_titre')
            ->requirePresence('sous_titre', 'create')
            ->notEmptyString('sous_titre');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->scalar('image')
            ->maxLength('image', 100)
            ->requirePresence('image', 'create')
            ->notEmptyFile('image');

        return $validator;
    }
}
