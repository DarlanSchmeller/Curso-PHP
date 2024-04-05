<div class="title">Herança</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
        echo 'Pessoa Criada! <br>';
    }

    function __destruct() {
        echo 'Pessoa Deletada! <br>';
    }

    public function apresentar() {
        echo "Bem vindo {$this->nome}, você possui {$this->idade} anos.";
    } // Sempre bom usar return e exibir o conteúdo usando echo externamente da função.
}
// SuperClasse e Classe Pai/Parent é a mesma coisa.
// -------------------------------------------------

$pessoa1 = new Pessoa('Carlos Roberto', '19');
//$pessoa1 -> nome = "Carlos"; // Jeito "errado" de se alterar atributos do objeto.
echo $pessoa1 -> apresentar(); // Sempre lembrar de utilizar -> para acessar itens internos
// da classe/objeto.
echo '<br>';
unset($pessoa1);

class Usuario extends Pessoa { // Usuario é a subclasse, Pessoa classe pai, 
 // subclasse é mais especifico e a classe pai sendo mais genérica.
    public $login;

    function __construct($nome, $idade, $login) {
        // $this->nome = $nome; // Passando os parâmetros pras variaveis do Objeto.
        // $this->idade = $idade;
        parent::__construct($nome, $idade);
        $this->login = $login;
        echo 'Usuário Criado! <br>';
    }

    function __destruct() {
        echo 'Usuário apagado. <br>';
        // parent::__destruct();
    }
     
    public function apresentar() {
        echo "// Usuário @{$this->nome}, login: {$this->login} | ";
        parent::apresentar(); // Usamos parent:: para chamar alguma função da classe Pai.
    }
} // Extends significa que a subclasse Usuário terá tudo oque a Pessoa tem, mais alguma coisa.

echo '<hr>';
$usuario1 = new Usuario('Carlos_Roberto', 19, 'Carlos123');
echo $usuario1 -> apresentar();//Caso não crie uma nova funçao apresentar, ele herda de Pessoa
echo '<br>';
unset($usuario1);
echo '<hr>';