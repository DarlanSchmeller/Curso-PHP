<div class="title">Recursividade</div>

<?php
print('<p class="title">
    Recursividade: Quebrar um problema em partes menores e resolver utilizando uma
    condição de parada.
</p>');

print('<p class="title">
    function somaRecursivaEconomica($numero) { <br>
    return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero -1); 
    <br>
    <br>
    // A função roda um <b>loop</b> dela mesma até alcançar a condição de parada.
</p>');

function somaUmAte($numero) {
    $soma = 0;
    for($i = 0; $i <= $numero; $i++) {
        $soma += $i;
    }
    return $soma;
}

echo somaUmAte(5) . '<br>';

function somaRecursivaAteUm($numero) {
    // Condição de Parada
    if($numero === 1) {
        return 1;
    }
    return $numero + somaRecursivaAteUm($numero - 1); // Soma o número com o número - 1.
}

echo '<hr>';
function somaRecursivaEconomica($numero) {
    return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero -1); // A função
    // roda um loop dela mesma até alcançar a condição de parada.
}

echo somaRecursivaEconomica(10) . '<br>';