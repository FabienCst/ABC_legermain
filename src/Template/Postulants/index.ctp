<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Postulant[]|\Cake\Collection\CollectionInterface $postulants
 */
?>
<div class="postulants index large-9 medium-8 columns content">
    <h3><?= __('Postulants') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idPostulant') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prenom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telephone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cv') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lettre_motivation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idOffre') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($postulants as $postulant): ?>
            <tr>
                <td><?= $this->Number->format($postulant->idPostulant) ?></td>
                <td><?= h($postulant->nom) ?></td>
                <td><?= h($postulant->prenom) ?></td>
                <td><?= h($postulant->mail) ?></td>
                <td><?= h($postulant->telephone) ?></td>
                <td><?= h($postulant->date) ?></td>
                <td><a href="/postulants/" download="<?= h($postulant->cv) ?>">Télécharger le CV</a></td>
                <td><a href="/postulants/" download="<?= h($postulant->lettre_motivation) ?>">Télécharger la lettre de motivation</a></td>
                <td><?= $this->Number->format($postulant->idOffre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $postulant->idPostulant]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $postulant->idPostulant]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $postulant->idPostulant], ['confirm' => __('Are you sure you want to delete # {0}?', $postulant->idPostulant)]) ?>
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
