<div class="title">Lendo Arquivo</div>

<?php

$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo, 10);
// Para ler um arquivo, passamos a variavel que o armazena, em seguida, passamos
// a quantidade de bytes que desejamos ler do arquivo. (importante para nao travar)

echo '<br>';
echo fread($arquivo, 10);
echo '<br>';

$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo, filesize('teste.txt')); 
fclose($arquivo);
// filesize() é uma função que retorna o tamanho do arquivo passado em parâmetro.

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
$tamanho = filesize('teste.txt');
echo fread($arquivo, $tamanho); 
fclose($arquivo);

// ===== Lendo Arquivo por Linha =====

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
// Fgets é usado para ler linha por linha de um arquivo.
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
var_dump(fgets($arquivo));
echo '<br>'; // Temos a bool(false) pois como a terceira linha é vazia, a mesma retorna falso.
fclose($arquivo);

// ===== Lendo Arquivo por Linha Sem Saber Quantas Linhas =====

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) {    // Imprime todas as linhas
    echo fgets($arquivo), '<br>';
}
fclose($arquivo); // F stands for file.
// feof = end of file, então enquanto não achar o fim do arquivo


// ===== Ler por caracter =====

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) {    // Imprime todas as linhas
    echo fgetc($arquivo), '<br>';  // fgetc pega caracter, fgets pega linha.
}
fclose($arquivo); // F stands for file.


// ===== Ler e alterar arquivo ao mesmo tempo =====

echo '<hr>';

$arquivo = fopen('teste.txt', 'r+');  // 'r+' significa ler e alterar.
echo fgets($arquivo);
echo fgets($arquivo);
fwrite($arquivo, "\nAdicionado durante a leitura.");

fclose($arquivo);
echo '<br>FIM!';