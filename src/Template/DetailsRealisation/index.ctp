<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Realisation[]|\Cake\Collection\CollectionInterface $realisations
 */
?>
<?= $this->Html->css('details_realisation.css') ?>

<section class="sec1"></section>

<section class="content">

    <?php foreach($realisation as $realisation):?>

        <div class="date">
            <?= $realisation->date ?>
        </div>

        <div class="titre">
            <?= $realisation->titre ?>
        </div>

        <div class="description">
            <?= $this->Text->autoParagraph($realisation->description); ?>
        </div>

    <?php endforeach; ?>

</section>

<div class="btn_devis">
    <a href="/devis/index";">
    <div class="docs">
        <?= $this->Html->image('docs.svg') ?>
    </div>
    <div>
        <p>Demander un devis</p>
    </div>
    <a>
</div>
