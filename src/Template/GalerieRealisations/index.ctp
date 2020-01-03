<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projet[]|\Cake\Collection\CollectionInterface $projets
 */
?>
<?= $this->Html->css('galerie_realisations.css') ?>

<section class="sec1"></section>

<div class="child-page-listing">
  <div class="grid-container">

<?php foreach($realisations as $realisations):?>
    <article id="3685" class="location-listing">
      <a class="location-title" href="#"><?= $realisations->titre ?></a>
      <div class="location-image">
        <-- <a href="#"><img width="300" height="169" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/san-fransisco-768x432.jpg" ></a> -->
      </div>
    </article>
<?php endforeach; ?>

  </div>
</div>