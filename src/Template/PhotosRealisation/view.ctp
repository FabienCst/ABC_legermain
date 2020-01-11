<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PhotosRealisation $photosRealisation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Photos Realisation'), ['action' => 'edit', $photosRealisation->idPhoto_realisation]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Photos Realisation'), ['action' => 'delete', $photosRealisation->idPhoto_realisation], ['confirm' => __('Are you sure you want to delete # {0}?', $photosRealisation->idPhoto_realisation)]) ?> </li>
        <li><?= $this->Html->link(__('List Photos Realisation'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Photos Realisation'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="photosRealisation view large-9 medium-8 columns content">
    <h3><?= h($photosRealisation->idPhoto_realisation) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Chemin') ?></th>
            <td><?= h($photosRealisation->chemin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdPhoto Realisation') ?></th>
            <td><?= $this->Number->format($photosRealisation->idPhoto_realisation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdRealisation') ?></th>
            <td><?= $this->Number->format($photosRealisation->idRealisation) ?></td>
        </tr>
    </table>
</div>
