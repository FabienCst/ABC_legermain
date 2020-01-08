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

        <div class="resume">
            <h1><?= h($offre->titre) ?></h1>

            <h2> Type de contrat </h2>
            <h3><?= h($offre->type) ?></h3>

            <h2> Métier </h2>
            <h3><?= h($offre->corps_metier) ?></h3>

            <h2> Durée </h2>
            <h3><?= h($offre->duree) ?></h3>

            <h2> Experience </h2>
            <h3><?= h($offre->exp_requise) ?></h3>

        </div>

    <?php endforeach; ?>

</section>
