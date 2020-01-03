<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prestation[]|\Cake\Collection\CollectionInterface $prestations
 */
?>
<div class="prestations index large-9 medium-8 columns content">
    <h3><?= __('Prestations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idPrestation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titre') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($prestations as $prestation): ?>
            <tr>
                <td><?= $this->Number->format($prestation->idPrestation) ?></td>
                <td><?= h($prestation->titre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $prestation->idPrestation]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $prestation->idPrestation]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $prestation->idPrestation], ['confirm' => __('Are you sure you want to delete # {0}?', $prestation->idPrestation)]) ?>
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
