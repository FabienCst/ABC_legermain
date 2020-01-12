<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prestation $prestation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Prestation'), ['action' => 'edit', $prestation->idPrestation]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Prestation'), ['action' => 'delete', $prestation->idPrestation], ['confirm' => __('Are you sure you want to delete # {0}?', $prestation->idPrestation)]) ?> </li>
        <li><?= $this->Html->link(__('List Prestations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prestation'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="prestations view large-9 medium-8 columns content">
    <h3><?= h($prestation->idPrestation) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titre') ?></th>
            <td><?= h($prestation->titre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($prestation->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdPrestation') ?></th>
            <td><?= $this->Number->format($prestation->idPrestation) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Sous Titre') ?></h4>
        <?= $this->Text->autoParagraph(h($prestation->sous_titre)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($prestation->description)); ?>
    </div>
</div>
