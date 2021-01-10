<div class="titulo">Atribuições</div>

<?php

$titulo = 'atribuição'; // o sinal de = é para atribuir um valor a uma determinada váriavel

$numero = 10; // atribuição simples
echo '<br>' . $numero; 
$numero = $numero - 1; // atribuição subtrativa 
echo '<br>'. $numero;
$numero = $numero + 1.5; // atribuição aditiva
echo '<br>'. $numero;

$numero--; // atribuição de decremento pós-fix
echo '<br>'. $numero;
--$numero; // atribuição  de decremento pre-fix    
echo '<br>'. $numero;
$numero++; // atribuição de incremento pós-fix
echo '<br>'. $numero;
++$numero; // atribuição de incremento pre-fix
echo '<br>'. $numero;
$numero -= 5 // atribuição subtrativa, tira 5 unidades do valor do numero
echo '<br>'. $numero;
$numero += 5 // atribuição aditiva, aumenta 5 no valor do numero
echo '<br>'. $numero;
$numero *= 10 // atribuição multilicativa, ibidem 
echo '<br>'. $numero;
$numero /= 2 // atribuição divisisa, ibidem
echo '<br>'. $numero;
$numero %= 6; // atribuição de modulo
echo '<br>'. $numero;
$numero **= 4; // atribuição de modulo, ibidem 
echo '<br>'. $numero;
$numero .= 4; // apenas concatena o numero ao valor da variavel

// atribuição em strings 
$texto = 'esse é um texto'; 
echo '<br>'. $texto;
$texto = $texto . 'qualquer'; // concatenação de strings 
echo '<br>'. $texto;
$texto .= 'de verdade!'; 
echo '<br>'. $texto;

// valor padrão da variavel
$variavel_inexistente = 'valor existente'; 
echo '<br>'.$variavel_inexistente;
$valor = $variavel_inexistente ?? 'valor default'; // seta um valor padrão caso a variavel não tenha um 
echo '<br>'. $valor;
?>