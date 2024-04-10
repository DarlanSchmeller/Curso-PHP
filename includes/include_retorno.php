<div class="title">Include com Retorno</div>

<?php
$valorRetorno = require('return_usado.php');
echo "$valorRetorno";
echo "$variavelRetornada";

echo __DIR__ . '<br>';

$valorRetorno2 = require(__DIR__ . '/return_nao_usado.php');
var_dump($valorRetorno2);
echo '<br>';
echo $valorRetorno2 . '  |- Significa que o arquivo foi carregado corretamente. <br>';
echo $variavelDeclarada . '<br>';