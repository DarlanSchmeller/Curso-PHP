<div class="title">Array Multidimensional</div>

<?php
print('<p class="title">
    Um Array Multidimensional é aquele Array que contém
    outros arrays, estes arrays componentes podem ser 
    identificados por índices, assim como valores normais.
</p>');

$dados = array(

    array(
        "nome" => "Roberto",
        "idade" => 26,
        "naturalidade" => "Bahia"
    ),
   "pessoa2" => array(
        "nome" => "Maria",
        "idade" => 24,
        "naturalidade" => "Paraná"
    )

);

print_r($dados);
echo '<br>' . $dados[0]['idade']; // O índice 0 armazena um componente, então:
// Acessamos valores dentro do Array Componente que está dentro do Array pai
// Através de identificação de índice, e então dizemos o índice do valor interno
// Que queremos, um pouco confuso, porém muito útil na prática.
echo '<br <br>' . $dados['pessoa2']['idade'];

$dados[] = array(
    "nome" => "Florinda",
    "idade" => 30,
    "naturalidade" => "São Paulo"
); // Podemos criar um array dentro de um Array desta forma, simples não?

echo "<br>";
print_r($dados);

$dados[1]["Vizinho"] = "Chaves";
echo '<br>';
print_r($dados[1]); // Estamos adicionado um novo elemento no índice 1, que é um array filho dentro
// do Array Pai '$dados'.