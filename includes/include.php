<div class="title">Include</div>

<?php
print('<p class="title">
    Include("");
    <br>
    // É o comando usado para incluir o conteúdo de um arquivo 
    em outro arquivo PHP, deixando disponível todas funções, variáveis e 
    propriedades do mesmo.
</p>');
echo 'Executei essa linha do arquivo include.php <br>';
include('include_arquivo.php');
// include('include_arquivo.php'); Ao carregar o arquivo duas vezes, o código quebra pois
// não podemos definir a mesma função duas vezes dentro do mesmo escopo.
echo soma(1,2);
echo '<br>';
echo "O conteúdo da variável é: '{$variavel}'.";

if (!function_exists()) { // Este bloco verifica se a função existe, se não, ele declara ela.
    function soma($a,$b) {
        return $a + $b;
    }
}