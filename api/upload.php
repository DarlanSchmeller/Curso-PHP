<div class="title">Upload de Arquivos</div>

<?php
print_r($_FILES);
echo '<br>';
print_r($_POST);
echo '<br>';
print_r($_GET);

if($_FILES && $_FILES['arquivo']) {
    $pastaUpload = '/Users/mmtecnologia/mesa/';
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload . $nomeArquivo;
    $tmp = $_FILES['arquivo']['tmp_name'];

    if (move_uploaded_file($tmp, $arquiovo)) {
        echo "<br> Arquivo válido e enviado com sucesso.";
    } else {
        echo '<br> Arquivo inválido.';
    }
}
?>
<hr>
<form action="#" method="post"
    enctype="multipart/form-data"> <!-- Definimos o encoding do form para suportar arquivos. -->
    <input name="arquivo" type="file">
    <button>Enviar</button> <!-- Ao enviar o array de $_Files recebe o arquivo. -->
</form>

<!-- $_FILES || What are these things with the $_(name)? ||

 / /  PHP superglobal arrays. Superglobals are predefined variables
that are always available in all scopes throughout a script.
They are used to gather data from forms, cookies, server variables,
and environment variables. -->

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>