<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prestation $prestation
 */
?>
<div class="prestations form large-9 medium-8 columns content">
    <?= $this->Form->create($prestation) ?>
    <fieldset>
        <legend><?= __('Edit Prestation') ?></legend>
        <?php
            echo $this->Form->control('titre');
            echo $this->Form->control('sous_titre');
            echo $this->Form->control('description');
            echo $this->Form->control('image');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
