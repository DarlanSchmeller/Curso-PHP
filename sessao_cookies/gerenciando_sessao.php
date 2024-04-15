<div class="title">Gerenciando Sessão</div>

<?php
print('<p class="title">
<b>session_regenerate_id();</b>
<br>
/ / Regenera a id da sessão sem alterar os dados armazenados nela.
</p>');

print('<p class="title">
/ / Uma sessão tem uma ID sempre que é criada, você pode usar o comando "echo session_id()"
para exibi-lo, se outra pessoa conseguir acesso a sua ID, ela pode acessar os dados
de sua sessão, por isso é util regerar a id após determinado tempo.
</p>');


// session_id('ecm2cikherre3e532amv97o6rc');
echo session_start(); // Inicia a sessão
echo '<br>';
echo session_id(); // Imprime o valor do id da sessao

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : $contador = 1;
echo "<br>"  . $_SESSION['contador'];

if ($_SESSION['contador'] % 5 == 0) {
    session_regenerate_id(); // Cria um novo ID de sessão a cada multiplo de 5.
}

if ($_SESSION['contador'] >= 15) {
    session_destroy(); // Destroi a sessão
}