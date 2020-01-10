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
        <?php
            echo $this->Form->control('nom');
            echo $this->Form->control('prenom');
            echo $this->Form->control('mail');
            echo $this->Form->control('adresse');
            echo $this->Form->control('code_postal');
            echo $this->Form->control('ville');
            echo $this->Form->control('description');
            echo $this->Form->control('type');
            echo $this->Form->input('date', array('default'=>$date));
        ?>
    </fieldset>
</section>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
