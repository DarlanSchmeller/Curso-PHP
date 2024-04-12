<div class="title">Try/Catch</div>

<?php
echo 7 / 0;
echo '<br>';
// echo intdiv(7, 0); // Exemplo de erro não tratado, quebra execução.

try {  // Tenta executar o código no bloco
    echo intdiv(7, 0); // Você passa o código para teste
} catch(Error $e) { // O catch pega erros e armazena na variavel
    echo 'Teve um erro aqui. <br>'; // Você passa o que fazer quando um erro for detectado
}

try {
    throw new Exception('Um erro muito estranho.');
    echo intdiv(7, 0); // Este erro iria quebrar o código, mas foi tratado
} catch(DivisionByZeroError $e) {
    echo 'Divisão por zero.';
} catch(Throwable $e) {
    echo 'Erro encontrado: ' . $e->getmessage() . '<br>';
} finally {
    echo 'Sempre executado! <br>';
}

echo 'Execução continua! <br>';