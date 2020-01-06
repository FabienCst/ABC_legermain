<?php


namespace App\Model\Table;


use Cake\ORM\Table;
use Cake\Validation\Validator;

class ArtisansTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('artisans');
        $this->setDisplayField('idArtisan');
        $this->setPrimaryKey('idArtisan');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('idArtisan')
            ->allowEmptyString('idArtisan', null, 'create');

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
            ->scalar('email')
            ->maxLength('email', 100)
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('telephone')
            ->maxLength('telephone', 15)
            ->requirePresence('telephone', 'create')
            ->notEmptyString('telephone');

        return $validator;
}
}
