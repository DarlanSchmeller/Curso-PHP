<div class="title">Desafio Include</div>

<?php
require_once('classe_pessoa.php');
echo '<br>';

echo '<hr>';
$joao = new Pessoa(53.45);
echo 'O peso de João é: '. $joao->peso . 'Kg. <br>';
unset($joao);