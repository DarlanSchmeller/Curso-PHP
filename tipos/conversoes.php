<div class="title">Conversões</div>

<p class="title">
    <b>var_dump((float) 3)</b>: Ao definir um tipo, e fornecer um valor o comando 
    var_dump, que geralmente é usado para verificar tipos de variaveis, pode
    também ser utilizado para converter o número 3, que é inteiro, para um número
    real ou seja, pro tipo Float. <br>
    Isso é chamado de Casting, ou Conversão Explicíta.
</p>

<p class="title">
    Alguns tipos de dados em PHP com sua syntax para código:
    <br> '' Int, Str, Float, Boolean '' <br> <br>
    Colocar round antes de algum valor arrendonda pro inteiro
   mais próximo, exemplo: '' round(2.8) ''  retornaria 3. <br> <br>
   Arredondar valores float sem usar var_dump não alteraria o tipo
   da variavel, a mesma mesmo sendo 3, continuaria como float.
</p>

<?php 

echo is_int(PHP_INT_MAX); /* is_int verifica se é inteiro
se for inteiro o valor irá retornar 1 que simboliza
true. */
echo '<br>';
echo is_int(4);
echo is_int(4.45);

/* Int para Float. */
echo '<br>';
var_dump(PHP_INT_MAX + 1); // PHP_INT_MAX = É o valor inteiro máximo suportado
// pelo PHP, ao adicionar um a mais nesse valor o mesmo é convertido para
// Float, pois seu número máximo suportado e maior.
echo '<br>';
echo 'Um inteiro (1) somado com valor float (1.0) retorna
um valor float: Resultado: ';
 var_dump(1 + 1.0);
 echo '<br>';

 var_dump((float) 3); // Convertendo o valor 3 (inteiro) para Float.
 echo '<br>';
 var_dump((int) 6.8); // O 8 é perdido do valor. 
 echo '<br>';
 var_dump(intval(2.9999)); 
 echo '<br>';
 var_dump((int) round(2.8)); // converte o valor float pra
 // inteiro e arrendonda pro inteiro mais próximo no caso
 // sendo o 3




 // válido mencionar que conversões caso certos valores não sejam suportados 
 // pelo tipo, é possível a perda de informação, por exemplo
 // a conversão de 5.6 para inteiro, perderia o valor da casa '6'.

 // Operações com String.

 echo '<p class="title">Strings</p>';

 echo var_dump(3 + "2") . '<br>';
 echo '<p class="title">Diferente do JavaScript, o PHP
 soma (número em tipo número) e (número no tipo
 STRING) e retorna o valor correto, exemplos: <br>
 Javascript: 1 + "1" = 11 <br>
 PHP: 1 + "1" = 2</p>'; 

 echo var_dump("3" + 2);
 echo '<br>';
 var_dump("3" . 2);

 echo '<br>', is_string("3" . 2);
 echo '<br>', is_string("3" + 2);
 
 echo '<br>';
 echo '1 + "cinco": ', var_dump(1 + "cinco"), '<br>';
 echo '1 + "5 cinco": ', var_dump(1 + "5 cinco"), '<br>';
 echo '1 + "cinco 5": ', var_dump(1 + "cinco 5");

 echo '<br> 1 = Verdadeiro: ', var_dump(1 + "cinco");
echo '<br>';

echo '1 + "2+5": ', var_dump(1 + "2+5"), '<br>';
echo '1 + "3.2": ', var_dump(1 + "3.2"), '<br>';
echo '1 + "-3.2e2": ', var_dump(1 + "-3.2e2"), '<br>';
echo 'var_dump((int) "10.5"):  ', var_dump((int) "10.5");