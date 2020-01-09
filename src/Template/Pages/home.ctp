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
    <?= $this->Html->css('simple-slideshow-styles.css') ?>

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

    <section class="sec1">

    <div class="bss-slides num1" tabindex="1" autofocus="autofocus">
                <figure>
    		      <img src="/img/fond-accueil.png" width="100%" /><figcaption>"Medium" by <a href="https://www.flickr.com/photos/thomashawk/14586158819/">Thomas Hawk</a>.</figcaption>
                </figure>
                <figure>
    		      <img src="/img/fond-accueil.png" width="100%" /><figcaption>"Colorado" by <a href="https://www.flickr.com/photos/stuckincustoms/88370744">Trey Ratcliff</a>.</figcaption>
                </figure>
                <figure>
    		      <img src="/img/fond-accueil.png" width="100%" /><figcaption>"Early Morning at the Monte Vista Wildlife Refuge, Colorado" by <a href="https://www.flickr.com/photos/davesoldano/8572429635">Dave Soldano</a>.</figcaption>
                </figure>
                <figure>
    		      <img src="/img/fond-accueil.png" width="100%" /><figcaption>"Sunrise in Eastern Colorado" by <a href="https://www.flickr.com/photos/35528040@N04/6673031153">Pam Morris</a>.</figcaption>
                </figure>
                <figure>
    		      <img src="/img/fond-accueil.png" width="100%" /><figcaption>"colorado colors" by <a href="https://www.flickr.com/photos/cptspock/2857543585">Jasen Miller</a>.</figcaption>
                </figure>
            </div> <!-- // bss-slides -->
    <script src="demo/js/hammer.min.js"></script><!-- for swipe support on touch interfaces -->
    <script src="js/better-simple-slideshow.min.js"></script>
    <script>
    var opts = {
        auto : {
            speed : 3500,
            pauseOnHover : true
        },
        fullScreen : false,
        swipe : true
    };
    makeBSS('.num1', opts);

    var opts2 = {
        auto : false,
        fullScreen : true,
        swipe : true
    };
    makeBSS('.num2', opts2);
    </script>

    </section>
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

</body>
</html>
