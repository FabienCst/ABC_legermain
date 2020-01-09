<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Realisation[]|\Cake\Collection\CollectionInterface $realisations
 */
?>
<?= $this->Html->css('recrutement.css') ?>

<section class="sec1"></section>

<section class="content">

    <?php foreach($offres as $offre):?>

        <a href="/details-offre/index/<?php echo h($offre->idOffre); ?>"> <div class="resume">

            <h1><?= h($offre->titre) ?></h1>

            <div class="grid-container">

                <h2 class="champs"> Type de contrat </h2>
                <h2 class="contenue"><?= h($offre->type) ?></h2>

                <h2 class="champs"> Métier </h2>
                <h2 class="contenue"><?= h($offre->corps_metier) ?></h2>

                <h2 class="champs"> Durée </h2>
                <h2 class="contenue"><?= h($offre->duree) ?></h2>

                <h2 class="champs"> Experience </h2>
                <h2 class="contenue"><?= h($offre->exp_requise) ?></h2>

            </div>

        </div></a>

    <?php endforeach; ?>

</section>
