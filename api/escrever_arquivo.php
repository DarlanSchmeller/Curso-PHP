<div class="title">Escrevendo Arquivos</div>

<?php
// Ao criar e modificar arquivos usando PHP, ao escrever, o arquivo sempre é recriado do zero
// Sendo assim o texto não é escrito várias vezes em um mesmo arquivo.

$arquivo = fopen('teste.txt', 'w');
// Como este arquivo não existe o mesmo é criado, 'w' define que será aberto em escrita.

fwrite($arquivo, "Valor inicial\n"); // /n quebra linha
// fwrite é usado para escrever dentro de arquivos


$str = "Segunda linha\n"; // podemos armazenar strings em variaveis e imprimilas dentro do arquivo usando fwrite.
fwrite($arquivo, "$str");

fclose($arquivo); // Fecha o arquivo, não permitindo mais alterações.
$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, 'Novo conteúdo');
fclose($arquivo);

//========= Parametros FOPEN =========
// 'w' escrever, se usar em um arquivo já existente o mesmo tem seu conteúdo apagado para reescrever.
// 'r' ler, não é possível ver alterações, somente ver o conteúdo.
// 'a' adicionar, o conteúdo anterior e salvo, e podemos adicionar mais conteúdo com fwrite.
// 'x' garante que o arquivo nao exista, se existir emite um warning.

$arquivo = fopen('teste.txt', 'a');
fwrite ($arquivo, " com novos valores.\n");
fwrite ($arquivo, "Adicionados em um segundo momento.\n");
fclose ($arquivo);
// Ao fechar o arquivo e abrir novamente no modo escrita ('w') o mesmo é resetado/apagado.

ini_set('display_errors', 1);
$arquivo = fopen('teste.txt2', 'x');
fwrite ($arquivo, "Arquivo novo.\n");
fclose($arquivo);