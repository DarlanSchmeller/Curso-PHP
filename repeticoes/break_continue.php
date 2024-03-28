<div class="title">Break & Continue</div>

<?php
print('<p class="title">
    <b>Break;</b> 
    // Quebra a lógica linear do código
    fazendo que o bloco quebre e não seja
    mais executado, seguindo adiante
    para a próxima linha/bloco.
    <br>
    <b>Continue;</b>
    // Resume a lógica linear do código
    geralmente usado em verificações
    lógicas, se um número por exemplo for
    ímpar, continue executando o código.
</p>');

$cont1 = 10;
for(;;) {
    echo "$cont1 <br>";
    $cont1++;
    if ($cont1 > 100) {
        break; // Quebra o loop do For completamente 
    }
}

echo "<hr>";
$cont = 10;

for(;;) {
    $cont++;
    if($cont % 2 !== 0) {
        continue;
    }
    echo "$cont <br>";
    if ($cont >= 20) {
        break;
    }
}

echo '<hr>';

foreach(array(1,2,3,4,5,6) as $valor) {
    if ($valor === 5) {
        break;
    }
    if ($valor % 2 === 0) {
        continue;
    }
    echo "$valor" . '<br>';
}

echo "Fim!";