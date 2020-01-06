<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Postulant $postulant
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Postulant'), ['action' => 'edit', $postulant->idPostulant]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Postulant'), ['action' => 'delete', $postulant->idPostulant], ['confirm' => __('Are you sure you want to delete # {0}?', $postulant->idPostulant)]) ?> </li>
        <li><?= $this->Html->link(__('List Postulants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Postulant'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="postulants view large-9 medium-8 columns content">
    <h3><?= h($postulant->idPostulant) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($postulant->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prenom') ?></th>
            <td><?= h($postulant->prenom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mail') ?></th>
            <td><?= h($postulant->mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone') ?></th>
            <td><?= h($postulant->telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cv') ?></th>
            <td><?= h($postulant->cv) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lettre Motivation') ?></th>
            <td><?= h($postulant->lettre_motivation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdPostulant') ?></th>
            <td><?= $this->Number->format($postulant->idPostulant) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdOffre') ?></th>
            <td><?= $this->Number->format($postulant->idOffre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($postulant->date) ?></td>
        </tr>
    </table>
</div>
