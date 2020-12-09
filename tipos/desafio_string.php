<div class="titulo">Desafio String</div>

<?php

echo '<h2>Enunciado</h2>';
echo '<p>Avaliando os métodos da documentação da string, qual o método que a posição do texto "abc" na string "!AbcBcabc" retorne 1</p>';


echo strpos("!AbcBcabc", 'abc' ). '<br>';
echo stripos("!AbcBcabc", 'abc' ) . '<br>'; // i = ignorar case sensitive  

?>