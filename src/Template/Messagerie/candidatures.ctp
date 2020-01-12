<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projet $projets
 */
?>
$this->layout = 'admin';
<?= $this->Html->css('admin_candidatures.css') ?>

<?php foreach($postulants as $postulant):?>

    <section class="content">

        <div class=date>Candidature déposée le <p><?= h($postulant->date) ?></p></div>

        <div class="gauche">

                <div class="champs" >Nom</div>
                <div class="contenu" ><?= h($postulant->nom) ?></div>

                <div class="champs" >Prénom</div>
                <div class="contenu" ><?= h($postulant->prenom) ?></div>

                <div class="champs" >Mail</div>
                <div class="contenu" ><?= h($postulant->mail) ?></div>

                <div class="champs" >Téléphone</div>
                <div class="contenu" ><?= h($postulant->telephone) ?></div>

        </div>
        <div class"telechargeable">
            <div class="btn">
                <a href="/postulants/" download="<?= h($postulant->cv) ?>">Télécharger le CV</a>
            </div>
            <div class="btn">
                <a href="/postulants/" download="<?= h($postulant->lettre_motivation) ?>">Télécharger la lettre de motivation</a>
            </div>
        </div>


        <a><div class="btn">
            <p><?= $this->Form->postLink(__('Supprimer'), ['action' => 'deleteDevis', $postulant->idPostulant], ['confirm' => __('Etes-vous sur de vouloir supprimer ce postulant ?')]) ?></p>
        </div><a>

    </section>

<?php endforeach; ?>

