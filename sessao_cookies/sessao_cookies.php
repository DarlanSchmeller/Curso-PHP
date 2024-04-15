<div class="title">Sessão</div>

<?php
print('<p class="title">
Uma sessão é uma maneira de manter dados do usuário entre várias requisições HTTP, é
basicamente um array/objeto que armazena os dados definidos em suas chaves, ele é usado
para manter os dados salvos mesmo após fechar o navegador.
É útil para armazenar informações de login, preferências do usuário, carrinhos de compras em lojas online, entre outros.
</p>');

print('<p class="title">
<b>session_start()</b>
<br>
/ / Inicia uma sessão, os dados armazenados no array de $_session serão salvos até
a finalização de processo do navegador.
<br>
<br>


<b>session_id()</b>
<br>
/ / Exibe o identificador da sessão, necessário um echo para imprimir.
<br>
<br>


<b>session_destroy()</b>
<br>
/ / Limpa os dados da seção.
</p>');


session_start();
print_r($_SESSION);
echo '<br>';

if (!$_SESSION['nome']) {
    $_SESSION['nome'] = 'cavalo';
}

if (!$_SESSION['email']) {
    $_SESSION['email'] = 'cavalobernardo@gmail.com';
}

?>

<p>
    <a href="/sessao_cookies/basico_sessao_alterar.php">
        Alterar Sessão
    </a>
</p>