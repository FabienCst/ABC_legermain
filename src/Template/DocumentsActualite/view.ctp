<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DocumentsActualite $documentsActualite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Documents Actualite'), ['action' => 'edit', $documentsActualite->idDoc_actualite]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Documents Actualite'), ['action' => 'delete', $documentsActualite->idDoc_actualite], ['confirm' => __('Are you sure you want to delete # {0}?', $documentsActualite->idDoc_actualite)]) ?> </li>
        <li><?= $this->Html->link(__('List Documents Actualite'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Documents Actualite'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="documentsActualite view large-9 medium-8 columns content">
    <h3><?= h($documentsActualite->idDoc_actualite) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Chemin') ?></th>
            <td><?= h($documentsActualite->chemin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdDoc Actualite') ?></th>
            <td><?= $this->Number->format($documentsActualite->idDoc_actualite) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdActualite') ?></th>
            <td><?= $this->Number->format($documentsActualite->idActualite) ?></td>
        </tr>
    </table>
</div>
