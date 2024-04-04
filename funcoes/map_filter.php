<div class="title">Map & Filter</div>

<?php
print('<p class="title">
    <b>Map:</b> // É um comando/função utilizado para transformações no geral em Arrays, 
    mudar tipos de dados e transformar em outros.
</p>');
print('<p class="title">
    <b>Filter:</b> // É um comando/função utilizado em Arrays para retornar
    verdadeiro ou falso através de transformações, assim como o
    map, exceto que os valores sempre serão boolean.
</p>');

$notas = [5.8, 7.3, 9.8, 6.7];

$notasFinais1 = [];

foreach($notas as $nota) {
    $notasFinais1[] = round($nota); // Arredonda os valores.
}

print_r($notasFinais1);

echo '<br>';
$notasFinais2 = array_map(round, $notas);
// Utilizamos o map para fazer o mesmo processo acima com apenas uma linha de código.
// Deste modo, dizemos ao map o array que recebera os valores, em parâmetros
// Passamos a 'função' que será utilizada, nesse caso o ROUND, e o outro array 
// Que desejamos aplicar a função sobre.

print_r ($notasFinais2);

$apenasOsAprovados1 = [];

foreach($notas as $nota) {
    if ($nota >= 7) {
        $apenasOsAprovados1[] = round($nota);
    }
}

echo '<br>';
print_r($apenasOsAprovados1);

function aprovados($nota) {
    return $nota >= 7;
}

echo '<br>';
$apenasOsAprovados2 = array_filter($notas, aprovados);
print_r($apenasOsAprovados2);

function calculoLegal($nota) {
    $notaFinal = round($nota) + 1;
    return $notaFinal > 10 ? 10 : $notaFinal;
}

echo '<br>';
$notasFinais3 = array_map(calculoLegal, $notas);
print_r($notasFinais3);