<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projet[]|\Cake\Collection\CollectionInterface $projets
 */
?>
<?= $this->Html->css('devis.css') ?>

<section class="sec1"></section>

<section class="form-style-8">
    <?= $this->Form->create($postulant, ['enctype' =>'multipart/form-data','type' => 'file']) ?>
    <fieldset>
        <?php
            echo $this->Form->control('nom');
            echo $this->Form->control('prenom');
            echo $this->Form->control('mail');
            echo $this->Form->control('telephone');
            echo $this->Form->file('cv',['type' => 'file'],['empty' => false]);
            echo $this->Form->file('lettre_motivation',['type' => 'file'],['empty' => false]);
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