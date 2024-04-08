<div class="title">Interface</div>

<?php
print('<p class="title">
<b>interface</b> Animal { <br>
    function respirar(); <br> 
} <br>
// Uma interface é uma estrutura que define um conjunto de métodos que uma classe deve 
<b>implementar</b>. É como um contrato que as classes devem seguir se quiserem ser 
consideradas como implementações dessa interface. Uma interface em PHP é definida 
usando a palavra-chave <b>interface</b>.
</p>');

interface Animal { // Basicamente permite que você defina os comportamentos e atributos depois.
    function respirar(); // Esta função genérica cria obrigação de quem herdar de a definir/declarar.
} // As interfaces só podem criar os métodos, mas não definir o comportamento/bloco da função.
// *** Ainda por padrão toda função em uma interface é pública.

interface Mamifero {
    function mamar();
}

interface Canino extends Animal, Mamifero { // Interface pode extender de outras interfaces.
    function latir(): string; // Os dois pontos diz pro PHP que espera o retorno de uma string.
}

class Cachorro implements Animal, Canino { // Basicamente quando se herda a obrigatoriedade se usa implements e não extends
    function respirar() { // Visto que é uma implementação de interface, herdamos a obrigação de definir a função.
        echo "Irei usar oxigênio! <br>";
    }
    function latir(): string { // Os dois pontos formatam o valor de retorno para string.
        return 'Au Au! <br>';
    }
    function mamar(): string {
        return 'Irei usar leite!<br>';
    }
} // Uma classe pode implementar várias interfaces, sendo OBRIGATÓRIO definir todos os comportamentos
// necessários estabelecidos pelas interfaces.

$animal = new Cachorro();
$animal->respirar();
echo $animal->latir(); // Imprimiu o valor de retorno da função.
echo $animal->mamar(); // Imprimiu o valor de retorno da função.

echo '<hr>';
var_dump($animal);
echo '<br>';
var_dump($animal instanceof Cachorro);
echo '<br>';
var_dump($animal instanceof Canino);
echo '<br>';
var_dump($animal instanceof Mamifero);
echo '<br>';
echo 'Fim!';