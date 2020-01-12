<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Realisation $realisation
 */
?>
<?= $this->Html->css('admin_realisation_addedit.css') ?>

<section class="content">

    <div class="form-style-8">
        <?= $this->Form->create($realisation, ['enctype' =>'multipart/form-data','type' => 'file']) ?>
        <fieldset>
            <?php
                echo $this->Form->control('titre');
                echo $this->Form->control('description');
                echo $this->Form->input('date', array('default'=>$realisation->date));
                echo $this->Form->control('presta',['options' => $titre_prestations]);
                echo $this->Form->file('fichier',['type' => 'file']);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>

</section>
