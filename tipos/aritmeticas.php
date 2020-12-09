<div class="aritimeticas">Operações Aritméticas</div>

<?php

echo 1 +1 , '<br>'; 
var_dump(1 + 1);
var_dump(1 + 1.0);
echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>'; 
echo 2 * 5, '<br>';
echo 7 / 4, '<br>'; 
echo intdiv(7,4), '<br>'; // faz a divisão ignorando os quebrados, apenas mostrando o inteiro
echo round(7 / 4), '<br>'; // aredonda os numeros inteiros
echo 7 % 4, '<br>'; // apresenta o resto da divisão entre dois numeros
echo 4 ** 2, '<br>'; // exponenciacao 

// precedencia de operadores
// () -> ** -> / * % -> + -
echo '<h2>Procedência</h2>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 2;
?>