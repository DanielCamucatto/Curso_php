<div class="titulo">Switch</div>
<?php 

$categoria = 'SUV'; 
$carro = ''; 
$preco = '';

switch($categoria){
    case 'Luxo':
        $carro = 'Mercedes';
        $preco = 250000;
        break;
    case 'SUV':     
        $carro = 'Renegade'; 
        $preco = 80000; 
        break;
    case 'Sedan': 
        $carro = 'Etios'; 
        $preco = 33000; 
        break;
}
$precoFormatado = number_format($preco, 2, ',' , '.'); 
echo "<p>Carro: $carro<br>Preço: $precoFormatado</p>";