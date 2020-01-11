<?php
$this->layout = false;
$cakeDescription = 'ABC Legermain | Login';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->css('login.css') ?>
</head>
<body>
<section class="sec1">
    <div class="content">
<div class="form-style-8">
<h1>ESPACE ADMIN</h1>

<?= $this->Form->create() ?>
<?= $this->Form->control('identifiant', array('label' => "Identifiant")) ?>
<?= $this->Form->control('mot_de_passe', array('label' => "Mot de passe", 'type' => 'password')) ?>
    <div class="btn-connex-login">
        <?= $this->Form->button(__('Se Connecter')) ?>
    </div>
<?= $this->Form->end() ?>
</div>
    </div>
</section>
</body>