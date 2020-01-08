<!-- src/Template/Users/login.ctp -->

<h1>Login</h1>
<?= $this->Form->create() ?>
<?= $this->Form->control('identifiant', array('label' => "Identifiant")) ?>
<?= $this->Form->control('mot_de_passe', array('label' => "Mot de passe")) ?>
<?= $this->Form->button('Connexion') ?>
<?= $this->Form->end() ?>