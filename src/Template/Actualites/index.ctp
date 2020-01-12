<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Actualite[]|\Cake\Collection\CollectionInterface $actualites
 */
?>
$this->layout = 'admin';
<?= $this->Html->css('admin_realisation.css') ?>

<div class="ajout">
    <a href="/actualites/add"><img width="170" height="170" src="img/plus2.svg" ><a>
</div>

<?php foreach ($actualites as $actualite): ?>

<section class="content">

        <div class="gauche">
            <img width="350" height="200" src="/img/actualites/principale/<?php echo h($actualite->image); ?>" >
        </div>

        <div class="droite">
            <div class="haut_droite">
                <div class="champs">Date</div>
                <div class="contenu"><?= h($actualite->date); ?></div>
                <div class="champs">Titre</div>
                <div class="contenu"><?= h($actualite->titre); ?></div>
                <div class="champs">Description</div>
            </div>
            <div class="bas_droite">
                <div class="contenu"><?= h($actualite->description); ?></div>
            </div>
        </div>

        <div class="boutons">
            <a><div class="btn">
                <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $actualite->idActualite], ['confirm' => __('Etes-vous sur de vouloir supprimer cette actualité ?')]) ?>
            </div></a>
            <a><div class="btn">
                <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $actualite->idActualite]) ?>
            </div></a>
        </div>

</section>
<?php endforeach; ?>