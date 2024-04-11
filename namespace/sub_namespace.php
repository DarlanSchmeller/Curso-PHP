<?php namespace App; ?>
<div class='title'>Sub-Namespaces</div>

<?php
echo '<p class="title">
<b>namespace</b> App\<b>Principal</b>; 
<br>
/ / Os sub-namespaces são namespaces dentro de outros namespaces. 
Eles são usados para organizar ainda mais o código, criando uma 
hierarquia de namespaces que reflete a estrutura lógica do seu 
projeto.
</p>';

echo '<p class= "title">Nome do __NAMESPACE__:  "' . __NAMESPACE__ . '"<br> ';
const CONSTANTE = 123;
echo '<br>'; 

namespace App\Principal; // Basicamente dizemos que nosso namespace 'Principal' está dentro de 'App'.
echo 'Nome do __NAMESPACE__:  "' . __NAMESPACE__ . '"<br>';
const CONSTANTE = 234;
echo '<br>';

namespace App\Principal\Especifico;
echo 'Nome do __NAMESPACE__:  "' . __NAMESPACE__ . '"<br> </p>';
const CONSTANTE = 3566;

echo '<p class= "title"> Imprindo as constantes para verificar hierarquia dos Namespaces.';
echo '<br>';

echo CONSTANTE . ' / / Imprime o último declarado pois não indicamos o namespace e logo puxa o mais "recente"';
echo '<br>';
echo \App\Principal\Especifico\CONSTANTE . ' / / Acesso por caminho definido.';