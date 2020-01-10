<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administrateur $administrateur
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $administrateur->idAdministrateur],
                ['confirm' => __('Are you sure you want to delete # {0}?', $administrateur->idAdministrateur)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Administrateurs'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="administrateurs form large-9 medium-8 columns content">
    <?= $this->Form->create($administrateur) ?>
    <fieldset>
        <legend><?= __('Edit Administrateur') ?></legend>
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
