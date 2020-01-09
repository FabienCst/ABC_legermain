<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Realisation $realisation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Realisation'), ['action' => 'edit', $realisation->idRealisation]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Realisation'), ['action' => 'delete', $realisation->idRealisation], ['confirm' => __('Are you sure you want to delete # {0}?', $realisation->idRealisation)]) ?> </li>
        <li><?= $this->Html->link(__('List Realisations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Realisation'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="realisations view large-9 medium-8 columns content">
    <h3><?= h($realisation->idRealisation) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titre') ?></th>
            <td><?= h($realisation->titre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($realisation->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdRealisation') ?></th>
            <td><?= $this->Number->format($realisation->idRealisation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdPrestation') ?></th>
            <td><?= $this->Number->format($realisation->idPrestation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($realisation->date) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($realisation->description)); ?>
    </div>
</div>
