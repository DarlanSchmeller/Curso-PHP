<?php
session_start(); // Este comando ativa/permite usar a sessão
print_r($_SESSION);
?>

<?php
$_SESSION['email'] = 'cavalinhobernardo@gmail.com';
?>

<hr>

<p>
    <b>Nome:  </b> <?= $_SESSION['nome'] ?>
</p>
<p>
    <b>E-mail: </b> <?= $_SESSION['email'] ?>
</p>


<a href="sessao_cookies.php">Voltar</a>

<br>
<br>

<a href="basico_sessao_limpar.php">Limpar Sessão</a>

<br>
<br>

<a href="http://localhost:8080/exercicio.php?dir=sessao_cookies&file=sessao_cookies">Voltar aos Exercícios</a>