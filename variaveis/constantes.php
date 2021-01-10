<div class="titulo">Constantes</div>
<?php
define('TAXA_DE_JUROS', 5.9); //define uma constante, por padrão as constantes são defindas em letras maiuculas  
echo'<br> Juros '. TAXA_DE_JUROS;
const NOVA_TAXA = 2.5; // outra forma de declarar uma constante 
echo "<br> constantes padrões no php";
echo '<br>'. __CLASS__;
echo '<br>'. __DIR__;
echo '<br>'. __FILE__; 
echo '<br>'. __LINE__; 
echo '<br>'. __NAMESPACE__;
?>