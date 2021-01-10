<div class="titulo">Desafio Switch</div>

<form action="" method="post">
    <input type="text" name="param" id="">
        <select name="conversao" id="conversao">
            <option value=""></option>
            <option value="km-milha">Km > Milha </option>
            <option value="milha-km">Milha > Km </option>
            <option value="metro-km">Metros > Km </option>
            <option value="km-metro">Km > Metros </option>
            <option value="˚F-˚C">Fahrenheit > Celsius </option>
            <option value="˚C-˚F"> Celsius > Fahrenheit </option>
    </select>
    <button>Calcular</button>
</form>

<style>
form > *{
    font-size: 1.5rem
}
</style>

<?php
$param = $_POST['param'] ?? 0;
$km = ''; 
$milha = ''; 
$metro = ''; 
$f = '';
$c = '';

switch($_POST['conversao']){
    case 'km-milha':
        $km = $param * 0.621371 ;
        $msg = "O resultado de $param km é $km Milhas";
        break;
   case 'milha-km':
        $milha = $param / 0.621371;
        $msg = "O resultado de $param milhas é $milha Quilometros ";
        break;
    case 'metro-km':
        $metro = $param / 1000; 
        $msg = "O resultado de $param metros é $metro Quilometros";
        break;
    case 'km-metro': 
        $km = $param * 1000; 
        $msg = "O resultado de $param em quilometros é $km Metros";
        break;
    case '˚F-˚C':
        $f = ($param -32) / 1.8000;
        $msg = "O resultado de $param ˚F é $f ˚C"; 
        break;
    case '˚C-˚F': 
        $c = ($param * 1.8000) + 32;
        $msg = "O resultado de $param ˚C é $c ˚F";
        break;
}
echo $msg;