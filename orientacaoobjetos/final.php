<div class="title">Modificador Final</div>

<?php
print('<p class="title">
<b>Final:</b> 
// O modificador final em PHP é usado para impedir que uma classe, método ou 
propriedade seja estendido, sobrescrito ou redeclarado por outras classes.
</p>');
abstract class Abstrata {
    abstract public function metodo1();

    final public function metodo2() {
        echo 'Não vou mudar <br>';
    }
}

// -- Basicamente o modificador final serve para não permitir alterações no método ou atributo independente da
// situação.

class Classe extends Abstrata {
    public function metodo1() {
        echo 'Executando método 1 <br>';
    }
    // public function metodo2() { // Cannot override Final method.
    //     echo 'Extendendo método 2 <br>';
    // }
}

$classe = new Classe(1);
$classe->metodo1();
$classe->metodo2();

final class Unica {
    public $attr = 'Valor';
}

$unica = new Unica();
echo $unica->attr;

// class Duplicata extends Unica {
//     public $att2;
// }