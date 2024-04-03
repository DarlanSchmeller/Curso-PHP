<div class="title">Argumento Padrão</div>

<?php
print('<p class="title">
function saudacao(<b>$nome = "Senhor(a)"</b>, $sobrenome = "Cliente") 
<br>
<br>
// Esta função com o sinal de igual nos parâmetros, define um <b>valor padrão</b>, que será
utilizado caso o parâmetro não seja fornecido, quando não é declarado um valor padrão, o
parâmetro é <b>obrigatório</b>, e sua ausência quebra o código.
</p>');

function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente') { // O igual, indica o valor padrão, 
// na ausencia de parâmetro será utilizado o valor padrão
    echo "Bem-vindo, $nome $sobrenome!<br>";
}

saudacao();
saudacao('João');
saudacao('João', 'Carlos');
saudacao(null);
saudacao(null, null);
echo '<br>';

function anotarPedido($comida, $bebida = 'Água') {
    echo '<hr>';
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
    echo '<hr>';
}

echo anotarPedido('Hamburguer');
echo anotarPedido('Pizza', 'Refrigerante');

function anotarPedido2($bebida = 'Água', $comida) {
    echo '<hr>';
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
    echo '<hr>';
} // Quando não temos um valor padrão, o Parâmetro é obrigatório! e sua ausência
// quebra a funçao.

echo anotarPedido2('Hamburguer');
echo anotarPedido2('Pizza', 'Refrigerante');