<link rel="stylesheet" 
href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
crossorigin="anonymous">
<div class="title">Consultar Registros</div>

<?php
require_once("conexao.php");

$sql = "SELECT id, nome, nascimento, email FROM cadastro";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

$registros = [];

if($resultado->num_rows > 0) {
    while ($row = $resultado -> fetch_assoc()) {
        $registros[] = $row;
    }
} elseif($conexao->error) {
    echo 'Erro: ' . $conexao->error;
}


$conexao->close();

?>

<table class="table table-hover table-striped table-bordered">
    <thead>
        <th>Código</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-mail</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro) { ?>
            <tr>
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td><?= 
                    date('d/m/Y', strtotime($registro['nascimento']));
                ?></td>
                <td><?= $registro['email'] ?></td>
            </tr>
        <?php }?>
    </tbody>
</table>

<br>
<hr>
<br>
<?php print_r($registros); ?>

<style>
    table { 
        border: 1px solid grey;
        border-right: 0px;
        border-left: 0px;
        border-bottom: 0px;
        text-align: center;
        margin-top: 50px;
        width: 100%;
        padding: 10px;
        font-size: 1.4rem;
    }
    th {
        margin: 0px;
        padding: 10px;
        width: auto;
        text-align: center;
        border-bottom: 1px solid grey;
        font-size: 1.6rem;
    }
    
    td {
        margin: 0px;
        padding: 10px;
        border-bottom: 1px solid grey;
        width: auto;
        text-align: center;
    }
    #message {
    color: grey;
    text-align: center;
    font-family: 'Times New Roman', Times, serif;
    font-weight: 300;
    padding: 0px 0px 0px 0px;
    margin: 0px;
    padding-top: 10px;
    }
    header {
        padding-top: 10px;
    }
</style>