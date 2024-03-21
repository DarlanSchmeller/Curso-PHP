<div class="title">Constantes</div>

<?php

define('TAXA_DE_JUROS', 5.9); /* Uma forma de definir constantes usando define.
Constantes não usam o sinal de '$' como variáveis, menos utilizada. */

echo "<br>" . TAXA_DE_JUROS; /* Para pegar o valor basta escrever fora de uma
string utilizando o nome definido. */

const NOVA_TAXA = 2.5;

echo '<br>' . NOVA_TAXA;