<div class="title">Upload de Arquivos</div>

<?php
print_r($_FILES);
echo '<br>';
print_r($_POST);
echo '<br>';
print_r($_GET);

if($_FILES && $_FILES['arquivo']) {
    $pastaUpload = '/Users/mmtecnologia/arquivoupload/';
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload . $nomeArquivo; // basicamente usa um input de arquivo e usamos
    $tmp = $_FILES['arquivo']['tmp_name']; // o objeto $_FILES para armazenar

    if (move_uploaded_file($tmp, $arquivo)) { // Usamos essa função para mover arquivos.
        echo "<br> Arquivo válido e enviado com sucesso.";
    } else {
        echo '<br> Erro no upload de arquivo.';
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