<div class="titulo">Tipos de Conversoes</div>

<?php
    echo is_int(PHP_INT_MAX); // verifica se é inteiro
    
    // converter int para float
    echo '<p>Converter int para float</p>';
    echo '<br>'; 
    var_dump(PHP_INT_MAX + 1); 
    echo '<br>';  
    var_dump(1 + 1.0);
    echo '<br>';
    var_dump((float) 3); // conversão explicita, chama-se casting 
    
    // converter float para int 
    echo '<p>Converter float para int</p>';
    var_dump( (int) 2.8);
    echo '<br>'; 
    var_dump(intval(2.8, 10));
    echo '<br>'; 
    var_dump((int) round(2.8));
?>