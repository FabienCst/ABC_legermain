<?php

$this->layout = false;
$cakeDescription = 'ABC Legermain | Accueil';

?>
<!DOCTYPE html>
<html>
<?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>
        <?= $cakeDescription ?>
    </title>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript">
        $(window).on('scroll',function(){
            if ($(window).scrollTop()){
                $('nav').addClass('black');
            }
            else
            {
                $('nav').removeClass('black');
            }
        })
        $(document).ready(function(){
        	$('.menu img').click(function(){
        		$('nav ul').toggleClass('active')
        	})
        })

    </script>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('home.css') ?>

<body>
    <div class="responsive-bar">
        <div class="logo">
        	<?= $this->Html->image('abc-logo.png') ?>
        </div>
        <div class="menu">
            <?= $this->Html->image('menu-logo.svg') ?>
        </div>
    </div>
    <nav>
    	<div class="logo">
    		<?= $this->Html->image('abc-logo.png') ?>
    	<ul>
    		<li><a href="#">Accueil</a></li>
    		<li>
                <svg class="separation1" viewBox="0 0 3 17.528">
                    <path fill="rgba(0,0,0,0)" stroke="rgba(255,255,255,1)" stroke-width="3px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="separation1" d="M 0 0 L 0 17.527587890625">
                    </path>
                </svg>
            </li>
    		<?php foreach($prestations as $prestation):?>
    		<li><?= $this->Html->link(__($prestation->titre), ['controller' => 'GalerieRealisations' , 'action' => 'index', $prestation->idPrestation]) ?></li>
    		<?php endforeach; ?>
    		<li>
                <svg class="separation2" viewBox="0 0 3 17.528">
                    <path fill="rgba(0,0,0,0)" stroke="rgba(255,255,255,1)" stroke-width="3px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="separation2" d="M 0 0 L 0 17.527587890625">
                    </path>
                </svg>
            </li>
    		<li><?= $this->Html->link(__('Demander un devis'), ['controller' => 'Devis' , 'action' => 'index']) ?></li>
    	</ul>
    	</div>
    </nav>

    <section class="sec1"></section>
    <section class="content">
        <div class ="presentation-blocs">
            <div class="presentation-blocs1&3">
                <hr width="70%" color="white" size="6" align="left">
                <h1>"MODERNE"</h1>
                <p1>La société Legermain, jeune entreprise alliant créativité et dynamisme, vous propose de mettre son savoir-faire.
                </p1>
            </div>
            <hr width="25%" color="white" size="6" align="right">
            <div class="presentation-blocs2&4">
                <h1>"PROFESSIONNEL"</h1>
                <p1> Pour  vos travaux de charpente, couverture, escaliers et autres ouvrages spécifiques faites confiance à deux techniciens du bois, André Legermain et Philippe Troquin habitués à intervenir, notamment, sur des bâtiments classés Monuments Historiques.
                </p1>
            </div>
            <div class="presentation-blocs1&3">
                <hr width="70%" color="white" size="6" align="left">
                <h1>"ATTENTIF"</h1>
                <p1>Nous apportons un soin particulier à l’écoute et au conseil, deux points essentiels qui précédent la réalisation de vos ouvrages. Réaliser un travail artisanal, respectueux des traditions, tout en accordant notre prestation à votre budget, telle est notre ambition.
                </p1>
            </div>
                <hr width="25%" color="white" size="6" align="right">
            <div class="presentation-blocs2&4">
                <h1>"PERSONNALISÉ"</h1>
                <p1>Nous serons également enchantés de répondre à votre demande pour tout ouvrage spécifique, personnalisé ou non conventionnel.
                </p1>
            </div>
        </div>

    </section>
    <section class="bande_labels">
        <div class="labels">
            <p>
                <?= $this->Html->image('labels.svg') ?>
            </p>
        </div>
    </section>
    <section class="content">
        <div class="phrase-accroche">
            <p>"Afin d’être plus concret, nous vous invitons à découvrir, en images, les ouvrages déjà réalisés."</p>
            <p></p>
        </div>
    </section>
    <section class="bande-contact">
        <div class="contact">
            <hr width="110%" color="white" size="6" align="left">
            <h1>CONTACT</h1>
            <p> <?= $this->Html->image('map-placeholder.svg', array('width'=>'20px','height'=>'20px')) ?>&nbsp;&nbsp; Zone Artisanale 72140 Rouez en Champagne</p>
            <p> <?= $this->Html->image('enveloppe.svg', array('width'=>'20px','height'=>'20px')) ?> &nbsp;&nbsp;infos@legermain.com</p>
            <p> <?= $this->Html->image('call-answer.svg', array('width'=>'20px','height'=>'20px')) ?> &nbsp;&nbsp;02 47 36 70 34 </p>
            <p2>Suivez-nous &nbsp;&nbsp;&nbsp;&nbsp;<?= $this->Html->image('facebook-circular-logo.svg', array('width'=>'30px','height'=>'30px')) ?> &nbsp;&nbsp;&nbsp;<?= $this->Html->image('instagram.svg', array('width'=>'30px','height'=>'30px')) ?></p2>
        </div>
        <div class="carte">
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1G3PQ94Qeh8OPmpq3pzgw-IR9AE_MBLCq" width="640" height="480"></iframe>
        </div>
    </section>

<div class="btn_devis">
    <a href="/devis/index";">
        <div class="docs">
            <?= $this->Html->image('docs.svg') ?>
        </div>
        <div>
            <p>Demander un devis</p>
        </div>
    <a>
</div>

<section class="footer">
        <div class="icones-footer">
            <p1><a href="https://www.instagram.com" ><?= $this->Html->image('instagram.svg', array('width'=>'60px','height'=>'60px')) ?></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.facebook.com/" ><?= $this->Html->image('facebook-circular-logo.svg', array('width'=>'60px','height'=>'60px')) ?></a></p1>
        </div>
        <div class="recrutement-devis-footer">
            <p><?= $this->Html->link(('Recrutement'), ['controller' => 'Recrutement' , 'action' => 'index']) ?></p>
            <p><?= $this->Html->link(('Demander un devis'), ['controller' => 'Devis' , 'action' => 'index']) ?></p>
        </div>
        <div class="sommaire-presta">
            <p><a href="#" >Actualités</a></p>
            <p><a href="#" >Couvertures</a></p>
            <p><a href="#" >Charpentes</a></p>
            <p><a href="#" >Ouvrages-spécifiques</a></p>
            <p><a href="#" >Contact</a></p>
        </div>
        <div class="logo-abc-footer">
            <p1><?= $this->Html->image('abc-logo.png') ?> </p1>
        </div>
        <div class="copyright-footer">
            <p>© ABC Legermain, All rights reserved</p>
        </div>
    </section>
</body>
</html>
