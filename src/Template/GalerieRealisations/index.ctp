<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projet[]|\Cake\Collection\CollectionInterface $projets
 */
?>
<?= $this->Html->css('galerie_realisations.css') ?>

<section class="sec1">
        <img src="/<?= $prestation ?>" >
</section>

<div class="child-page-listing">
  <div class="grid-container">

<?php foreach($realisations as $realisations):?>
<a href="/details-realisation/index/<?php echo h($realisations->idRealisation); ?>">
    <article id="3685" class="location-listing">
      <label class="location-title" > <?= $realisations->titre ?></label>
      <div class="location-image">
        <img width="300" height="169" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/san-fransisco-768x432.jpg" >
      </div>
    </article></a>
<?php endforeach; ?>

  </div>
</div>