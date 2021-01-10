<div class="titulo">Include Once</div>
<?php

include("include_once_arquivo.php"); 
require('include_once_arquivo.php'); 

$variavel = 'variavel Alterada';
echo "Variavel = {$variavel}.<br>";

include_once('include_once_arquivo.php'); 
echo "Variável = '{$variavel}'.<br>"; 

require_once('include_once_arquivo.php'); 
echo "Variavel = '{$variavel}'.<br>";