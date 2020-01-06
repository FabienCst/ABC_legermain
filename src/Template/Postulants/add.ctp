<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Postulant $postulant
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Postulants'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="postulants form large-9 medium-8 columns content">
    <?= $this->Form->create($postulant) ?>
    <fieldset>
        <legend><?= __('Add Postulant') ?></legend>
        <?php
            echo $this->Form->control('nom');
            echo $this->Form->control('prenom');
            echo $this->Form->control('mail');
            echo $this->Form->control('telephone');
            echo $this->Form->control('date', ['empty' => true]);
            echo $this->Form->control('cv');
            echo $this->Form->control('lettre_motivation');
            echo $this->Form->control('idOffre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
