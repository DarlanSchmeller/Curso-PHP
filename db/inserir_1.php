<div class="title">Inserir Registro #01</div>

<?php
require_once('conexao.php');

$sql = "INSERT INTO cadastro
    (nome, nascimento, email, site, filhos, salario)
    VALUES (
        'Carlos',
        '1989-10-29',
        'carlos1234@gmail.com',
        'https://carlosze34.sites.com.br',
        0,
        988.87
        )";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado) {
    echo 'Sucesso! :D';
} else {
    echo "Falha na conexão, erro:" . $conexao->error;
}

$conexao->close();