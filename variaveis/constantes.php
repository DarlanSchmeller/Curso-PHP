<div class="title">Constantes</div>

<?php
print('<p class="title">
     <b>const NOVA_TAXA = 2.5;</b> // É uma forma de definir uma constante
     via PHP. <br>
     <b>echo NOVA_TAXA;</b> // Para imprimir o valor de uma constante ou usa-lo
     não é necessário o sinal de "$" assim como variáveis.
</p>');


print('<p class="title">
     <b>define("TAXA_DE_JUROS", 5.9);</b>  Uma forma de definir constantes usando define.
     Constantes não usam o sinal de "$" como variáveis, forma menos utilizada.<br>
</p>');


print('<p class="title">
     <b>define("novissimataxa", $variavelnova);</b>  Uma forma de definir constantes usando define.
     a partir da cópia do valor de uma variável.<br>
</p>');


echo 'Esta constante nativa é a versão atual do PHP: ' . PHP_VERSION;
define('TAXA_DE_JUROS', 5.9); /* Uma forma de definir constantes usando define.
Constantes não usam o sinal de '$' como variáveis, menos utilizada. */
echo "<br>" . TAXA_DE_JUROS; /* Para pegar o valor basta escrever fora de uma
string utilizando o nome definido. */

echo '<br> <br> Linha:' . __LINE__ . '<br>';
echo '<br> Arquivo:' . __FILE__ . '<br>';
echo '<br> Diretório:' . __DIR__ . '<br>';

const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

$variavelnova = 4;
define('novissimataxa', $variavelnova);
echo '<br>' . novissimataxa;

