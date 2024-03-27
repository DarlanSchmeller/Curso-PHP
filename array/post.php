<div class="title">$_POST</div>

<p class="title">
    O método <b>$_POST</b> é basicamente
    um <b>Array</b> que armazena todos os valores
    inseridos no input de um Form.
</p>

<form action="#" method="post">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="estado">
        <option value="AC">Acre</option>
        <option value="BA">Bahia</option>
    </select>
    <button>Enviar</button>
     <!-- Um botão dentro de Form já funciona como Submit -->
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
print_r($_POST);
echo '<br>';
echo count($_POST);
echo $_POST('nome');