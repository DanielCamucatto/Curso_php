<div class="titulo">Operadores Relacionais</div>
<?php
echo 'Operadores relacionais';
echo '<br> == igualdade'; 
echo '<br> > maior que'; 
echo '<br> < menor que';
echo '<br> maior/ menor igual que  >= <='; 
echo '<br> != diferente de'; 
echo '<br> <> diferente de ';

var_dump(1 == 1);
var_dump(1 > 1) ;
var_dump(1 >= 1) ;
var_dump(4 <= 23) ;
var_dump(1 <= 7) ;
var_dump(1 != 1) ;
var_dump(1 <> 1) ;

echo '<h2>operador spaceship</h2>'; 
echo '<br><p>O operador espaceship serve para ordenar os numeros, se for 1 os numero da esquerda é maior, se for 0 os numeros são iguais, se for -1 o numero da esquerda é manor</p>';
var_dump(500 <=> 5);
echo '<br>';
var_dump(50 <=> 50);
echo '<br>';
var_dump(5 <=> 50);