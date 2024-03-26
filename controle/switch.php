<div class="title">Switch</div>

<?php
$categoria = 'SUV';
$preco = 0.0;
$carro = '';

print('<p class="title">Com If/Else:</p>');

if ($categoria === 'luxo') {
    $carro = 'Mercedes';
    $preco = 250000;
} else if ($categoria === 'SUV') {
    $carro = 'Renegade';
    $preco = 80000;
} elseif ($categoria === 'Sedan') {
    $carro = 'Etios';
    $preco = 55000;
} else {
    $carro = 'Mobi';
    $preco = 30000;
}

$precoformatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: R$ $precoformatado</p>";

// Versão Otimizada com Switch:

print('<p class="title">Com Switch:</p>');

$categoria = 'sesdan';
switch (strtolower($categoria)) {
    case 'luxo':
        $carro = 'Mercedes';
        $preco = 250000;
        break;
    case 'suv':
        $carro = 'Renegade';
        $preco = 80000;
        break;
    case 'sedan': 
        $carro = 'Etios';
        $preco = 55000;
        break;
    default:
        $carro = 'Mobi';
        $preco = 33000;
        break;
}

$precoformatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: R$ $precoformatado</p>";