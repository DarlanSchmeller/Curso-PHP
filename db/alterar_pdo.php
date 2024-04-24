<div class="title">PDO: Alterar</div>

<?php
require_once "conexao_pdo.php";

$sql = "UPDATE cadastro SET nome = ?,
nascimento = ?, email = ?, site = ?,
filhos = ?, salario = ?
WHERE id = ?"; // Sempre segue o mesmo formato, passamos o comportamento que será executado no SQL
// Logo em seguida dizemos WHERE/AONDE no banco de dados/registro isso será feito.
// Isso é uma CARRy

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);

$resultado = $stmt->execute([
    'Gui',
    '1980-12-12',
    'gui@gui.com.br',
    'http://gui.co',
    1,
    12000,
    27
]);

if($resultado) {
    echo 'Sucesso. :D';
} else {
    print_r($stmt->errorInfo());
}