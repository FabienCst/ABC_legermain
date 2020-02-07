<?php
require "QRCode.class.php";
?>
<?= $this->Html->css('qr.css') ?>

<h1>Carte de visite</h1>

<?php
    try {
                $oQRC = new QRCode; // Create vCard Object
                $oQRC->name($postulantData->nom . " " . $postulantData->prenom)// Add Full Name
                    ->email($postulantData->mail)// Add Email Address
                    ->workPhone($postulantData->telephone)
                    ->finish(); // End vCard

                echo '<p><img src="' . $oQRC->get(300) . '" alt="QR Code" /></p>'; // Generate and display the QR Code
                //$oQRC->display(); // Display
                $this->set("oQRC",$oQRC);

            } catch (Exception $oExcept) {
                echo '<p><b>Exception launched!</b><br /><br />' .
                'Message: ' . $oExcept->getMessage() . '<br />' .
                'File: ' . $oExcept->getFile() . '<br />' .
                'Line: ' . $oExcept->getLine() . '<br />' .
                'Trace: <p/><pre>' . $oExcept->getTraceAsString() . '</pre>';
            }
?>


