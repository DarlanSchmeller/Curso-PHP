
<?php
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if ($_POST['email']) {
    $usuarios = array(
        array(
            "nome" => "Aluno",
            "email" => "aluno@mmtec.com.br",
            "senha" => "123456"
        ),
        
        array(
            "nome" => "Aluno2",
            "email" => "aluno2@mmtec.com.br",
            "senha" => "654321"
        )
    );
    foreach($usuarios as $usuario) {
        $emailValido = $email === $usuario['email'];
        $senhaValida = $senha === $usuario['senha'];

        if ($emailValido && $senhaValida) {
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario['nome'];
            header('Location: index.php');
        }
    }
    if (!$_SESSION['usuario']) {
        $_SESSION['erros'] = ['Usuário/Senha inválido!'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
    <link rel="stylesheet" href="assets/CSS/style.css">
    <link rel="stylesheet" href="assets/CSS/login.css">
    <script src="script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>


<body class="login">

    <header>
        <h1>Curso PHP</h1>
        <h2>Seja Bem-Vindo</h2>
    </header>


    <main>
        <div class="content">
            <h3>Identifique-se</h3>
                <?php
                    if ($_SESSION['erros]']) { 
                 ?> 
                    <div class="erros">
                    <?php 
                    foreach ($_SESSION['erros'] as $erro) {
                    ?>
                        <p>
                           <?= $erro ?> 
                        </p>
                    <?php 
                    }
                    ?>
                     </div>
                <?php
                    } 
                ?>
        <form action="#" method="post">
            <div>
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email">
            </div>

            <div>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha">
            </div>
            <button>Entrar</button>
        </form>
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
