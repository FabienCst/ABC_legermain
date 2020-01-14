<?php

?>
<?= $this->Html->css('devis.css') ?>

<script src='https://www.google.com/recaptcha/api.js'></script>

<section class="sec1"></section>
<section class="form-style-8">
    <?= $this->Form->create($projet) ?>
    <fieldset>
        <?php
            echo $this->Form->control('nom');
            echo $this->Form->control('prenom');
            echo $this->Form->control('mail');
            echo $this->Form->control('telephone');
            echo $this->Form->control('adresse');
            echo $this->Form->control('code_postal');
            echo $this->Form->control('ville');
            echo $this->Form->control('description');
            echo $this->Form->control('type',['options' => $titre_prestations]);
        ?>
    </fieldset>
    <div class="g-recaptcha" data-sitekey="6LdBns4UAAAAANkoYPrj8tP2O3RWMZUgHXLueGok"></div>
</section>
<div class="btn-submit-devis">
    <?= $this->Form->submit(__('Demander un Devis')) ?>
</div>
<?= $this->Form->end() ?>

