<div class="title">Traits #01</div>

<?php
print('<p class="title">
trait validacao { }
<br>
<b>Traits:</b> 
// são uma forma de reutilização de código que permite que certos métodos e propriedades
 sejam compartilhados entre classes de forma independente da hierarquia de herança. Traits 
 são uma espécie de mecanismo de composição horizontal, permitindo que uma classe use métodos
  de uma ou mais traits.
</p>');
trait validacao {
    public $a = 'Valor A';
    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public $b = 'Valor B <br>';
    private $c = 'Valor Privado <br>';
    public function validarStringMelhor($str) {
        return isset($str) && trim($str);
    }
}

class Usuario {
    use validacao, validacaoMelhor;
    public function imprimirValorC() {
        echo $this->c, '<br>';
    }
}

// var_dump(validacao->validarString(''));

$usuario = new Usuario();
var_dump($usuario->validarString('teste'));
echo '<br>';
var_dump($usuario->validarStringMelhor(''));
echo '<br>';
echo $usuario->a, '<br>' ,$usuario->b;
echo $usuario->imprimirValorC();