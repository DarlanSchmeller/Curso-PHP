<div class="title">Polimorfismo</div>

<?php
abstract class Comida {
    public $peso;
}


class Arroz extends Comida {

}
class ArrozAGrega extends Arroz {

}
class Feijao extends Comida {

}
class Sorvete extends Comida {

}
// Polimorfismo basicamente vem deste exemplo de comida
// Comida pode ter diversas formas, sendo arroz, sorvete etc,
// ou seja múltiplas formas que a comida pode assumir.

class Pessoa {
    public $peso;

    function __construct($peso) {
        $this->peso = $peso;
    }
    public function comer(Arroz $comida) {
        $this->peso += $comida->peso;
    }
}

$c1 = new Arroz();
$c1->peso = 0.65;

$c2 = new ArrozAGrega();
$c2->peso = 0.25;

$p = new Pessoa(83.45);
$p->comer($c1);
$p->comer($c2);
echo $p->peso;

