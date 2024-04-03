<div class="title">Argumentos Variáveis</div>

<?php
print('<p class="title">
 function somaCompleta(<b>...$numeros</b>) { 
    <br> 
    <br>
    // Os <b>três pontos</b> nessa função indicam <b>parâmetros variáveis</b>, ou seja
    não queremos definir um valor exato de parâmetros, então o PHP
    permite criar quantos parâmetros forem necessários em um <b>Array</b>
    e usa-los na função.
</p>');

function membros($titular, ...$dependentes) {
    echo '<br>';
    print_r($dependentes);
    echo "<br> Titular: $titular <br>";
    if ($dependentes) {
        foreach ($dependentes as $dep) {
            echo "Dependente: $dep <br>";
        }
    }
}

echo membros('João Ninguém', 'Raul', 'Karen', 'Radahn');

function soma($a, $b) {
    return $a + $b;
}

echo soma(2, 2) . '<br>';

function somaCompleta(...$numeros) { // Parâmetro Variável = '...$variavel'
    $soma = 0; // Basicamente informa ao PHP que podem existir parâmetros infinitos.
    print_r($numeros) . '<br>';
    foreach($numeros as $num) {
        $soma += $num;
    }
    return $soma;
}

// echo '<br>' . somaCompleta(1, 2, 3, 4, 5);

$array = [6, 7, 8];
echo '<br>' . somaCompleta(...$array); // Os 3 pontos indicam para pegar o valor.
// e não o array em si, permitindo usar os valores numa função como parâmetro.
