<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Actualite $actualite
 */
?>
<?= $this->Html->css('admin_realisation_addedit.css') ?>

<section class="content">

    <div class="form-style-8">
        <?= $this->Form->create($actualite, ['enctype' =>'multipart/form-data','type' => 'file']) ?>
        <fieldset>
            <?php
                echo $this->Form->control('titre');
                echo $this->Form->control('description');
                echo $this->Form->file('fichier',['type' => 'file']);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>

</section>