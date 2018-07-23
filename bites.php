<h4>Jo&atilde;ozinho</h4>
<p class="lead">Criar um c&oacute;digo/p&aacute;gina que mostre as frases "Jo&atilde;ozinho mordeu o seu dedo!" ou "Jo&atilde;ozinho N&Atilde;O mordeu o seu dedo!".</p>
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
