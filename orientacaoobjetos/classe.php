<div class="title">Primeira Classe</div>

<?php
class Cliente {
    // Atributos
    public $nome = 'Anônimo'; // Public define que o atributo está visível fora da classe.
    public $idade = 18; // Definir valor é opcional, aqui apenas definimos o valor padrão.

    public function apresentar() {
        echo "Nome: {$this -> nome} | Idade: {$this -> idade} <hr>"; // A flecha '->' é usado para acessar elementos
    } // Dentro de uma classe, permitindo você acessar sua função e comportamento.
} // $this é usado para acessar atributos de uma classe/objeto, e usa uma seta para apontar.

$c1 = new Cliente(); // New 'Classe()' cria um objeto a partir do molde da classe.
$c1 -> nome = 'Ana Silva'; // Podemos alterar atributos e atribuir valores assim.
$c1 -> idade = 24;
$c1 ->  apresentar(); // Acessa a função da Classe e executa.

$c2 = new Cliente();
$c2 -> nome = 'João Pedro';
$c2 -> idade = 35;
$c2 -> apresentar();