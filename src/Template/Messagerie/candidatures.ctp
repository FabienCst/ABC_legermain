<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projet $projets
 */
?>
<?= $this->Html->css('admin_candidatures.css') ?>

<?php foreach($postulants as $postulant):?>

<section class="content">

        <div class="droite">
            <div class="haut_droite">
                <div class="champs">Candidature déposée le </div>
                <div class="contenu"><?= h($postulant->date) ?></div>
            </div>
            <div class="milieu_droite">
                <div class="champs" >Nom</div>
                <div class="contenu" ><?= h($postulant->nom) ?></div>
                <div class="champs" >Prénom</div>
                <div class="contenu" ><?= h($postulant->prenom) ?></div>
                <div class="champs" >Mail</div>
                <div class="contenu" ><?= h($postulant->mail) ?></div>
                <div class="champs" >Téléphone</div>
                <div class="contenu" ><?= h($postulant->telephone) ?></div>
            </div>
        </div>

        <div class="boutons">
            <div class="btn">
                 <a href="/messagerie/candidatures" download="<?= h($postulant->cv) ?>">Télécharger le CV</a>
            </div>
            <div class="btn">
                 <a href="/messagerie/candidatures" download="<?= h($postulant->lettre_motivation) ?>">Télécharger la lettre de motivation</a>
            </div>
            <a><div class="btn">
                 <?= $this->Form->postLink(__('Supprimer'), ['action' => 'deleteDevis', $postulant->idPostulant], ['confirm' => __('Etes-vous sur de vouloir supprimer cette candidature ?')]) ?>
            </div><a>
        </div>

</section>

<?php endforeach; ?>
