<?php

$this->layout = false;
$cakeDescription = 'ABC Legermain | login';

?>
<!DOCTYPE html>
<html>
<?= $this->Html->charset() ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<title>
    <?= $cakeDescription ?>
</title>
<?= $this->Html->css('login.css') ?>
<section class="sec1">
<section class="content">
<h1>Login</h1>

<?= $this->Form->create() ?>
<?= $this->Form->control('username', array('label' => "Identifiant")) ?>
<?= $this->Form->control('password', array('label' => "Mot de passe")) ?>
<?= $this->Form->button('Connexion') ?>
<?= $this->Form->end() ?>

</section>
</section>
