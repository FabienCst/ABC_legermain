<?php

?>
<?= $this->Html->css('admin_realisation.css') ?>

<h1>Prestations</h1>

<?php foreach ($prestations as $prestation): ?>

<section class="content">

        <div class="gauche">
            <img width="350" height="200" src="/img/prestations/<?php echo h($prestation->image); ?>" >
        </div>

        <div class="droite">
            <div class="haut_droite">
                <div class="champs">Titre</div>
                <div class="contenu"><?= h($prestation->titre); ?></div>
                <div class="champs">Sous-titre</div>
                <div class="contenu"><?= h($prestation->sous_titre); ?></div>
                <div class="champs">Description</div>
            </div>
            <div class="bas_droite">
                <div class="contenu"><?= h($prestation->description); ?></div>
            </div>
        </div>

        <div class="boutons">
            <a><div class="btn">
                <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $prestation->idPrestation], ['confirm' => __('Etes-vous sur de vouloir supprimer cette prestation ?')]) ?>
            </div></a>
            <a><div class="btn">
                <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $prestation->idPrestation]) ?>
            </div></a>
        </div>

</section>
<?php endforeach; ?>