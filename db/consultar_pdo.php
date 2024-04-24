<div class="title">PDO: Consultar</div>

<?php
require_once "conexao_pdo.php";


$conexao = novaConexao();
$sql = "SELECT * from cadastro";
// PDO::FETCH_NUM
// PDO::FETCH_ASSOC
// PDO::FETCH_CLASS
$resultado = $conexao->query($sql)->fetchAll();

print_r($resultado);



echo '<hr>';



$sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio";

$stmt = $conexao->prepare($sql);
$stmt->bindValue(':qtde', 2, PDO:: PARAM_INT);
$stmt->bindValue(':inicio', 3, PDO:: PARAM_INT);
// bindValue() é usado para atribuir valor a placeholders em SQL como '?' que não possuem valor definido.


print_r(get_class_methods($stmt));


if($stmt->execute()) {
    $resultado = $stmt->fetchAll();
    print_r($resultado);
} else {
    echo 'Código: ' . $stmt->errorCode() . '<br>';
    print_r($stmt->errorInfo());
}



echo "<hr>";



$sql = "SELECT * FROM cadastro WHERE id = :id";
$stmt = $conexao->prepare($sql);
// $stmt->bindValue(':id', 25);


// if ($stmt->execute([1])) {
// if ($stmt->execute()) {
if ($stmt->execute([':id' => 25])) {
    $resultado = $stmt->fetch();
    print_r($resultado);
} else {
    echo 'Código: ' . $stmt->errorCode() . '<br>';
    print_r($stmt->errorInfo());
}

$conexao->close();