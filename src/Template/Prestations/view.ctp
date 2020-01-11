<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prestation $prestation
 */
?>
<div class="prestations view large-9 medium-8 columns content">
    <h3><?= h($prestation->idPrestation) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titre') ?></th>
            <td><?= h($prestation->titre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($prestation->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdPrestation') ?></th>
            <td><?= $this->Number->format($prestation->idPrestation) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Sous Titre') ?></h4>
        <?= $this->Text->autoParagraph(h($prestation->sous_titre)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($prestation->description)); ?>
    </div>
</div>
