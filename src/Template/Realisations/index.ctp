<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Realisation[]|\Cake\Collection\CollectionInterface $realisations
 */
?>
$this->layout = 'admin';
<?= $this->Html->css('admin_realisation.css') ?>

<?php foreach ($realisations as $realisation): ?>

<section class="content">

        <div class="gauche">
            <img width="350" height="200" src="/img/realisations/principale/<?php echo h($realisation->image); ?>" >
        </div>

        <div class="droite">
            <div class="haut_droite">
                <div class="champs">Date</div>
                <div class="contenu"><?= h($realisation->date); ?></div>
                <div class="champs">Titre</div>
                <div class="contenu"><?= h($realisation->titre); ?></div>
                <div class="champs">Description</div>
            </div>
            <div class="bas_droite">
                <div class="contenu"><?= h($realisation->description); ?></div>
            </div>
        </div>

        <div class="boutons">
            <a><div class="btn">
                <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $realisation->idRealisation], ['confirm' => __('Etes-vous sur de vouloir supprimer cette réalisation ?')]) ?>
            </div></a>
            <a><div class="btn">
                <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $realisation->idRealisation]) ?>
            </div></a>
        </div>

</section>
<?php endforeach; ?>
