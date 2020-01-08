<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administrateur[]|\Cake\Collection\CollectionInterface $administrateurs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Administrateur'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="administrateurs index large-9 medium-8 columns content">
    <h3><?= __('Administrateurs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idAdministrateur') ?></th>
                <th scope="col"><?= $this->Paginator->sort('identifiant') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mot_de_passe') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prenom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telephone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('actif') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($administrateurs as $administrateur): ?>
            <tr>
                <td><?= $this->Number->format($administrateur->idAdministrateur) ?></td>
                <td><?= h($administrateur->identifiant) ?></td>
                <td><?= h($administrateur->mot_de_passe) ?></td>
                <td><?= h($administrateur->nom) ?></td>
                <td><?= h($administrateur->prenom) ?></td>
                <td><?= h($administrateur->email) ?></td>
                <td><?= h($administrateur->telephone) ?></td>
                <td><?= $this->Number->format($administrateur->actif) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $administrateur->idAdministrateur]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $administrateur->idAdministrateur]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $administrateur->idAdministrateur], ['confirm' => __('Are you sure you want to delete # {0}?', $administrateur->idAdministrateur)]) ?>
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
