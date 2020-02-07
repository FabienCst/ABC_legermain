<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administrateur $administrateur
 */
?>
<div class="administrateurs form large-9 medium-8 columns content">
    <?= $this->Form->create($administrateur) ?>
    <fieldset>
        <legend><?= __('Add Administrateur') ?></legend>
        <?php
            echo $this->Form->control('identifiant');
            echo $this->Form->control('mot_de_passe');
            echo $this->Form->control('nom');
            echo $this->Form->control('prenom');
            echo $this->Form->control('email');
            echo $this->Form->control('telephone');
            echo $this->Form->control('actif');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
