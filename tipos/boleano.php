<div class="titulo">Tipo Boleano</div>

<?php

echo TRUE, '<br>'; // o valor true será convertido para 1
echo false; // o valor false não será apresentado 

echo is_bool(false), '<br>'; // is_bool() retorna se existe um valor boleano  
echo is_bool(true);

echo '<p> Regras para conversão</p>';
echo '<br>' . var_dump((bool)0); // apenas zero será convertido para false
echo '<br>' . var_dump((bool)-1);
echo '<br>' . var_dump((bool)20);
echo '<br>' . var_dump((bool)0.0000000001);
echo '<br>' . var_dump((bool)0.0);
echo '<br>' . var_dump((bool)"");
echo '<br>' . var_dump((bool)" ");




?>