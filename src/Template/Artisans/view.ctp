<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artisan $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Artisan'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Artisan'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Artisan'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Artisan'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="artisans view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('identifiant') ?></th>
            <td><?= h($user->identifiant) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('mot de passe') ?></th>
            <td><?= h($user->mot_de_passe) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('nom') ?></th>
            <td><?= h($user->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('prenom') ?></th>
            <td><?= h($user->prenom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('telephone') ?></th>
            <td><?= h($user->telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('idArtisan') ?></th>
            <td><?= $this->Number->format($user->idArtisan) ?></td>
        </tr>
    </table>
</div>
