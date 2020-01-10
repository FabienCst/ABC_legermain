<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DocumentsActualite Model
 *
 * @method \App\Model\Entity\DocumentsActualite get($primaryKey, $options = [])
 * @method \App\Model\Entity\DocumentsActualite newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DocumentsActualite[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DocumentsActualite|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DocumentsActualite saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DocumentsActualite patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DocumentsActualite[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DocumentsActualite findOrCreate($search, callable $callback = null, $options = [])
 */
class DocumentsActualiteTable extends Table
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

        $this->setTable('documents_actualite');
        $this->setDisplayField('idDoc_actualite');
        $this->setPrimaryKey('idDoc_actualite');
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
            ->integer('idDoc_actualite')
            ->allowEmptyString('idDoc_actualite', null, 'create');

        $validator
            ->scalar('chemin')
            ->maxLength('chemin', 250)
            ->requirePresence('chemin', 'create')
            ->notEmptyString('chemin');

        $validator
            ->integer('idActualite')
            ->requirePresence('idActualite', 'create')
            ->notEmptyString('idActualite');

        return $validator;
    }
}
