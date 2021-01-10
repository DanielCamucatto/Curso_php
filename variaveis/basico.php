<div class="titulo">Variáveis</div>

<?php
$numeroA = 13; // obrigatóriamente toda a variavel em PHP começa com $ 
echo $numeroA;
echo '<br>';

// é possivel fazer operacoes matematicas com variáveis 
$a = 3;
$b = 16;
$soma = $a + $b; 
echo $soma;
echo '<br>'; 

// é possivel ver se uma variavel esta setada 
echo isset($soma);
echo '<br>';

// é possivel tirar o set de uma variavel 
unset($soma);
var_dump($soma);

// em PHP é possível alterar o valor da variável 
$variavel = 10; 
echo '<br>' . $variavel;
$variavel = 'agora sou uma string'; 
echo '<br>'. $variavel;

// regras de nomeclaturas para nomes de variaveis 
$var = 'valido'; 
$var2 = 'valido'; 
$VAR3 = 'valido'; 
$_var_4 = 'valido';
$vâr5 = 'valido'; // não aconselhavel 
//$6var = 'invalido'; 
//$%var7 = 'invalido';
//$var8% = 'invalido';