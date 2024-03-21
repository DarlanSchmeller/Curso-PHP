<div class="title">If_Else</div>

<?php

print('<p class="title">
<b>
if (0 > 1) { <br>
    echo "Verdadeiro.";<br>
} else {<br>
    echo "Falso.";<br>
};<br>
</b>
 // Este bloco imprime verdadeiro se a operação lógica retornar 
 true, ou imprime falso se retornar false.
 O Else é usado para executar outras linhas de código
 dependendo do resultado lógico.
</p>');



print('<p class="title"><b>if(true)</b><br>
_____<b>echo "Serei impresso?";</b> <br> 
 // Este bloco só executa o código na 
primeira linha abaixo do IF se o valor
retornado da operação for <b>verdadeiro</b>.
 <br> Para incluir mais linhas de código
 no IF é necessário criar um bloco com
 " { } "
</p>');


if(true) {
    print('<p class="title">
    if(true) { <br>
        ___echo "teste"; <br>
    } <br> <br>
    Isso é um <b>bloco</b> de código.
    </p>');
    
    echo '<p class="title">
    Estou em um bloco de código, será que serei impresso?
    </p><br>';
}




echo '<p class="title"> Experimentação: </p>';






if(true)
    echo "Serei impresso? <br>";
    echo '<br>' . "Serei impresso novamente?"; /* Apenas a primeira linha de código é 
    associada ao 'if', logo a segunda linha será sempre executada independente
    do valor retornado no IF.. */

//           ---------------------------------


    print(('<p class="title"><b>if(true)</b><br>
_____<b>echo "Serei impresso?";</b> <br> 
</p><br>'));


if (0 > 1) {
    echo "Verdadeiro.";
} else {
    echo "Falso.";
}

echo '<br>';

if (0 > 1) {
    echo 'Passo A. <br>';
} else if (0 > 1) {
    echo 'Passo B. <br>';
} else {
    echo 'Ultima opção.<br>';
}
/* Verdadeiro executa o primeiro bloco
Falso executa o segundo bloco depois de else. */

if (0 > 1) {
    echo 'Me imprime se o primeiro IF retornar verdadeiro. <br>';
} elseif (1 > 0) {
    echo 'Me imprime se o segundo IF retornar verdadeiro. <br>';
} else {
    echo 'Me imprime se nenhum dos outros IFs retornar verdadeiro.';
}