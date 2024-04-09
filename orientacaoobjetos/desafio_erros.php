<div class="title">Desafio dos 7 Erros</div>

<?php
interface Template {
     function metodo1();
     public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template {
    public function metodo3() {
        echo "Estou funcionando. <br>";
    }
    function metodo1() {
        echo 'Hello World! <br>';
    }
    function metodo2($parametro) {
        echo 'Hello Woooooorld! <br>';
    }
}

class Classe extends ClasseAbstrata {
     function __construct($parametro) {
        echo 'Criado <br>';
     }
}

$exemplo = new Classe(5);
$exemplo->metodo1();
$exemplo->metodo2(1);
$exemplo->metodo3();