<?php 

namespace Nome\Bem\Grande;

echo 'Namespace do Arquivo sendo carregado: "' . __NAMESPACE__ . '" <br>';

const CONSTANTE = 'Sou uma constante de outro arquivo. :D';
function soma($a, $b) {
    return ($a + $b);
}

class Classe {
    public $var;

    public function func() {
        echo __NAMESPACE__ 
        . ' -> ' .
        __CLASS__ 
        . ' -> ' .
        __METHOD__ 
        . '<br>';
    }
}