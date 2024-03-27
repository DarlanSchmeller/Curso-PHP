<div class="title">Operações com Array</div>

<?php
print('<p class="title">
    <b>unset($dadoscompletos[nome])</b> <br>
    // Remove um índice do Array.
</p>');

print('<p class="title">
    <b>unset($dadoscompletos)</b> <br>
    // Remove o Array inteiro.
</p>');

print('<p class="title">
    <b>array_merge($pares, $impares);</b> 
    <br>
    // Forma correta de unir o conteúdo de Arrays com índices iguais.
</p>');

print('<p class="title">
    É possível <b>somar</b> os conteúdos
    de arrays con índices diferentes da seguinte forma: 
        <br> <br>
    $dados1 = array( 
        <br>
        "nome" => "Jose", 
        <br>
        "idade" => 28, 
        <br>
    ); 
    <br>
    
    $dados2 = array( <br>
        "naturalidade" => "Fortaleza" <br>
    ); 
    <br> <br>
    <b>$dadoscompletos = $dados1 + $dados2;</b>
    
</p>');

print('<p class="title">
    <b>is_array($dadoscompletos)
    </b>
    // Verifica se é um array. 
    <br>
    (1 = Sim / 0 = Não) <br> 
    <br>
    <b>count($dadoscompletos);
    </b> 
    <br>
    // Exibe a quantidade de elementos dentro de um Array. 
    <br> <br>
    <b> $indice = array_rand($dadoscompletos); </b> 
    <br> 
    // Escolhe um elemento aleatório do Array.
</p>');

print('<p class="title">
    <b>sort($decimais);</b>
    <br>
    // Organiza os valores dentro de um Array.
</p>');

// Código Abaixo.
 
$dados1 = array(
    "nome" => "Jose",
    "idade" => 28,
);

$dados2 = array(
    "naturalidade" => "Fortaleza"
);

$dados2["Endereço"] = "Rua A";

$dadoscompletos = $dados1 + $dados2; // É possível somar os conteúdos de Arrays.
print_r($dadoscompletos);
echo '<br>' . is_array($dadoscompletos);
echo '<br>' . count($dadoscompletos);

echo '<br>';
$indice = array_rand($dadoscompletos); // Escolhe um elemento aleatório do Array.
echo "$indice = $dadoscompletos[$indice]";

echo '<br>';
echo "{$dadoscompletos['idade']}"; // Com interpolação precisa de chaves.
echo '<br>';
unset($dadoscompletos["nome"]);
echo '<br>';
print_r($dadoscompletos);
 
$impares = array(
    1, 3, 5, 7 ,9
);
$pares = array(
    0, 2, 4, 6, 8
);

$decimais = $pares + $impares;
echo '<br>';
print_r($decimais); // Não junta os dois pois ambos compartilham os mesmos
// índices (0, 1, 2, 3, 4..)

$decimais = array_merge($pares, $impares); // Forma correta de unir os Arrays
print_r($decimais);
echo '<br>';
sort($decimais);
echo '<br>';
print_r($decimais);