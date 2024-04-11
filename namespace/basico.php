<?php namespace contexto; ?>
<div class="title">Exemplo Básico</div>

<?php
echo '<p class="title">
<b>namespace</b> contexto;
<br>
/ / Namespace é uma forma de organizar e agrupar classes, interfaces, funções e constantes
 em um conjunto lógico e hierárquico. Eles ajudam a <b>evitar conflitos</b> de nome entre 
 diferentes partes do código, permitindo que você reutilize nomes de classe ou função 
 sem preocupações com colisões.
 <br>
 <br>
 / / Quando você define um namespace em PHP, você está criando um contexto onde os nomes de 
 classe, função, interface e constante são únicos dentro desse namespace. Isso significa 
 que você pode ter uma classe com o mesmo nome em diferentes namespaces sem conflitos.
</p>';

echo __NAMESPACE__ . '<br>';
const CONSTANTE1 = 123;
define('CONSTANTE2', 234); // Cria no namespace padrão do PHP, não no desejado.
define('contexto\CONSTANTE2', 1234); // definir constante com define atraves do namespace.
define(__NAMESPACE__ . '\CONSTANTE3', 345);
define('outro_contexto\CONSTANTE4', 567); // Podemos declarar constantes mesmo que o namespace ainda não exista.

echo CONSTANTE1 . '<br>'; // Caminho Relativo!!!
echo CONSTANTE2 . '<br>'; // Usando '\CONSTANTE2' dizemos ao PHP acessar o namespace padrão.
//echo contexto\CONSTANTE3 . '<br>'; //contexto\CONSTANTE3 não funciona, PHP entende que é contexto\contexto\CONSTANTE3
echo \contexto\CONSTANTE3 . '<br>'; // Define o caminho absoluto do namespace.
echo \outro_contexto\CONSTANTE4 . '<br>';

function soma ($a, $b) {
    return ($a + $b);
}

echo \contexto\soma(1, 2) . '<br>';
echo soma(1, 2) . '<br>';

echo '<hr>';
function strpos($str, $text) {
    echo "Buscando o texto '{$text}' em '{$str}' <br>";
    return 1;
}

echo strpos('Texto Genérico para busca.', 'busca') . '<br>';
echo \strpos('Texto Genérico para busca.', 'busca') . '<br>'; // 21 significa que busca está na posição 21 da string.
// ao colocar \strpos quer dizer que vamos usar o namespace raiz do PHP.