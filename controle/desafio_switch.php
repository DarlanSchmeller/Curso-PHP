<div class="title">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param" value="0">
    <select name="conversion" id="conversion">
        <option value="km-milha">KM > Milha</option>
        <option value="milha-km">Milha > KM</option>
        <option value="metro-km">Metros > KM</option>
        <option value="km-metro">KM > Metros</option>
        <option value="celsius-fahrenheit">Celsius > Fahrenheit</option>
        <option value="fahrenheit-celsius">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }
        form > * {
            font-size: 1.8rem;
            text-align: center;
            margin: 10px;
            width: 250px;
            
        }
        form > input {
            box-shadow: inset 0px 0px 4px 3px rgba(0,0,0,0.5)
            
        }
</style>

<?php
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CEL_FAH = 1.8;
$conversiontype = $_POST['conversion'];
$valorinput = $_POST['param'];


switch($conversiontype) {
    case 'km-milha':
        $result = $valorinput * FATOR_KM_MILHA;
        echo "<p class='title'>$valorinput KM(s) = $result Milha(s)";
        break;
    case 'milha-km':
        $result = $valorinput / FATOR_KM_MILHA;
        echo "<p class='title'>$valorinput Milha(s) = $result KM(s)";
        break;
    case 'metro-km':
        $result = $valorinput / FATOR_METRO_KM;
        echo "<p class='title'>$valorinput Metro(s) = $result KM(s)";
        break;
    case 'km-metro':
        $result = $valorinput * FATOR_METRO_KM;
        echo "<p class='title'>$valorinput KM(s) = $result Metro(s)";
        break;
    case 'celsius-fahrenheit':
        $result = $valorinput * FATOR_CEL_FAH + 32;
        echo "<p class='title'>{$valorinput}° Celsius = {$result}° Fahrenheit";
        break;
    case 'fahrenheit-celsius':
        $result = ($valorinput - 32) / FATOR_CEL_FAH;
        echo "<p class='title'>{$valorinput}° Fahrenheit = {$result}° Celsius";
        break;
    default: 
        echo 'Nenhum valor calculado.';
        break;
}


