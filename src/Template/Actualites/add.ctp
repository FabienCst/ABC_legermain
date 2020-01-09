<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Actualite $actualite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Actualites'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="actualites form large-9 medium-8 columns content">
    <?= $this->Form->create($actualite) ?>
    <fieldset>
        <legend><?= __('Add Actualite') ?></legend>
        <?php
            echo $this->Form->control('titre');
            echo $this->Form->control('description');
            echo $this->Form->control('date', ['empty' => true]);
            echo $this->Form->control('image');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
