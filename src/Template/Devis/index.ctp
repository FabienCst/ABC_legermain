<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projet[]|\Cake\Collection\CollectionInterface $projets
 */
?>
<?= $this->Html->css('devis.css') ?>SS


<section class="sec1"></section>
<section class="content">
    <?= $this->Form->create($projet) ?>
    <fieldset>
        <div class="prenom">
        <?php
            echo $this->Form->control('prenom'); ?>
        </div>
        <div class="nom">
            <?php
            echo $this->Form->control('nom'); ?>
        </div>
        <div>
        <?php
            echo $this->Form->control('mail');?>
        </div>
        <div>
            <?php
            echo $this->Form->control('adresse'); ?>
        </div>
        <div class="ville">
            <?php
            echo $this->Form->control('ville');?>
        </div>
        <div class="codepostal">
            <?php
            echo $this->Form->control('code_postal');?>
        </div>
        <div>
            <?php
            echo $this->Form->control('type');?>
        </div>
        <div>
            <?php
            echo $this->Form->control('description');?>
        </div>
        <?php
            $this->Form->input('date', array('default'=>$date));
        ?>
    </fieldset>
</section>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
