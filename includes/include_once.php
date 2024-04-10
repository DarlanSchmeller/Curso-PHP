<div class="title">Include Once</div>

<?php
print('<p class="title">
    <b>include_once("");</b>
    // É uma função que permite incluir e avaliar um arquivo específico durante a execução 
    de um script, garantindo que o arquivo seja incluído apenas uma vez. 
    <br>
    <br>
    <b>require_once("");</b>
    // Possui a mesma função do include_once(); porém agora aplicado para a alternativa
    require();.
</p>');


ini_set('display_errors', 1);

include('include_once_arquivo.php');
// require('include_once_arquivo.php'); // Novamente não podemos incluir pois iria redeclarar
// A função, quebrando o código.

echo 'Antes: ', " '{$variavel}' <br> ";
$variavel = "Variável Alterada";
echo 'Depois: ', " '{$variavel}' ";

echo '<hr>';
include_once('include_once_arquivo.php'); // Só carrega o arquivo uma vez, se o arquivo
echo $variavel; // Já tiver sido carregado o mesmo não irá repetir o carregamento.