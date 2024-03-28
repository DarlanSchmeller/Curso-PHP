<div class="title">While & Do While</div>

<?php
print('<p class="title">
<b>while ($contador <= VALOR_LIMITE) { <br
||||| echo "while $contador"; <br>
||||| $contador++; <br>
}</b> <br>
<b>
<br>
do { <br>
    echo "while $contador "; <br>
    $contador++; <br>
} while ($contador <= VALOR_LIMITE); <br>
</b>
<br>

// Enquanto a condição lógica for falsa, execute o 
bloco de código.
</p>');

const VALOR_LIMITE = 5;
$contador = 1;

while ($contador <= VALOR_LIMITE) {
    echo "while $contador <br>";
    $contador++;
}

echo '<hr>';
$contador = 1;

do {
    echo "while $contador <br>";
    $contador++;
} while ($contador <= VALOR_LIMITE);

echo "<hr>";

$valornorm = 1;
while (true) { // Loop Infinito até usar Break.
    echo $valornorm . ' ';
    if ($valornorm >= 10) {
        break;
    } else {
        $valornorm++;
        continue;
    }
}