<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Realisation[]|\Cake\Collection\CollectionInterface $realisations
 */
?>
<?= $this->Html->css('details_offre.css') ?>

<section class="sec1"></section>

<section class="content">

    <?php foreach($offre as $offre):?>

        <h1><?= h($offre->titre) ?></h1>

        <div class="resume">

                    <div class="grid-container">

                        <h2 class="champs"> Type de contrat </h2>
                        <h2 class="contenue"><?= h($offre->type) ?></h2>

                        <h2 class="champs"> Métier </h2>
                        <h2 class="contenue"><?= h($offre->corps_metier) ?></h2>

                        <h2 class="champs"> Durée </h2>
                        <h2 class="contenue"><?= h($offre->duree) ?></h2>

                        <h2 class="champs"> Experience </h2>
                        <h2 class="contenue"><?= h($offre->exp_requise) ?></h2>

                        <h2 class="champs"> Date debut </h2>
                        <h2 class="contenue"><?= h($offre->date_deb) ?></h2>

                        <h2 class="champs"> Date fin </h2>
                        <h2 class="contenue"><?= h($offre->date_fin) ?></h2>

                    </div>

        </div>
        <div class="description">
            <h2 class="descri"> Description</h2>
            <p class="descri"><?= h($offre->description) ?></p>
        </div>

    <?php endforeach; ?>

</section>

<a href="/candidature/index/<?php echo h($offre->idOffre); ?>"><div class="btn_devis">
    <p>Postuler</p>
</div><a>