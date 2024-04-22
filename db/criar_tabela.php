<div class="title">Criar Tabela</div>

<?php
require_once('conexao.php');
$sql = "CREATE TABLE IF NOT EXISTS cadastro (

    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    nascimento DATE,
    email VARCHAR(100) NOT NULL,
    site VARCHAR(100) NOT NULL,
    filhos INT,
    salario FLOAT

)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if ($resultado) {
    echo "Sucesso :)";
} else {
    echo 'Falha ao criar banco de dados , Erro: ' . $conexao->error;
}


$conexao->close();