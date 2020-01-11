<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PhotosRealisation $photosRealisation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $photosRealisation->idPhoto_realisation],
                ['confirm' => __('Are you sure you want to delete # {0}?', $photosRealisation->idPhoto_realisation)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Photos Realisation'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="photosRealisation form large-9 medium-8 columns content">
    <?= $this->Form->create($photosRealisation) ?>
    <fieldset>
        <legend><?= __('Edit Photos Realisation') ?></legend>
        <?php
            echo $this->Form->control('chemin');
            echo $this->Form->control('idRealisation');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
