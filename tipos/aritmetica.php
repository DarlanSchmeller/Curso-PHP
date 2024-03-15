<div class="title">Operações Aritméticas</div>

<p> Sinais de Operações Aritméticas em PHP:
</br>  
    Soma:   ' 1 + 2.5 ' <br>
    Subtração:  ' 5 - 3 '<br>
    Multiplicação: ' 2 * 5 '<br>
    Divisão: ' 7 / 4 '<br>
    Resto de divisão: ' 7 % 4 '<br>
    Potência: ' 4 ** 2 ' <br>

    <br>

    Divisões com dois inteiros que não resultem em um valor exato,
    sempre irá gerar em um valor float, porém e possível
    controlar o output dessas operações utilizando
    alguns comandos como por exemplo: <br>

    'echo intdiv(7, 4)' <br>
    Este resultando num inteiro, sendo o meso 1 e não 1.75 <br>


    <br>

    Também podemos usar ' echo round(7 / 4) '
    que arredonda pro valor mais próximo.

</p>

<p>
    Precedência de Operações: <br>
    Parênteses'()' e Potenciação'**'  
    <br> Divisão'/' ; Multiplicação'*' ; Resto de Divisão'%'
    <br> Soma'+' ; Subtração'-'
</p>

<style>
    p {
        font-size: 18px;
        padding-bottom: 10px;
        border-bottom: solid 1px black;
    }
</style>

<?php
echo (1 + 1), '<br>';
var_dump (1 + 1.0); 
echo '<br>';
echo 1 + 2.5, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';
echo intdiv(7, 4), '<br>';
echo round(7 / 4), '<br>';
echo 7 % 4, '<br>';
echo 4 ** 2, '<br>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';