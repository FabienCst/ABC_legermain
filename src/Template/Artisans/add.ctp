<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artisan $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Artisans'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
        echo $this->Form->control('identifiant');
        echo $this->Form->control('mot_de_passe');
        echo $this->Form->control('nom');
        echo $this->Form->control('prenom');
        echo $this->Form->control('email');
        echo $this->Form->control('telephone');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
