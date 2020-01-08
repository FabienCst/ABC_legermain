
<h1>Login</h1>

<?= $this->Form->create() ?>
<?= $this->Form->control('username', array('label' => "Identifiant")) ?>
<?= $this->Form->control('password', array('label' => "Mot de passe")) ?>
<?= $this->Form->button('Connexion') ?>
<?= $this->Form->end() ?>