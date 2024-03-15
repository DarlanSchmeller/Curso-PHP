<div class="title">Tipo String</div>

<style>
    p {
        font-size: 20px;
        padding-bottom: 10px;
        border-bottom: solid 1px black;
    }
</style>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';
var_dump("Eu tambem");
echo '<br>';
echo '<p>O encoder tem problema com caracteres
especiais, por isso o "é" conta 
como dois caracteres <br>';
echo 'Sendo assim é necessário especificar
para a máquina que queremos que ela utilize
UTF-8 para fazer esta análise.';


/* Concatenação */
echo '><p>Concatenação </p>';
echo "Nós também" . ' somos' . '<br>';
echo "Também aceito", ' vírgulas' . '<br>';

echo '"Teste"' . '\'Teste\' ' . "\"Teste\" ";

echo '><p>Outro comando que pode ser usado para exibir
texto é o print(" ") </p>';

print('Esta string foi gerada com print(" ")' . "<br>");




echo '><p>Algumas funções para formatação de Strings.</p>';


echo 'strtoupper("Qualquer String minuscula"):
Formata todas as letras para maiúsculas. <br> ';

echo '>Como por exemplo:' . strtoupper(' Qualquer String minuscula') .'<br> <br> <br>';


echo 'strtolower("QUALQUER STRING MAIUSCULA"):
Formata todas as letras para minúsculas. <br>';

echo '>Como por exemplo:' . strtolower(' QUALQUER STRING MAIUSCULA' . '<br> <br> <br>');


echo 'ucwords("formate isso"): Deixa todas as letras
inicias de palavras em maiúsculas. <br>';
echo 'Exemplo:' . ucwords(" formate isso") . '<br> <br> <br>';


echo 'strlen("quantas letras"): Exibe o comprimento da
string. <br>';
echo 'Exemplo: quantas letras; ' . strlen("quantas letras") . '<br> <br> <br>';


echo 'mb_strlen("Eu Também"): Exibe o comprimento da
string mesmo que esteja em UTF-8 e com caracteres
especiais <br>';
echo 'Exemplo: Eu Também; letras: ' . mb_strlen("Eu Também") . '<br> <br> <br>';


echo "substr('Só uma parte mesmo', 7, 6): 
Exibe somenta a parte do texto indicado.<br>";
echo 'Exemplo: ' . substr('Só uma parte mesmo', 7, 6) . '<br> <br> <br>';


echo "str_replace('ISSO', 'aquilo', 'Trocar ISSO'): Substitui a 
primeira palavra indicada pelo palavra definida.<br>";
echo 'Exemplo: ' . str_replace('ISSO', 'AQUILO', 'Trocar ISSO') . '<br> <br> <br>';
