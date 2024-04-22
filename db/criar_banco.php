<div class="title">Criar Banco</div>

<?php

require_once("conexao.php");

$conexao = novaConexao(null);
$sql = 'CREATE DATABASE IF NOT EXISTS curso_php';

$resultado = $conexao->query($sql);

if ($resultado) {
    echo "Sucesso :)";
} else {
    echo 'Falha ao criar banco de dados, Erro: ' . $conexao->error;
}

$conexao->close();