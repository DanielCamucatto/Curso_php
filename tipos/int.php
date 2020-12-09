<div class="titulo">Tipo Inteiro</div>
<!-- Ao contrario de outras linguagens de programacão no PHP so existe um tipo de interiro -->

<?php
echo 11;
echo '<br>';

var_dump(11); // função que mostra informações sobre variaveis
echo PHP_INT_MAX, '<br>'; // mostra qual é o Inteiro maximo suportado pelo PHP de acordo com a maquina que esta rodando 
echo PHP_INT_MIN, '<br>'; // mostra qual é o inteiro minimo suportado pelo PHP de acordo com a maquina que esta rodadando.

// existe a possibilidade de usar outras bases para representar os numeros inteiros 

echo 011, '<br>'; // acresentando 0 representa inteiros na base octal
echo 0b11, '<br>'; // acresetando o 0b representa o numero na base binaria  
echo 0x11, '<br>'; // acresentando o 0x representa a base exadecimal 


?>