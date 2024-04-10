<div class="title">Include Vs Require</div>

<?php
print('<p class="title">
    Principais diferenças 
    <br>
    <b>include()</b> 
    // Tenta incluir porém 
    não necessita de forma crucial do arquivo para funcionar, 
    continuando o fluxo do código normalmente caso o arquivo
    não seja encontrado.
    <br>
    <b>require()</b> 
    // Requer o arquivo para continuar execução,
    se o mesmo não for encontrado ou não acessar, o código irá
    quebrar.
</p>');
print('<p class="title">
    Exibir Erros:
    <br>
    <b>ini_set("display_errors", 1);</b> 
    // Exibe os avisos e erros gerados pelo PHP. 
  
</p>');


ini_set('display_errors', 1);

echo '<b>// Usando Include com arquivo inexistente.</b> <br>';
include('arquivo_inexistente.php <br>');

echo '<hr>';

echo '<b>// Usando require com arquivo inexistente.</b> <br>';
require('arquivo_inexistente.php');

echo 'Não achou mesmo.';