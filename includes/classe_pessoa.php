<?php
echo 'Carregando: classe_pessoa.php';
class Pessoa {
    public $peso;

    function __construct($peso) {
        $this->peso = $peso;
    }
    public function comer(Arroz $comida) {
        $this->peso += $comida->peso;
    }
    function __destruct() {
        echo 'A pessoa foi deletada.';
    }
}