<div class="title">Operadores Relacionais</div>

<?php

print('<p class="title">
    | == 
    | > 
    | >=
    | <=
    | != 
    | <=>
    | <> |
     <br> 
    // São sinais
    de comparação entre dois
    valores ou expressões. 
    <br>
</p>'
.
'<p class="title">
    ==  // Verifica Igualdade. <br>
    === // Verifica Igualdade Estrita, compara o valor e o tipo.
        pode ser usado em diversos conectivos como | != | que se torna | !== |.
</p>');





echo '<p class="title"> 
    Relacionais no If/Else <br>
';
$idade = 25;
echo "Idade: $idade" . ' anos. <br>';
if ($idade < 18) {
    echo 'Menor de idade.';
    echo '</p>';
} elseif ($idade < 65) {
    echo 'Adulto.';
} elseif ($idade >65) {
    echo 'Idoso';
}


echo 
'<p class="title">
    Operador Spaceship | <=> |
     <br>
    Retorno | Comando
     <br>
    ';
    
    var_dump(500 <=> 3);
    echo'| 500 <=> 3 
    <br>';
    var_dump(50 <=> 50);
    echo '| 50 <=> 50 
    <br>';
    var_dump(5 <=> 50) ;
    echo '| 5 <=> 50 
    <br>';

echo 
'Retorna 0 se os valores de ambos os lados são iguais.<br>
Retorna 1 se o valor à esquerda é maior.<br>
Retorna -1 se o valor à direita é maior.<br>
</p>';



echo '<p class="title"> 
    Experimentação Abaixo:
</p>';


echo 'Comparação Estrita | === | abaixo.<br>';
var_dump( 111 == '111'); // Verifica igualdade somente dos valores
var_dump( 111 === '111'); // Verifica igualdade dos valores e do tipo
var_dump( 111 != '111');  // Diferença normal
var_dump( 111 !== '111');  // Diferença Estrita

echo '<br><br>';
echo 'Comparação Normal | == | abaixo. <br>';
var_dump( 1 == 1);
var_dump( 1 > 3);
var_dump( 1 < 4);
var_dump( 1 <= 1);
var_dump( 1 >= 1);
var_dump( 1 <> 4);
var_dump( 1 != 4);

var_dump(!!5); // Permite saber a conversão de algo para valor lógico (se é verd ou falso)

?>

<style>
    p {
        margin: 0px;
    }
</style>