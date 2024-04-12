<div class="title">Error Handler</div>

<?php
ini_set('display_errors', 1); // Gerenciador de Erros, podemos filtrar oque é reportado ou não.
echo 4 / 0 . '<br>'; // Gera um aviso, porém não é um erro fatal.

echo '<hr>';

error_reporting((E_ERROR)); // Diz pro gerenciador de erros reportar somente erros, e não avisos.
echo 4 / 0 . '<br>';


echo '<hr>';

error_reporting(E_ALL); // Diz ao gerenciador reportar tudo.
// error_reporting(~E_ALL); // Diz ao gerenciador reportar nada.
echo 4 / 0 . '<br>';

echo '<hr>';

// include('arquivoinexistente.php');

function filtrarMensagem($errno, $errtring) { // Declara filtro pro gerenciador
    $text = 'include';
    // $text = 'by zero';
    return !!strpos(" $errtring", $text);
}

set_error_handler('filtrarMensagem', E_WARNING); // Aplica filtro pro gerenciador.

echo '<hr>AAA';
echo 4/0 . '<br>';
include('arquivoinexistente.php');