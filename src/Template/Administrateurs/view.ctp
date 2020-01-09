<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administrateur $administrateur
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Administrateur'), ['action' => 'edit', $administrateur->idAdministrateur]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Administrateur'), ['action' => 'delete', $administrateur->idAdministrateur], ['confirm' => __('Are you sure you want to delete # {0}?', $administrateur->idAdministrateur)]) ?> </li>
        <li><?= $this->Html->link(__('List Administrateurs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Administrateur'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="administrateurs view large-9 medium-8 columns content">
    <h3><?= h($administrateur->idAdministrateur) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Identifiant') ?></th>
            <td><?= h($administrateur->identifiant) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mot De Passe') ?></th>
            <td><?= h($administrateur->mot_de_passe) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($administrateur->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prenom') ?></th>
            <td><?= h($administrateur->prenom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($administrateur->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone') ?></th>
            <td><?= h($administrateur->telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdAdministrateur') ?></th>
            <td><?= $this->Number->format($administrateur->idAdministrateur) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Actif') ?></th>
            <td><?= $this->Number->format($administrateur->actif) ?></td>
        </tr>
    </table>
</div>
