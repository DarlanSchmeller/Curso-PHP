<div class="title">Métodos Mágicos</div>

<?php
class Pessoa {
    public $nome;
    public $idade;
    function __construct($nome, $idade) {
        echo 'Construtor Invocado! <br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }
    function __destruct() {
        echo 'Destruido! <br>';
    }
    public function __toString() {
        return "{$this->nome} tem {$this->idade} anos. <br>";
    }
    public function apresentar() {
        echo $this . "<br>";
    }
    public function __get($atrib) {
        echo "Lendo atributo não declarado: {$atrib} <br>";
        return 123 . '<br>';
    }
    public function __set($atrib, $valor) {
        echo "Alterando atributo não declarado: ({$atrib}/{$valor}) <br>";
    }
    public function __call($metodo, $params) {
        echo "Tentando executar método '{$metodo}'.";
        echo " Com os parametros: <b> ";
        print_r($params);
        echo '</b>';
    }
}

$pessoa = new Pessoa('Ricardo',24); // __construct
echo $pessoa->__toString(); // Chamando o __toString
$pessoa->apresentar(); // Chamando o __toString
$pessoa->nome = 'Reinaldo'; 
echo $pessoa; // Chamando o __toString

echo '<br>';
$pessoa->nomeCompleto = 'Muito Legal!!!'; // __set
echo $pessoa->nomeCompleto; // Acessa o atributo diretamente sem o __call
var_dump($pessoa->nomeCompleto); 

echo '<br>';

$pessoa->exec(1, 'Teste', true, [1,2,3]); // Chama o __call pos método não existe
echo '<br>';
$pessoa = null; // __destruct