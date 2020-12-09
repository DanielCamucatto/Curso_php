<div class="titulo">Tipo String</div>

<?php

echo 'Eu sou uma string', '<br>';
var_dump("Eu também"); 
echo '<br>';

// cocatenação 

echo '<h2>Concatenação de Strings</h2>'; 
echo '<br>'; 
echo "Nós Também " . 'Somos';
echo '<br>', "Também aceito", " virgulas", '<br>';
echo '"teste"'. "'Teste'".'\'Teste\''. "\"teste\"". "\\";
print( "<br> também existe a função print"); // alternativa para o echo, função usada para imprimir na tela 

print "<br> também existe a função print sem parenteses"; // alternativa para o echo, função usada para imprimir na tela 

echo '<h2>Algumas funções </h2>'; 
echo '<br>'. strtoupper('maximizado'); // todas as palavras maisculas
echo '<br>'. strtolower('MINIMIZADO'); // todas as palavras minisculas
echo '<br>'. ucfirst('só a first letra maiucula'); // so a primeira palavra maiuscula 
echo '<br>' . ucwords('todas as palavras'); // todas as primeiras letras maisculas
echo '<br>' . strlen('Quantas letras?'); // conta quantas letras tem uma string
echo '<br>' . mb_strlen("Eu também", "utf-8"); // calcula a string com utf-8
echo '<br>' . substr('Só uma parte mesmo',7,6); // divide e corta uma string em seu indice
echo '<br>' . str_replace('isso','aquilo', 'trocar isso'); // procure uma palavra do primeiro paramentro e sunbstituia para o segundo parametro, dentro da frase do terceiro paramentro. 
