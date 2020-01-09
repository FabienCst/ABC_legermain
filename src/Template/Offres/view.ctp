<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offre $offre
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Offre'), ['action' => 'edit', $offre->idOffre]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Offre'), ['action' => 'delete', $offre->idOffre], ['confirm' => __('Are you sure you want to delete # {0}?', $offre->idOffre)]) ?> </li>
        <li><?= $this->Html->link(__('List Offres'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offre'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="offres view large-9 medium-8 columns content">
    <h3><?= h($offre->idOffre) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titre') ?></th>
            <td><?= h($offre->titre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($offre->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Exp Requise') ?></th>
            <td><?= h($offre->exp_requise) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Corps Metier') ?></th>
            <td><?= h($offre->corps_metier) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Duree') ?></th>
            <td><?= h($offre->duree) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdOffre') ?></th>
            <td><?= $this->Number->format($offre->idOffre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Debut') ?></th>
            <td><?= h($offre->date_debut) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Fin') ?></th>
            <td><?= h($offre->date_fin) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($offre->description)); ?>
    </div>
</div>
