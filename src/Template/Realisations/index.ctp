<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Realisation[]|\Cake\Collection\CollectionInterface $realisations
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Realisation'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="realisations index large-9 medium-8 columns content">
    <h3><?= __('Realisations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idRealisation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idPrestation') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($realisations as $realisation): ?>
            <tr>
                <td><?= $this->Number->format($realisation->idRealisation) ?></td>
                <td><?= h($realisation->titre) ?></td>
                <td><?= h($realisation->date) ?></td>
                <td><?= $this->Number->format($realisation->idPrestation) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $realisation->idRealisation]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $realisation->idRealisation]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $realisation->idRealisation], ['confirm' => __('Are you sure you want to delete # {0}?', $realisation->idRealisation)]) ?>
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
