<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PhotosRealisation[]|\Cake\Collection\CollectionInterface $photosRealisation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Photos Realisation'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="photosRealisation index large-9 medium-8 columns content">
    <h3><?= __('Photos Realisation') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idPhoto_realisation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('chemin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idRealisation') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($photosRealisation as $photosRealisation): ?>
            <tr>
                <td><?= $this->Number->format($photosRealisation->idPhoto_realisation) ?></td>
                <td><?= h($photosRealisation->chemin) ?></td>
                <td><?= $this->Number->format($photosRealisation->idRealisation) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $photosRealisation->idPhoto_realisation]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $photosRealisation->idPhoto_realisation]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $photosRealisation->idPhoto_realisation], ['confirm' => __('Are you sure you want to delete # {0}?', $photosRealisation->idPhoto_realisation)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
