<div class="title">PDO: Excluir</div>

<?php
require_once 'conexao_pdo.php';

$sql = "DELETE FROM cadastro WHERE id >= :id";
$conexao = novaConexao();

$stmt = $conexao->prepare($sql); // Prepara o comando SQL para receber valores
// evitando SQL injections.

if($stmt->execute([':id' => 21])) {
    echo "Sucesso! :D";
} else {
    echo 'Erro: ';
    print_r($stmt->errorInfo());
}