<div class="title">Desafio Variáveis Variáveis</div>

<?php

$a = 'Nossa';
$Nossa = 'eu';
$eu = 'consegui';
$consegui = 'responder';
$responder = 'esse';
$esse = 'desafio';


echo '<p class="title">Objetivo: Imprimir a seguinte frase usando variáveis variáveis.
    <br> "Nossa! eu consegui responder esse desafio" </p> <br>';


    //          Resolução Abaixo
print("
        $a! {$$a} {$$$a} {$$$$a} {$$$$$a} {$$$$$$a}.
");
