<div class="title">Desafio Palíndromo</div>

<?php
function palindromo($palavra) {
    return $palavra == strrev($palavra);
}
$word = 'arara';
$resultado = palindromo($word);
$resultado = palindromo($word);
if ($resultado == 1) {
    echo "A palavra '{$word}' é um palindromo. <br>";
} else {
    echo "A palavra '{$word}' não é um palindromo. <br>";
}
