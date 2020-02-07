<?php

?>
<?= $this->Html->css('galerie_realisations.css') ?>

<section class="sec1">
        <img src="/img/prestations/<?= h($prestation) ?>" >
</section>

<div class="child-page-listing">
  <div class="grid-container">

<?php foreach($realisations as $realisations):?>
<a href="/details-realisation/index/<?php echo h($realisations->idRealisation); ?>">
    <article id="3685" class="location-listing">
      <label class="location-title" > <?= $realisations->titre ?></label>
      <div class="location-image">
        <img width="300" height="169" src="/img/realisations/principale/<?php echo h($realisations->image); ?>" >
      </div>
    </article></a>
<?php endforeach; ?>

  </div>
</div>