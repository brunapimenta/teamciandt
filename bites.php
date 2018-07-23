<h4>Jo&atilde;ozinho</h4>
<p class="lead">Criar uma p&aacute;gina que mostre 50% "Jo&atilde;ozinho mordeu o seu dedo!" e 50% "Jo&atilde;ozinho N&Atilde;O mordeu o seu dedo!".</p>
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
