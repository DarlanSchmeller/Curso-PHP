<div class="title">Cookies</div>

<?php
print('<p class="title">
    <b>Cookies</b>
    <br>
    / / Os cookies são pequenos pedaços de dados que são armazenados no navegador do usuário. 
    Eles são usados para armazenar informações temporárias, como preferências do usuário, 
    informações de login ou qualquer outra coisa que você deseje lembrar sobre o usuário 
    entre diferentes solicitações HTTP.
</p>');

print('<p class="title">
    <b>setcookie("usuario", $usuario["nome"], time() + 60 * 60 * 24 * 30);</b>
    <br>
    / / Cria um cookie, e define um tempo de expiração.
</p>');

print('<p class="title">
    <b>unset($_COOKIE["usuario"]);
    <br>
    setcookie("usuario", ""); </b>
    <br>
    / / Apaga o cookie, e defini o como uma string vazia.
</p>');