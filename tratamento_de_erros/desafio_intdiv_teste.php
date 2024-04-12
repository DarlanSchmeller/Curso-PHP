<?php namespace Origem; 
class NaoInteiroException extends \Exception {

}
function intdivisao($a, $b) {
    if ($b === 0) {
        throw new \DivisionByZeroError(); // Esta linha cria um novo erro, força a criar um erro.
                // A barra '\' é usada para acessar o namespace do PHP, visto que criamos um customizado.
    }

    if ($a % $b > 0) {
        throw new NaoInteiroException(); // Cria um novo erro na classe que extendeu os erros do PHP.

    }
}