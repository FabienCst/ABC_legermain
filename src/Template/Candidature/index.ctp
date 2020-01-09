<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projet[]|\Cake\Collection\CollectionInterface $projets
 */
?>
<?= $this->Html->css('devis.css') ?>

<section class="sec1"></section>

<section class="content">
    <?= $this->Form->create($postulant) ?>
    <fieldset>
        <?php
            echo $this->Form->control('nom');
            echo $this->Form->control('prenom');
            echo $this->Form->control('mail');
            echo $this->Form->control('telephone');
            echo $this->Form->input('date', array('default'=>$date));
            echo $this->Form->control('cv');
            echo $this->Form->control('lettre_motivation');
            echo $this->Form->control('idOffre', ['default' => $idOffre]);
        ?>
    </fieldset>
</section>

<div class="btns">

    <?= $this->Form->button(__('Envoyer la candidature')) ?>
    <?= $this->Form->end() ?>

    <a href="/details-offre/index/<?php echo $idOffre; ?>";"><div class="btn_devis">
        <p>Annuler</p>
    </div><a>

</div>