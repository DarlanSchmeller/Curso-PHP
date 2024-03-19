<div class="title">Básico de Variáveis</div>

<p class="title">
    <b>isset($soma)</b>: Verica se a variável $soma foi declarada ou existe.
    <br><b>unset($soma)</b>: Remove a variável da memória do computador. <br>
    <br>
    $a = 3; <br>
    $b = 16; <br>
    <b>$soma = ($a + $b); </b> Uma variável pode ser declarada usando operações
    aritméticas assim como em Javascript.
</p>

<?php 

$numeroA = 13; // Variável número A recebe 13.
echo $numeroA, '<br>'; // Imprime o valor da variável.
var_dump($numeroA); // Exibe o tipo da variável.

$a = 3; // Armaze na memória do computador no compartimento A o valor 3.
$b = 16;
$soma = ($a + $b);
$variavel = 1;

unset($variavel);
echo '<br>', $soma; // Variáveis são case sensitive, por padrão, evite maiúsculas.

echo '<br>',isset($soma); // Verifica se a variável existe, se retornar um ela
// existe, se retornar em branco, ela não foi encontrada na memória.

echo '<br> O tipo da variável $soma é: ', var_dump($soma);

echo '<br>', var_dump($variavel);

$string = "agora sou uma string"; // PHP não possui tipagem forte, ou seja 
//uma variável não está amarrada a um tipo.
echo '<br> Olhe para mim, ', $string;

// Nomes de Variáveis

$var = 'valida';
$var2 = 'valido';
$VAR3 = 'validado';
$_var_4 = 'valido';
$vÂr42 = 'válido mãs não recomendado'; // Evitar acentos

// $6var = 'invalido'
// $%var7 = 'invalido'
// $var8% = 'invalido'