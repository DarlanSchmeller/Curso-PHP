<div class="title">Desafio Intdiv</div>

<?php
require_once('desafio_intdiv_teste.php');

use function \origem\intdivisao;

// Achei um pouco confuso, mas aparentemente, criamos uma classe que extende as excessões
// do PHP e podemos utilizar ela para pegar erros de qualquer forma.
// Então criamos uma função que verifica se um número está sendo dividido por zero
// ou se o resultado é inteiro, importamos ela com o require para usar nesse arquivo,
// e se as verificações cairem como verdadeiro o resultado é pego como um erro pelo catch,
// E toda vez que o catch pega um erro o código dentro do bloco do catch é executado.

try {
    echo intdivisao(8,3) . '<br>';
} catch (\Origem\NaoInteiroException $a) { // TRY PARA VERIFICAR SOMENTE SE É INTEIRO
    echo 'Resultado não é um número inteiro. <br>'; 
}

try {
    echo intdivisao(8,0) . '<br>';
} catch (DivisionByZeroError $a) {  // TRY SOMENTE PARA DIVISÃO POR ZERO
    echo 'Tentou dividir por zero. <br>'; 
}