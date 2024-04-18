<div class="title">Download de Arquivos</div>

<?php
session_start();
$arquivos = $_SESSION['arquivos'] ?? [];
// Abre sessão para armazenar arquivos, ?? define valor default.

$pastaUpload = __DIR__ . '/../filesupload/';
$nomeArquivo = $_FILES['arquivo']['name'];
// Dois acima para construir o link.

$arquivo = $pastaUpload . $nomeArquivo;
$tmp = $_FILES['arquivo']['tmp_name'];
//  nome do arquivo enviado através de 
//  um formulário HTML usando o método POST e
//  o tipo de codificação 


// A função MOVE_UPLOADED_FILE() precisa de dois parametros, o arquivo e o local temporario
// para armazenar o mesmo.
if (move_uploaded_file($tmp, $arquivo)) {
    echo '<br> Arquivo válido e enviado com sucesso.';
    $arquivos[] = $nomeArquivo;
    $_SESSION['arquivos'] = $arquivos;
} else {
    echo '<br> Falha no upload de arquivo.';
}
?>

<!-- Formulario responsavel por enviar as imagens com input -->
<form action="#" method="post" enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button> 
    <!-- lembrando que todo botão em um formulário automaticamenteenvia os dados -->
</form>

<ul>
    <?php foreach($arquivos as $arquivo): ?>
        <li>
            <a href="../filesupload/<?= $arquivo ?>">
            <?= $arquivo ?> <!-- Cria um link para arquivo de imagem!! -->
            </a>
        </li>
        <?php endforeach ?>
</ul>

<style>
    input, button {
        font-size: 1.2rem;

    }
</style>