<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DocumentsActualite $documentsActualite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Documents Actualite'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="documentsActualite form large-9 medium-8 columns content">
    <?= $this->Form->create($documentsActualite) ?>
    <fieldset>
        <legend><?= __('Add Documents Actualite') ?></legend>
        <?php
            echo $this->Form->control('chemin');
            echo $this->Form->control('idActualite');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
