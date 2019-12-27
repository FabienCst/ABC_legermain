<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projet[]|\Cake\Collection\CollectionInterface $projets
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projet'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projets index large-9 medium-8 columns content">
    <h3><?= __('Projets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idProjet') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prenom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adresse') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code_postal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ville') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projets as $projet): ?>
            <tr>
                <td><?= $this->Number->format($projet->idProjet) ?></td>
                <td><?= h($projet->nom) ?></td>
                <td><?= h($projet->prenom) ?></td>
                <td><?= h($projet->mail) ?></td>
                <td><?= h($projet->adresse) ?></td>
                <td><?= h($projet->code_postal) ?></td>
                <td><?= h($projet->ville) ?></td>
                <td><?= h($projet->type) ?></td>
                <td><?= h($projet->date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projet->idProjet]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projet->idProjet]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projet->idProjet], ['confirm' => __('Are you sure you want to delete # {0}?', $projet->idProjet)]) ?>
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
