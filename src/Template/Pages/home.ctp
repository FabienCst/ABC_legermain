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
    	</div>
    	<ul>
    		<li><a href="#">Accueil</a></li>
    		<?php foreach($prestations as $prestation):?>
    		    <li><a href="#"><?= $prestation->titre ?></a></li>
    		<?php endforeach; ?>
    	</ul>
    </nav>
    <section class="sec1"></section>
    <section class="content">
        <h1>Novo denique perniciosoque</h1>
        <p>
        Novo denique perniciosoque exemplo idem Gallus ausus est inire flagitium grave, quod Romae cum ultimo dedecore
        temptasse aliquando dicitur Gallienus, et adhibitis paucis clam ferro succinctis vesperi per tabernas palabatur
        et conpita quaeritando Graeco sermone, cuius erat inpendio gnarus, quid de Caesare quisque sentiret. et haec
        confidenter agebat in urbe ubi pernoctantium luminum claritudo dierum solet imitari fulgorem. postremo agnitus
        saepe iamque, si prodisset, conspicuum se fore contemplans, non nisi luce palam egrediens ad agenda quae putabat
        seria cernebatur. et haec quidem medullitus multis gementibus agebantur.
        </p>
    </section>
    <li><?= $this->Html->link(__('New Prestation'), ['controller' => 'Prestations' , 'action' => 'add']) ?></li>
</body>
</html>