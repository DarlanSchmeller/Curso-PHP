<div class="title">Desafio de Precedência</div>

<style>
    p {
        font-size: 18px;
        padding-bottom: 10px;
        border-bottom: solid 1px black;
    }
</style>

<?php 

echo '<p>1. Qual valor será impresso?</p>';
echo 2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3);
echo '<br>';

echo '<p>2. Qual expressão imprime o valor 100?</p>';

echo 'a) ', (1 + 2) * 20 - 15, '<br>';
echo 'b) ', 4 * 5 ** 2, '<br>';
echo 'c) ', 2 ** 3 ** 4 / 1e25, '<br>';
echo 'd) ', 3 + (3 * 8) / 2 - 3, '<br>';