<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Realisation $realisation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Realisations'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="realisations form large-9 medium-8 columns content">
    <?= $this->Form->create($realisation) ?>
    <fieldset>
        <legend><?= __('Add Realisation') ?></legend>
        <?php
            echo $this->Form->control('titre');
            echo $this->Form->control('description');
            echo $this->Form->control('date', ['empty' => true]);
            echo $this->Form->control('idPrestation');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
