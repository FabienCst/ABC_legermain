<?php

?>
<?= $this->Html->css('admin_candidatures.css') ?>

<h1>Demandes de devis</h1>

<?php foreach($projets as $projet):?>

<section class="content">

        <div class="droite">
            <div class="haut_droite">
                <div class="champs">Demande effectuée le </div>
                <div class="contenu"><?= h($projet->date) ?></div>
            </div>
            <div class="milieu_droite">
                <div class="champs" >Nom</div>
                <div class="contenu" ><?= h($projet->nom) ?></div>
                <div class="champs" >Prénom</div>
                <div class="contenu" ><?= h($projet->prenom) ?></div>
                <div class="champs" >Mail</div>
                <div class="contenu" ><?= h($projet->mail) ?></div>
                <div class="champs" >Téléphone</div>
                <div class="contenu" ><?= h($projet->telephone) ?></div>
                <div class="champs" >Adresse</div>
                <div class="contenu" ><?= h($projet->adresse) ?></div>
                <div class="champs" >Code postal</div>
                <div class="contenu" ><?= h($projet->code_postal) ?></div>
                <div class="champs" >Ville</div>
                <div class="contenu" ><?= h($projet->ville) ?></div>
                <div class="champs" >Description</div>
            </div>
            <div class="bas_droite">
                <div class="contenu" ><?= h($projet->description) ?></div>
            </div>
        </div>

        <div class="boutons">
            <a><div class="btn">
                 <?= $this->Form->postLink(__('Supprimer'), ['action' => 'deleteProjet', $projet->idProjet], ['confirm' => __('Etes-vous sur de vouloir supprimer cette demande de devis ?')]) ?>
            </div><a>
            <div class="btn">
                 <a href="/qr/qr-code-projet/<?= h($projet->idProjet) ?>">Exporter données</a>
            </div>
        </div>

</section>

<?php endforeach; ?>
