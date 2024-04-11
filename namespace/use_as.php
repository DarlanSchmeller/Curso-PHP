<?php namespace Outro\Nome; ?>
<div class="title">Use/As</div>

<?php
echo '<p class="title">
<b>use</b> Nome\Bem\Grande; 
<br> 
/ / "Use" é usado para importar elementos de um namespace para o escopo atual
 do seu código. Isso permite que você use esses elementos sem precisar
  especificar o namespace completo toda vez que os referenciar.
</p>';

echo '<p class="title">
use Nome\Bem\Grande <b>as</b> ctx; 
<br> 
/ / "As" é usado para fornecer um alias (apelido) para um elemento importado. Isso
 é útil quando você deseja evitar conflitos de nome ou quando deseja simplificar
  o uso de um nome longo.
</p>';

echo 'Namespace deste Arquivo: "' . __NAMESPACE__ . '"<br>';
require_once('use_as_arquivo.php');

function soma($a, $b) {
    return $a . $b; // Está errado, erro proposital.
}

class Classe {
    public $var;

    public function func() {
            echo __NAMESPACE__ 
            . ' -> ' .
            __CLASS__ 
            . ' -> ' .
            __METHOD__ 
            . '<br>';
    }
}

// echo Nome\Bem\Grande\CONSTANTE . '<br>'; Não será impresso, PHP entende que é nome/nome/bem..
echo \Nome\Bem\Grande\CONSTANTE . '<br>'; // Definição de caminho absoluto, PHP sabe o local exato.

use const Nome\Bem\Grande\CONSTANTE; // Use const: Diz pro Php que vamos usar uma constante nesse caminho X.
echo CONSTANTE . '<br>';

echo '<hr>';

use Nome\Bem\Grande as ctx; // Cria um apelido para namespace, agora podemos chamar pelo nome 'ctx'.

echo soma(1,2) . '<br>'; // Puxa o namespace deste arquivo por isso retorna errado.
echo ctx\soma(1,2) . '<br>'; // Puxa o namespace referenciado pelo apelido 'ctx', funcionando.

use function Nome\Bem\Grande\soma as somaReal; // Diz pro Php que queremos usar esta função com outro nome,
// resolvendo erros de declaração de função dupla/mesmo nome;

echo somaReal(4,3) . '<br>';
echo '<hr>';

$a = new Classe();
$a->func();

echo '<hr>';

$b = new \Nome\Bem\Grande\Classe(); // Podemos criar de outro namespace dizendo o caminho absoluto.
$b->func();

echo '<hr>';

$c = new ctx\Classe(); // Podemos criar usando alias/apelido também.
$c->func();


echo '<hr>';

use \Nome\Bem\Grande\Classe as D;

$d = new D(); // Podemos criar usando alias/apelido também.
$d->func();