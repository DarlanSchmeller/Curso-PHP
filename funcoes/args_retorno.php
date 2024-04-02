<div class="title">Argumentos e Retorno</div>

<?php
print('<p class="title">
function obtermensagem() { <br>
| | | <b>return</b> "Seja bem vindo(a)!"; <br>
} <br>
<br>
<b>return;</b> // Retorna o valor da função até o comando desejado,
podendo ser atribuido a variáveis ou um echo/print.
</p>');


print('<p class="title">
<b>function</b> obterMensagemComNome<b>($nome)</b> {<br>
| | | <b>return</b> "Bem vindo, {$nome}!";<br>
}<br>
echo obterMensagemComNome("Darlan");<br>
<br>
<b>Parâmetros;</b> // Envia um valor a função para ser usado.
</p>');

function obterMensagem() {
    function obterMensagemComNome($nome) {
        return "Bem vindo, {$nome}!";
    }
    echo obterMensagemComNome('Darlan');
    return 'Seja bem vindo(a)!';
}

$variavel = obterMensagem();
echo '<br>';
echo $variavel;

function soma($a, $b) {
    return ($a + $b);
}

echo '<br> Resultado da soma: ' . soma(1,2);

function trocarValor($a, $novoValor) {
    $a = $novoValor;
}

$Variavel1 = 1;
trocarValor($Variavel1, 4);
echo "<br> Resultado: $Variavel1"; // Não muda pois por padrão o PHP apenas cria cópias do valor
// Da variável, e não afeta o endereço de memória, somente se adicionar o & na variável

function trocarValorDeVerdade(&$a, $novoValor) {
    $a = $novoValor; // Para se certificar que está alterando o endereço use &
}

trocarValorDeVerdade($Variavel1, 30);
echo '<br>', $Variavel1;