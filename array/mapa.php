<div class="title">Mapa</div>

<?php
$lista = array(
    1, 2, 3.4, "texto"
);
//  0  1   2      3  => Indice 

$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
); // Desta forma alteramos o nome dos índices/chaves 
// e logo alteramos como acessamos este índice.
// Este método de separação se chama Map de Array.

$dados['vinte'] = 'j';
print_r($dados);
echo '<br>' . $dados['idade']; // Forma correta de se acessar chaves.
echo '<br>' . $dados['cor'];
echo '<br>' . $dados['peso'];

echo $dados[0] . '<br>'; // Não imprime nada pois o índice 0 foi alterado
// e logo não existe.
echo '<br>';
var_dump($dados[0]); // Não imprime nada pois o índice 0 foi alterado.