<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prestation $prestation
 */
?>
<?= $this->Html->css('admin_realisation_addedit.css') ?>

<h1>Ajouter une prestation</h1>

<section class="content">

    <div class="form-style-8">
        <?= $this->Form->create($prestation, ['enctype' =>'multipart/form-data','type' => 'file']) ?>
        <fieldset>
            <?php
                echo $this->Form->control('titre');
                echo $this->Form->control('sous_titre');
                echo $this->Form->control('description');
                echo $this->Form->file('fichier',['type' => 'file'],['empty' => false]);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Ajouter')) ?>
        <?= $this->Form->end() ?>
    </div>

</section>
