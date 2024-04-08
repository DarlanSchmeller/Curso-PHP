<div class="title">Membros Estáticos</div>

<?php
print('<p class="title">
<b>static $atributoEstatico;</b>
// Significa que, independentemente de quantas instâncias (objetos) dessa classe você crie, 
a variável estática será compartilhada entre todas elas e existe apenas uma cópia dela na memória.
</p>');

print('<p class="title">
<b>Acessando Atributos Estáticos</b>
<br>
<br>
<b>self::$nome</b> // Este é o metodo para acessar um atributo estático de uma classe, não é possível utilizar
interpolação, sendo necessário uso de concatenação, válido mencionar que o método do $this->nome não 
funciona também.
</p>');
class A {
    public $naoStatic = 'Variável de Instância';
    public static $static = 'Variável de Classe (estática).'; // Static significa que este atributo
    // existe apenas dentro da classe, não sendo herdado por herança.

    public function mostrarA() {
        echo "Não Estática = {$this->naoStatic} <br>";;
        echo "Estático = {$this->static} // Tentativa 1<br>";
        echo "Estático = {self::$static} // Tentativa 2<br>";
        echo "Estático = " . self::$static . ' // Tentativa 3<br>'; // Jeito correto de acessar
        // atributos estáticos, concatenação não funciona e o $this também não.
    }
    
    public static function mostrarStaticA() {
         // echo "Não Estática = {$this->naoStatic} <br>"; // Não funciona o $this pois a função é estática
        echo "Estática = {$static} <br>";
        echo "Estática = " . self::$static . '<br>';
    }
}

$objetoA = new A();
$objetoA->mostrarA();
echo '<hr>'; 

// $objetoA->mostrarStaticA(); 
echo A::mostrarStaticA(), '<br>'; // Forma correta de acessar função estática (da classe), onde é 
// acessado diretamente da classe.