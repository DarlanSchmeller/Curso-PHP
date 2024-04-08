<div class="title">Visibilidade</div>

<?php
class A {
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA() {
        $this->naoMostrar();
        echo '<br>';
        echo "ClasseA) Publico = {$this->publico} <br>";
        echo "ClasseA) Protegido = {$this->protegido} <br>";
        echo "ClasseA) Privado = {$this->privado} <br>";
    }

    protected function vaiPorHerança() {
        echo "Serei transmitido por herança!";
    }

    private function naoMostrar() {
        echo 'Não vou imprimir.';
    }
}

$a = new A();
$a->mostrarA();
echo $a->publico;


class B extends A {
    public function mostrarB() {
        echo "Class B) Publico = {$this->publico} <br>";
        echo "Class B) Protegido = {$this->protegido} <br>";
        echo "Class B) Privado = {$this->privado} <br>"; // Atributo privado fica na própria classe.
        
        parent::vaiPorHerança();
        echo '<br>';
    }
}

echo '<hr>';
$b = new B();
$b->mostrarB();
echo $b->publico;