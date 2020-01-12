<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offre $offre
 */
?>
<?= $this->Html->css('admin_realisation_addedit.css') ?>

<section class="content">

    <div class="form-style-8">
        <?= $this->Form->create($offre) ?>
        <fieldset>
                <?php
                    echo $this->Form->control('titre');
                    echo $this->Form->control('type');
                    echo $this->Form->control('description');
                    echo $this->Form->control('exp_requise');
                    echo $this->Form->control('corps_metier');
                    echo $this->Form->control('date_debut', ['empty' => true]);
                    echo $this->Form->control('date_fin', ['empty' => true]);
                    echo $this->Form->control('duree', ['empty' => true]);
                ?>
        </fieldset>
        <?= $this->Form->button(__('Modifier')) ?>
        <?= $this->Form->end() ?>
    </div>

</section>
