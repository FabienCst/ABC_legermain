<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projet $projet
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projet'), ['action' => 'edit', $projet->idProjet]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projet'), ['action' => 'delete', $projet->idProjet], ['confirm' => __('Are you sure you want to delete # {0}?', $projet->idProjet)]) ?> </li>
        <li><?= $this->Html->link(__('List Projets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projet'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projets view large-9 medium-8 columns content">
    <h3><?= h($projet->idProjet) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($projet->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prenom') ?></th>
            <td><?= h($projet->prenom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mail') ?></th>
            <td><?= h($projet->mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adresse') ?></th>
            <td><?= h($projet->adresse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code Postal') ?></th>
            <td><?= h($projet->code_postal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ville') ?></th>
            <td><?= h($projet->ville) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($projet->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdProjet') ?></th>
            <td><?= $this->Number->format($projet->idProjet) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($projet->date) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($projet->description)); ?>
    </div>
</div>
