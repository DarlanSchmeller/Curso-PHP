<div class="title">Interpolação</div>

<?php

print('<p class="title">
<b>Aspas em strings:</b> Aspas simples não conseguem mudar o valor
de uma variável dentro de uma string, já as aspas duplas conseguem.
<br>
Isso se chama <b>Interpolação</b>.
</p>');

// Exemplo abaixo, as " exibem a variável.
print('<p class="title">
Experimentação abaixo.
</p>');

$numero = 10;
echo 'Aspas Simples// O valor dessa variável é: > $numero';
echo "<br>Aspas Duplas// O valor dessa variável é: > $numero";
echo "<br>A sua nota é: $numero <br> <br>";

$objeto = 'caneta';
echo "Eu tenho 5 $objeto. <br>";
echo "Eu tenho 5 {$objeto}s. (É possível usar as chaves { } para isolar 
a variável do resto da String) <br>";

echo "Eu tinha 5 {$objeto}s mas perdi 3 {$objeto}s. <br>";