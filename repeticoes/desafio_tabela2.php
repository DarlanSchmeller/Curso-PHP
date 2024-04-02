<div class="title">Desafio Tabela 2</div>

<form action="#" method="post">
    <div>
        <label for="linhas">Linhas: </label>
        <input name="linha" type="number" value="<?= $_POST['linha'] ?>">
    </div>

    <div>
        <label for="colunas">Colunas: </label>
        <input name="coluna" type="number" value="<?= $_POST['coluna'] ?>">
    </div>

    <button>Gerar Tabela</button>
</form>


<table>
<?php
$linhas = intval($_POST['linha']);
$colunas = intval($_POST['coluna']);
$elementototal =  9;
$array = array( );

if(!$linhas) $linhas = 10;
if(!$colunas) $colunas = 10;


$num = 1;
for($i = 0 ; $i < $linhas; $i++) {
    echo "<tr>";
    for($j = 0 ; $j < $colunas ; $j++) {
        echo "<td>$num</td>";
        $num++;
    }
    echo "</tr>";
}

?>
</table>


<style>
    input {
        font-size: 1.8rem;
        text-align: center;
    }
    button {
        margin-left: 44%;
        margin-top: 20px;
    }
    form > * {
        font-size: 1.8rem;
        display: flex;
        justify-content: center;
        padding: 5px;
        text-align: center;
    }
    form > div {
        margin-bottom: 10px;
    }

    table {
        border-collapse: collapse;
        margin: 20px 0px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }
    table tr {
        border: 1px solid #444;
    }
    table td {
        padding: 10px 20px;
    }
</style>