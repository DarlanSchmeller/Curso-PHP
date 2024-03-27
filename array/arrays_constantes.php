<div class="title">Arrays Constantes</div>

<?php
print('<p class="title">
   <b>const FRUTAS = array("laranja","abacaxi");</b>
   <br>
   // Este é um array constante, seus elementos internos não mudam.
   <br>
   <br>
   // <b>frutas[0] = 10;</b>
   <br> 
   // Tentar alterar um valor interno resultará em erro no código.
   <br>
   <br>
   <b>Frutas[novo] = 15;</b>
   <br>
   // Tentar atribuir novos elementos também resulta em erro.
</p>');

const FRUTAS = array('laranja','abacaxi');
// Este é um array constante, seus elementos internos não mudam.
// frutas[0] = 10; Tentar alterar um valor interno resultará em erro no código.
// Frutas[novo] = 15; Tentar atribuir novos elementos também resultara em erro.

