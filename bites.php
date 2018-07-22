<h4>John's Bites</h4>
<?php
    include_once('solutions/Bites.php');

    $bites = [];
    for ($i = 0; $i < 6; $i++) {
        if (foiMordido()) {
             $bites[] = 'Joãozinho mordeu o seu dedo!';
        } else {
            $bites[] = 'Joãozinho <strong>NÃO</strong> mordeu o seu dedo!';
        }
    }

    echo implode('<br>', $bites);
?>
