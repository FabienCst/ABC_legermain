<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prestation $prestation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Prestations'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="prestations form large-9 medium-8 columns content">
    <?= $this->Form->create($prestation) ?>
    <fieldset>
        <legend><?= __('Add Prestation') ?></legend>
        <?php
            echo $this->Form->control('titre');
            echo $this->Form->control('sous_titre');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
