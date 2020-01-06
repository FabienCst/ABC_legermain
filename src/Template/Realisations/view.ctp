<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Realisation $realisation
 */
?>
<div class="realisations view large-9 medium-8 columns content">
    <h3><?= h($realisation->idRealisation) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titre') ?></th>
            <td><?= h($realisation->titre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdRealisation') ?></th>
            <td><?= $this->Number->format($realisation->idRealisation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdPrestation') ?></th>
            <td><?= $this->Number->format($realisation->idPrestation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($realisation->date) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($realisation->description)); ?>
    </div>
</div>
