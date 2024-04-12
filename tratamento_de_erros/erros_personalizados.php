<div class="title">Erros personalizados</div>

<?php
class FaixaEtariaException extends Exception {
    // Uma classe normal herda as excessões do PHP.
    public function __construct($message,
     $code = 0,
    $previous = null) {
        // Construtor customizado com parâmetros diferentes.
        echo "Erro personalizado. <br>";
        parent::__construct($message, $code, $previous);
    }

     function calcularTempoAposentadoria($idade) { 
        // função normal, só roda no foreach com try.
        if($idade < 18) {
            throw new FaixaEtariaException('Ainda está muito longe.'); 
            // Cria um valor/exceção dentro da classe exceção que criamos
        }
        if($idade > 70) {
            throw new FaixaEtariaException('Deveria estar aposentado. <br>');
        }
        return (70 - $idade);
    }

} // O parâmetro previous se refere a excessão anterior, as vezes um erro pode ser causado por outra excessão.
// exemplo, o usuario nao logou pois o banco de dados deu um erro/excessão etc..

$idadesAvaliadas = [15, 30, 60, 80];
$exception = new FaixaEtariaException("Teste");

foreach ($idadesAvaliadas as $idades) {
    try { 
        $tempoRestante = $exception->calcularTempoAposentadoria($idades);
        echo "Idade: $idades, $tempoRestante anos restantes <hr>";
    } catch(FaixaEtariaException $a) {
        echo "Não foi possível calcular para $idades anos. <hr>";
        echo "Motivo: {$a->getMessage()} <br>";
    }
}

echo "<br> Fim!";