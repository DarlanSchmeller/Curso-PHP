<div class="title">Desafio Classe Data</div>

<?php
class Data {
    public $dia = 1;
    public $mes = 'Janeiro';
    public $ano = 1000;
    public function calendario() {
        return "({$this -> dia}/{$this -> mes}/{$this -> ano}) ";
    }
}

$atual = new Data();  // Cria um novo objeto, cada objeto tem seus próprios valores.
$atual -> dia = '04';
$atual -> mes = '04';
$atual -> ano = '2024';

echo $atual -> calendario(), '<br>';