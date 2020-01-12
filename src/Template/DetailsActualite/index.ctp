<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Realisation[]|\Cake\Collection\CollectionInterface $realisations
 */
?>
<?= $this->Html->css('details_realisation.css') ?>

    <?php foreach($actualite as $actualite):?>

        <section class="sec1">
            <img src="/img/actualites/principale/<?= $actualite->image ?>" >
        </section>

        <section class="content">

            <div class="date">
                <?= $actualite->date ?>
            </div>

            <div class="titre">
                <?= $actualite->titre ?>
            </div>

            <div class="description">
                <?= $this->Text->autoParagraph($actualite->description); ?>
            </div>

        </section>

    <?php endforeach; ?>

</section>