<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'ABC Legermain';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.menu img').click(function(){
                $('nav ul').toggleClass('active')
            })
        })
    </script>

    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('admin.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
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
                <li><a>Messagerie</a>
                    <ul>
                        <li><?= $this->Html->link(__('Demandes de devis'), ['controller' => 'Messagerie' , 'action' => 'devis']) ?></li>
                        <li><?= $this->Html->link(__('Candidatures'), ['controller' => 'Messagerie' , 'action' => 'candidatures']) ?></li>
                    </ul>
                </li>
                <li><?= $this->Html->link(__('Réalisations'), ['controller' => 'Réalisations' , 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Actualités'), ['controller' => 'Actualités' , 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Prestations'), ['controller' => 'Prestations' , 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Recrutement'), ['controller' => 'Offres' , 'action' => 'index']) ?></li>
                <li>
                    <svg class="separation1" viewBox="0 0 3 17.528">
                        <path fill="rgba(0,0,0,0)" stroke="rgba(255,255,255,1)" stroke-width="3px" stroke-linejoin="miter" stroke-linecap="butt" stroke-miterlimit="4" shape-rendering="auto" id="separation1" d="M 0 0 L 0 17.527587890625">
                        </path>
                    </svg>
                </li>
                <li><?= $this->Html->link(__('Se deconnecter'), ['controller' => 'Administrateurs' , 'action' => 'logout']) ?></li>
            </ul>
        </div>
    </nav>
    <?= $this->fetch('content') ?>
</body>
</html>