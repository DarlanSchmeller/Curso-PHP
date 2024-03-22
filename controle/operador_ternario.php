<div class="title">Operador Ternário</div>

<?php
print('<p class="title">
<b>$idade >= 18 ? "Maior de Idade" : "Menor de Idade"</b>
<br>
// A variável $idade está passando por um teste lógico.
 O sinal de interrogação | ? | indica o valor retornado se for verdadeiro, e
o sinal de dois pontos | : | indica qual valor será retornado se for falso.
<br>
O valor retornado será armazenado dentro da variável indicada antes do ternário.
<br>
</p>');
$idade = 70;
$status;

// Solução com If/Else
if ($idade > 18) {
    $status = 'Maior de Idade.';
} else {
    $status = 'Menor de Idade';
}

print("<p class='title'>
    Idade: $idade 
    <br>
    $status
</p>");

// Solução com o Operador Ternário.
$idade = 10;
$status = $idade >= 18 ? 'Maior de Idade.' : 'Menor de Idade'; 
// Valor de Retorno do ternário e salvo na variável $status.
echo $status;