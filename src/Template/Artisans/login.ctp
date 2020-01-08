<!-- src/Template/Artisans/login.ctp  -->
<h1>Login</h1>
<?= $this->Form->create() ?>
<?= $this->Form->control('Identifiant') ?>
<?= $this->Form->control('Mot de passe') ?>
<?= $this->Form->button('Connexion') ?>
<?= $this->Form->end() ?>
