<?php
session_start();
if (!$_SESSION['usuario']) {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
    <link rel="stylesheet" href="assets/CSS/exercicio.css">
    <link rel="stylesheet" href="assets/CSS/style.css">
    <script src="script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>


<body class="exercise">

    <header>
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>

    <nav class="navigation">
    <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
    <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php"; ?> class="green">Sem Formatação</a>
    <a href="index.php" class="red">Voltar</a>
    <a href="logout.php" class="sair">Sair</a>
    </nav>

    <main>
        <div class="content">
           <?php
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
           ?>

        </div>
    </main>

    <footer>
        <div>
           <p id="message">Estudos por Darlan Schmeller</p>
        </div>
        MMTecnologia © <?=  date('Y'); ?>
    </footer>

</body>

</html>
