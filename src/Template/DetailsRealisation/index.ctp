<?php

?>
<?= $this->Html->css('details_realisation.css') ?>

<?php foreach($realisation as $realisation):?>

<section class="sec1">
    <img src="/img/realisations/principale/<?= $realisation->image ?>" >
</section>

<section class="content">

            <div class="date">
                <?= $realisation->date ?>
            </div>

            <div class="titre">
                <?= $realisation->titre ?>
            </div>

            <div class="description">
                <?= $this->Text->autoParagraph($realisation->description); ?>
            </div>

            <img src="/img/realisations/principale/<?= $realisation->image ?>" width=100% height="auto">

</section>

<?php endforeach; ?>

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