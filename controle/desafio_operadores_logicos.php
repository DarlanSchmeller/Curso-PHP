<div class="title">Desafio Operadores Lógicos</div>

<!-- 
    Dois Trabalhos => Terça e Quinta!
     - Se os dois trabalhos forem executados => TV 50' e Sorvete.
     - Se apenas um for executado => TV 32' e Sorvete.
     - Se nenhum for executado -> Fica em casa mais saudável!
 -->
  
<form action="#" method="post" id="formulario">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select {
        justify-content: center;
        align-items: center;
        font-size: 1.8rem;
        border-radius: 5px;
        box-shadow: inset 0px 0px 10px rgba(0,0,0,0.4);
        cursor: pointer;
        margin: 10px;
        text-align: center;
    }
</style>

<?php
// echo $_POST['t1'];
// echo $_POST['t2'];
$t1 = $_POST['t1'];
$t2 = $_POST['t2'];

if ($t1 == 1) {
    echo 'Trabalho 1 executado.';
} elseif ($t1 == 0) {
    echo 'Trabalho 1 não executado.';
}
echo '<br>';
if ($t2 == 1) {
    echo 'Trabalho 2 executado.';
} elseif ($t2 == 0) {
    echo 'Trabalho 2 não executado.';
}

echo '<br>';

if ($t1 == 1 && $t2 == 1) {
    echo 'Os dois trabalhos foram executados,
    a familia vai tomar sorvete e comprar a TV de 50".';
} elseif ($t1 == 1 && $t2 == 0 or 
          $t1 == 0 && $t2 == 1 ) {
    echo 'Apenas um trabalho foi executado, a familia
    vai tomar sorvete e comprar uma TV de 32".';
} else {
    echo 'Nenhum trabalho executado, a familia vai 
    ficar em casa pois é bem mais saudável.';
}

?>