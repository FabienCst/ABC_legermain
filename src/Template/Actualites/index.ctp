<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Actualite[]|\Cake\Collection\CollectionInterface $actualites
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Actualite'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="actualites index large-9 medium-8 columns content">
    <h3><?= __('Actualites') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idActualite') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($actualites as $actualite): ?>
            <tr>
                <td><?= $this->Number->format($actualite->idActualite) ?></td>
                <td><?= h($actualite->titre) ?></td>
                <td><?= h($actualite->date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $actualite->idActualite]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $actualite->idActualite]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $actualite->idActualite], ['confirm' => __('Are you sure you want to delete # {0}?', $actualite->idActualite)]) ?>
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
