<div class='titulo'>Intepolação</div>

<?php

$num = 10; 
echo $num; 
echo '<br> $num'; //  as ' ' irá imprimir numero como uma string
echo "<br> $num"; // as " " irá imprimir a variável $num

$text = "A sua nota é: $num";
echo "<br> $text";

$objeto = 'canetas';
echo "<br> Eu tenho 5 $objetos"; 
echo "<br> Eu tenho 5 {$objeto}s";
echo "<br> Eu tenho 5 {  $objeto}s , mas perdi 3 {$objeto  }s"  
?>