<div class="titulo">Operadores Logicos</div>
<?php
var_dump(true); 
echo '<br>';
var_dump(!true); 

echo '<p>Tabela verdade AND (E) </p>';
var_dump(true && true); 
var_dump(true && false); 
var_dump(false && true); 
var_dump(false && false); 
echo '<br>';
var_dump(true and true); 
var_dump(true and false); 
var_dump(false and true); 
var_dump(false and false); 
echo '<br>';

echo '<p> Tabela verdade OR (ou)</p>'; 
var_dump(true || true ); 
var_dump(true || false ); 
var_dump(false || true ); 
var_dump(false || false ); 
echo '<br>';
var_dump(true or true ); 
var_dump(true or false ); 
var_dump(false or true ); 
var_dump(false or false ); 
echo '<br>';
echo 'Tabela verdade XOR (ou exclusivo)';
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);
echo '<br>';
var_dump(true != true);
var_dump(true != false);
var_dump(false !=true);
var_dump(false != false);

