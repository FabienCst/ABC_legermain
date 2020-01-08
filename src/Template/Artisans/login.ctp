<!-- src/Template/Artisans/login.ctp  -->
<h1>Login</h1>
<?= $this->Form->create() ?>
<?= $this->Form->control('identifiant') ?>
<?= $this->Form->control('mot_de_passe') ?>
<?= $this->Form->button('Connexion') ?>
<?= $this->Form->end() ?>
