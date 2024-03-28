<div class="title">Foreach</div>

<?php

print('<p class="title"><b>
    foreach ($array as $indice >= $valor) { <br>
       | | | | | echo "$valor"; <br>
} <br>
  </b>
  // Basicamente significa For Each (para cada), ele percorre todos
  os elementos de um array ou objeto, a primeira variável é a
  localização do array/nome e a segunda variável e onde será
  armazenado os índices do array para navegação, e caso exista
  uma terceira variável, esta será usada para navegar os valores internos,
  sendo utilizado em arrays dentro de arrays.
</p>');

$array = array(
   1 => 'Domingo',
    'Segunda', // Define que o índice inicia do 1 e não 0.
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sábado'
);

foreach ($array as $valor) {
    echo "$valor <br>";
} 
// Esse For percorre todos os elementos.

foreach ($array as $indice => $valor) {
    echo "$indice => $valor <br>";
}

// --------------------------

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

foreach ($matrix as $linha) { // Primeiro For navega os arrays
    foreach($linha as $letra) { // Segundo For navega os valores
        echo "$letra";
    }
    echo "<hr>";
    echo "<br>";
}

$numeros = [1, 2, 3, 4, 5];
foreach ($numeros as &$dobrar) { // & pega o endereço da variável e altera baseado no código.
    $dobrar *= 2; // Sem o & o array não teria seus valores atualizados.
    echo "$dobrar <br>";
}
print_r($numeros);