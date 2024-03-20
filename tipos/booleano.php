<div class="title">Tipo Booleano</div>

<?php 

echo '<p class="title">TODOS VALORES, TODOS! RETORNAM VERDADEIRO, EXCETO O ZERO, strings em branco
ou zero em diferentes formatações (em string, número etc) retornam false assim
como o zero pois são a mesma coisa.
Essas conversões só se aplicam em PHP, JavaScript é menos flexível em
relação a conversão de valores; Por exemplo " " retorna verdadeiro.';

echo '<p>';
echo true;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool('true');

/*   Fazer as regras de conversões  */

echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); /* apenas zero é false */
echo '<br>' . var_dump((bool) 20); 
echo '<br>' . var_dump((bool) -1); 
echo '<br>' . var_dump((bool) "");  // false
echo '<br>' . var_dump((bool) "0"); // false
echo '<br>' . var_dump((bool) ''); // todo resto é true
echo '<br>' . var_dump((bool) 0.0);
echo '<br>' . var_dump((bool) 0.000000000000001);