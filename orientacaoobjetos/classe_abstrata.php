<div class="title">Classe Abstrata</div>

<?php
print('<p class="title">
    <b>Classe Concreta</b>
    <br>
    // É a classe padrão, possui todos seus métodos/funções estabelecidos
    com seus respectivos blocos de código.
</p>');

print('<p class="title">
    <b>Interface</b>
    <br>
    // Uma interface não possui nenhum de seus métodos definidos, somente 
    criadas, ou seja, as funções dentro de uma interface só possuem o nome
    porém sem nenhum bloco de código definido.
</p>');

print('<p class="title">
    <b>Classe Abstrata</b>
    <br>
    // Uma classe abstrata em PHP é uma classe que não pode ser instanciada diretamente. 
    Ela serve como um modelo ou esqueleto para outras classes que estendem dela (subclasses).
</p>');

abstract class Abstrata { // Marcar com abstract significa que ela não pode ser instanciada.
    abstract public function metodo1(); // Quando se define um método como abstrato ele não tem corpo de código.
    abstract protected function metodo2($parametro);

}

abstract class FilhaAbstrata extends Abstrata {
    public function metodo1() { // Transformou o método abstrato em contrato ao extender e inserir uma função pública
        echo "Executando método 1. <br>";
    }
    abstract public function metodo3(); // Em classes abstratas podemos misturar métodos concretos com abstratos. 
    // Sendo não necessário definir um método.
}

class Concreta extends FilhaAbstrata {
    public function metodo1() {
        echo "Executando método 1 extendido. <br>";
        parent::metodo1();
    }
    public function metodo2($parametro) {
        echo "Executando método 2, com parâmetro $parametro . <br>";
    }
    public function metodo3() {
        echo "Executando método 3. <br>";
        $this->metodo2('Interno');
    }
}

$c = new Concreta();
$c->metodo1();
$c->metodo2('Externo'); // Não conseguimos acessar método protegido, mas alterando pra public via extensão funciona.
$c->metodo3();

echo '<hr>';
var_dump($c instanceof Concreta);
var_dump($c instanceof FilhaAbstrata);
echo '<hr>';

echo "Fim!";