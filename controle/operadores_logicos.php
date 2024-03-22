<div class="title">Operadores Lógicos</div>

<style>
    p {
        margin: 0px;
    }
</style>

<?php
print(
'<p class="title">
    <b>Negação Lógica:</b> O símbolo de exclamação <b>"!"</b> simboliza a operação de negação
    ou seja, o valor resultante é invertido pelo operador da negação, se um
    resultado é verdadeiro, com este operador ele se torna falso.
</p>');

print(
'<p class="title">
<b>!true:</b> // Retorna falso pois foi executado a negação.
<br>
<b>!!true:</b> // Retorna verdadeiro pois foi executado a negação
duas vezes, ou seja negação da negação.
<br>
<b>!</b> // Ao ser inserio no ínico de algum valor ou elemento,
ele converte o elemento para um valor lógico booleano, ou seja
se uma variável possui um espaço em branco, ele irá converter este valor
para zero.
</p>');

print(
'<p class="title">
<b>|| / "ou"</b> // Precisa de apenas um valor verdadeiro para o retorno final
ser verdadeiro, 
<br>
exemplo: (V/F) => (V)
<br>
</p>');

print(
'<p class="title">
<b>&& / "And"</b> // Precisa dos dois valores verdadeiros, caso contrário sempre
retornará falso.
<br>
exemplo: (V/F) => (F)

<br>
</p>');


// Tabela Verdade AND

echo '<p class="title"><b>Tabela Verdade "AND/&&" (E)</b></p>';

echo '-------------<br>';
echo 'True | True <br>';
var_dump(true and true); // && e and são a mesma coisa
echo '<br>';
echo '-------------<br>';


echo 'True | False <br>';
var_dump(true && false);
echo '<br>';
echo '-------------<br>';


echo 'False | True <br>';
var_dump(false and true);
echo '<br>';
echo '-------------<br>';


echo 'False | False <br>';
var_dump(false && false);
echo '<br>';
echo '-------------<br>';


// Tabela Verdade 'OR' (OU);

echo '<p class="title"><b>Tabela Verdade "OR/||" (OU)</b></p>';

echo '-------------<br>';
echo 'True | True <br>';
var_dump(true or true); // or e || são a mesma coisa
echo '<br>';
echo '-------------<br>';


echo 'True | False <br>';
var_dump(true || false);
echo '<br>';
echo '-------------<br>';


echo 'False | True <br>';
var_dump(false || true);
echo '<br>';
echo '-------------<br>';


echo 'False | False <br>';
var_dump(false or false);
echo '<br>';
echo '-------------<br>';


// Tabela Verdade 'XOR' (OU Exclusivo);

echo '<p class="title"><b>Tabela Verdade "XOR" (OU Exclusivo)</b></p>';

echo '-------------<br>';
echo 'True | True <br>';
var_dump(true xor true); // xor pode ser substituido por != (diferente)
echo '<br>';
echo '-------------<br>';


echo 'True | False <br>';
var_dump(true != false);
echo '<br>';
echo '-------------<br>';


echo 'False | True <br>';
var_dump(false xor true);
echo '<br>';
echo '-------------<br>';


echo 'False | False <br>';
var_dump(false != false);
echo '<br>';
echo '-------------<br>';

// Exemplo

echo '<p class="title"><b>Exemplo</b></>';
$idade = 61;
$sexo = 'm';
echo '<br>';
echo "idade: $idade <br> sexo: $sexo <br>";

if ($idade >= 60 && $sexo == 'F') {
    print('Você pode se aposentar.');
} else if ($idade >= 65 && $sexo == 'M') {
    print('Você pode se aposentar.');
} else {
    print('Você não atingiu os requisitos de aposentadoria ainda.');
}

// Experimentação Abaixo

print(
'<p class="title">
<b>Experimentação Abaixo:</b> 
</p>');

var_dump(true);
var_dump(false);
var_dump(!true); // A exclamação '!' inverte a lógica resultando em falso
var_dump(!true); // A exclamação '!' inverte a lógica resultando em falso
var_dump(true && 3 > 2 && 7 <= 7 && 3 === '3');

