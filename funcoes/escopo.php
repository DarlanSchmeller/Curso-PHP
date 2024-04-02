<div class="title">Função & Escopo</div>

<?php
print('<p class="title">
    <b>Funções: </b> 
    // São blocos de código reutilizáveis em um programa.
    <br>
    <b>Escopo: </b> 
    // O termo escopo refere-se à região de um programa 
    onde uma determinada variável é acessível. 
</p>');

// ----- Código Abaixo -----

print('<p class="title">
    <b>global $variavel; </b> 
    // Indica pro PHP que queremos acessar uma variável do escopo global, se não usar
    este comando, o PHP irá criar uma variável do escopo local para a função.
    <br>
</p>');

function imprimirmensagens() {
    echo "Olá ";
    echo "Até a próxima!<br>";
}

$variavel = 1;
function trocaValor() {
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
};
echo '<p class="title">';
echo "Antes: $variavel <br>";
trocaValor();
echo "Depois: $variavel <br>";
echo '<br>';
echo "// Isto acontece pois, embora a variável na função tenha o mesmo nome, 
ela só existe no <b>escopo da função</b>, no escopo global a variável não tem o 
mesmo endereço de memóriae mantém o mesmo valor anterior.
<br>
Porém é possível acessar a variável do escopo da função se você retornar ela.";
echo '</p>';

function trocavalordeverdade() {
    global $variavel;
    $variavel = 3;
    echo "Durante a função: $variavel <br>";
}
echo '<p class="title">';
echo "Antes: $variavel <br>";
trocavalordeverdade();
echo "Depois: $variavel <br>";
echo '<br> Desta vez a variável mudou permanentemente pois ela foi alterada no <b>escopo global</b>,
ou seja, as mudanças dela não existem somente no escopo da função.';
echo '</p>';


imprimirmensagens();
imprimirmensagens();