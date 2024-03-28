<div class="title">Desafio Loop For</div>

<!-- Desafio For
    Fazer um Loop For que gere os seguintes outputs:

    #
    ##
    ###
    ####
    #####

    1) Pode usar incremento.

    2) Não pode usar Incremento.
-->

<?php

$indice = '';

for($cont = 1 ; $cont <= 5 ; $cont++) {
    $indice .= '#'; // Resolvido com concatenação de strings.
    echo "$indice <br>";
}

echo '<br>';
$indice = '';

for ($indice = '#'; 
     $indice !== '######'; 
     $indice .= '#') {
        echo $indice ;
        echo '<br>';
}