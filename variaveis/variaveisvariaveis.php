<div class="title">Variáveis Variáveis</div>

<?php 

print(
    '<p class="title">
    Basicamente o sinal de dolár ($), quando colocado próximo de uma variável
    dentro de uma string de aspas duplas, cria outra variável que usa o conteúdo da 
    variável mencionada como nome da nova.
    </p>'
);

$a = 'valorA';
$$a = 'valorAA';

echo "$a {$$a} ${$a} $valorA";

// ${$a} cria outra variável com o nome $a.

$epa = 'opa';
$opa = 'vish';

echo "<br> $epa {$$epa}"; // Epa pega o valor opa pro nome da variável
// então $$epa pega o nome dessa variável que é opa e imprime o conteúdo de opa
// que é 'vish'.

