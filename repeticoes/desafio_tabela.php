<div class="title">Desafio Tabela</div>

<?php

$array = [
    ['01','02','03','04','05'],
    ['06','07','08','09','10'],
    ['11','12','13','14','15'],
    ['16','17','18','19','20']
];

foreach($array as $linha) {
    foreach ($linha as $indice) {
        echo $indice . " ";   
    }
    echo '<br>';
}

?>

<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }
    table tr {
        border: 1px solid #444;
    }
    table td {
        padding: 10px 20px;
    }
</style>