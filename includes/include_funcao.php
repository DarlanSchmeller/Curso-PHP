<div class="title">Include em Função</div>

<?php
echo('<p class="title">
function carregarArquivo() { <br>
| | | include("include_arquivo.php"); <br>
} 
<br>
<br>
  --Ao usar o comando include para carregar um arquivo dentro do bloco
 de uma função temos a seguinte situação:
 <br>
  // O arquivo so será carregado quando a função for chamada/executada,
 ao ser executada todas as funções estarão disponíveis para uso global.
 <br>
  // Porém as variáveis visto que estão sendo carregadas dentro de uma função,
 terão o escopo somente <b>dentro da função</b>, ou seja, as variáveis
 não poderão ser chamadas fora do bloco de código da função pois não foram
 declaradas no escopo global.
</p>');

echo 'Carregando include_funcao';
echo '<br>';


function carregarArquivo() {
    include('include_arquivo.php');
    
}


echo 'Carregando outros elementos do include_funcao <br>';
echo '<hr>';


carregarArquivo(); // Lembrando que o bloco da função so será executado ao chamar a mesma.
echo soma(2,5);
echo "<br> Variável: '{$variavel}'."; // O include foi feito dentro da função
// Logo todas variáveis carregadas tem o escopo somente dentro da função.
// Dentro do escopo global tendo valor nulo.