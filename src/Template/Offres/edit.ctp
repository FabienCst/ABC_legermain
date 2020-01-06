<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offre $offre
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $offre->idOffre],
                ['confirm' => __('Are you sure you want to delete # {0}?', $offre->idOffre)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Offres'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="offres form large-9 medium-8 columns content">
    <?= $this->Form->create($offre) ?>
    <fieldset>
        <legend><?= __('Edit Offre') ?></legend>
        <?php
            echo $this->Form->control('type');
            echo $this->Form->control('description');
            echo $this->Form->control('exp_requise');
            echo $this->Form->control('corps_metier');
            echo $this->Form->control('date_debut', ['empty' => true]);
            echo $this->Form->control('date_fin', ['empty' => true]);
            echo $this->Form->control('duree');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
