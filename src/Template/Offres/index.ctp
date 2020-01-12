<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offre[]|\Cake\Collection\CollectionInterface $offres
 */
?>
<?= $this->Html->css('admin_recrutement.css') ?>

<h1>Offres d'emploi</h1>

<?php foreach ($offres as $offre): ?>

<section class="content">

        <div class="droite">
            <div class="haut_droite">
                <div class="champs">Titre</div>
                <div class="contenu"><?= h($offre->titre) ?></div>
                <div class="champs">Type</div>
                <div class="contenu"><?= h($offre->type) ?></div>
                <div class="champs">Métier</div>
                <div class="contenu"><?= h($offre->corps_metier) ?></div>
                <div class="champs">Durée</div>
                <div class="contenu"><?= h($offre->duree) ?></div>
                <div class="champs">Date debut</div>
                <div class="contenu"><?= h($offre->date_debut) ?></div>
                <div class="champs">Date fin</div>
                <div class="contenu"><?= h($offre->date_fin) ?></div>
                <div class="champs">Description</div>
            </div>
            <div class="bas_droite">
                <div class="contenu"><?= h($offre->description); ?></div>
            </div>
        </div>

        <div class="boutons">
            <a><div class="btn">
                <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $offre->idOffre], ['confirm' => __('Etes-vous sur de vouloir supprimer cette offre d\'emploi ?')]) ?>
            </div></a>
            <a><div class="btn">
                <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $offre->idOffre]) ?>
            </div></a>
        </div>

</section>
<?php endforeach; ?>