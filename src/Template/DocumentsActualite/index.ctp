<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DocumentsActualite[]|\Cake\Collection\CollectionInterface $documentsActualite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Documents Actualite'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="documentsActualite index large-9 medium-8 columns content">
    <h3><?= __('Documents Actualite') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idDoc_actualite') ?></th>
                <th scope="col"><?= $this->Paginator->sort('chemin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idActualite') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($documentsActualite as $documentsActualite): ?>
            <tr>
                <td><?= $this->Number->format($documentsActualite->idDoc_actualite) ?></td>
                <td><?= h($documentsActualite->chemin) ?></td>
                <td><?= $this->Number->format($documentsActualite->idActualite) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $documentsActualite->idDoc_actualite]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $documentsActualite->idDoc_actualite]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $documentsActualite->idDoc_actualite], ['confirm' => __('Are you sure you want to delete # {0}?', $documentsActualite->idDoc_actualite)]) ?>
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
