<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projet[]|\Cake\Collection\CollectionInterface $projets
 */
?>
<?= $this->Html->css('devis.css') ?>SS


<section class="sec1"></section>
<section class="content">

    <?= $this->Form->create($projet) ?>
    <div class="form-style-8">
        <h1>Demande de Devis</h1>
    <fieldset>
        <?php
            echo $this->Form->control('prenom ');
            echo $this->Form->control('nom ');
            echo $this->Form->control('mail ',['type' => 'email']);
            echo $this->Form->control('adresse ');
            echo $this->Form->control('ville ');
            echo $this->Form->control('code_postal ');
            echo $this->Form->control('type ');
            echo $this->Form->control('description ');
        ?>
    </fieldset>
</section>
<div class="btn-submit-devis">
    <p><?= $this->Form->button(__('Submit')) ?></p>
</div>
<?= $this->Form->end() ?>
