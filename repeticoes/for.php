<div class="title">Laço For</div>

<p class="title">
<b>    
for($cont = 1; $cont <= 10; $cont++) { <br>
    echo "Ainda contando: $cont <br>";
}'
</b>
<br>
// Assim que se usa o loop For: Se declara uma variável de controle,
é definido um teste lógico que controla quantas vezes ocorre a repetição, 
e definimos por último incremento a variável de controle.
</p>

<?php
for($cont = 1; $cont <= 5; $cont++) {
    echo "$cont <br>";
}

echo "<hr>"; // Barra do HTML para dividir conteúdo.

for(; $cont <= 10; $cont++) { // Usamos a variável de controle anterior.
    echo "Ainda contando: $cont <br>";
}

echo '<hr>';

for(; $cont <= 15; $cont++) {
    echo "$cont <br>";
}
// Arrays e Repetições

$array = array(
    'Segunda','Terça','Quarta','Quinta','Sexta','Sábado'
);

print_r($array);
echo '<br>';

for($i = 0; $i < count($array); $i++) {
    echo "$array[$i]";
    echo '<br>';
}

$matrix = array(
    array(
        'a', 'e', 'i', 'o', 'u'
    ),
    array(
        'b', 'c', 'd'
    )
);

echo '<hr>';

for($i = 0; $i < count($matrix); $i++) {
    for($i2 = 0; $i2 < count($matrix[$i]); $i2++) {
        
        echo "{$matrix[$i][$i2]}"; // Sem chaves não imprime o valor correto!
        echo '<br>';

    }
    echo '<hr>';
}