<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projet $projets
 */
?>
$this->layout = 'admin';

<section class="content">

    <?php foreach($projets as $projet):?>

    <h3><?= h($projet->idProjet) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($projet->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prenom') ?></th>
            <td><?= h($projet->prenom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mail') ?></th>
            <td><?= h($projet->mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adresse') ?></th>
            <td><?= h($projet->adresse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code Postal') ?></th>
            <td><?= h($projet->code_postal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ville') ?></th>
            <td><?= h($projet->ville) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($projet->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdProjet') ?></th>
            <td><?= $this->Number->format($projet->idProjet) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($projet->date) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($projet->description)); ?>
    </div>

    <?php endforeach; ?>

</section>