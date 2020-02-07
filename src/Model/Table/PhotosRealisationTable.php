<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PhotosRealisation Model
 *
 * @method \App\Model\Entity\PhotosRealisation get($primaryKey, $options = [])
 * @method \App\Model\Entity\PhotosRealisation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PhotosRealisation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PhotosRealisation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PhotosRealisation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PhotosRealisation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PhotosRealisation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PhotosRealisation findOrCreate($search, callable $callback = null, $options = [])
 */
class PhotosRealisationTable extends Table
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

        $this->setTable('photos_realisation');
        $this->setDisplayField('idPhoto_realisation');
        $this->setPrimaryKey('idPhoto_realisation');
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
            ->integer('idPhoto_realisation')
            ->allowEmptyString('idPhoto_realisation', null, 'create');

        $validator
            ->scalar('chemin')
            ->maxLength('chemin', 250)
            ->requirePresence('chemin', 'create')
            ->notEmptyString('chemin');

        $validator
            ->integer('idRealisation')
            ->requirePresence('idRealisation', 'create')
            ->notEmptyString('idRealisation');

        return $validator;
    }
}
