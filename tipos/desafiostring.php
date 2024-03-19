<div class="title">Desafio String</div>

<?php

/*                  ENUNCIADO
        Avaliando os métodos da documentação
        de string, qual o método que a posição
        do texto 'abc' na string '!AbcaBcabc' 
        retorne 1?
*/

echo strpos('!AbcaBcabc', 'abc') . '<br>';
echo stripos('!AbcaBcabc', 'abc') . '<br>';

echo strpos(strtolower('!AbcaBcabc'), 'abc') . '<br>';