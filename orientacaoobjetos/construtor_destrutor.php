<div class="title">Construtor & Destrutor</div>

<?php
print('<p class="title">
    function <b>__construct($nome)</b> 
    <br>
    // É o <b>construtor</b> de objetos, ele é chamado na hora de criar um novo objeto
    baseado em uma classe, ou seja, ele que diz quais parâmetros ou valores
    o objeto precisa ter.
    <br>
     Válido mencionar, que ao criar um objeto para chamar o construtor, usamos o mesmo
    nome da <b>classe</b> e não o nome do construtor.
</p>');
class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade) { // Construct é o construtor
        echo 'Construtor Invocado! <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }
    function __destruct() { // Destrutor
        echo 'Objeto apagado.'; //Por algum motivo o echo sai no fim do footer.
    } 


    public function apresentar() {
        return "{$this->nome}, {$this->idade} anos. <br>";
    }
}

$pessoa1 = new Pessoa('João Carlos', 19);
echo $pessoa1->apresentar(); 
unset($pessoa1);

echo '<hr>';

$pessoa2 = new Pessoa('Maria Clara', 48);
echo $pessoa2->apresentar(); 
$pessoa2 = null; // Também ativa o destrutor.