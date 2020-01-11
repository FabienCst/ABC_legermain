<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projet[]|\Cake\Collection\CollectionInterface $projets
 */
?>
<?= $this->Html->css('devis.css') ?>


<section class="sec1"></section>
<section class="form-style-8">
    <?= $this->Form->create($projet) ?>
    <fieldset>
        <?php
            echo $this->Form->control('nom');
            echo $this->Form->control('prenom');
            echo $this->Form->control('mail');
            echo $this->Form->control('adresse');
            echo $this->Form->control('code_postal');
            echo $this->Form->control('ville');
            echo $this->Form->control('description');
            echo $this->Form->control('type',['options' => $titre_prestations]);
        ?>
    </fieldset>
</section>
<div class="btn-submit-devis">
    <?= $this->Form->button(__('Demander un Devis')) ?>
</div>
<?= $this->Form->end() ?>
