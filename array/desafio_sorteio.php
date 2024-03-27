<div class="title">Desafio Sorteio</div>

<?php
$nomes = ["Elza", "Rapunzel", "Branca de Neve", "Cinderela"];

$indicerandom = array_rand($nomes);
$escolhaaleatoria = $nomes[$indicerandom];

print("<h1><center>
    $escolhaaleatoria
</center>
</h1>");