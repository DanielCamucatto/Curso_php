<div class="titulo">Include Função</div>
<?php
echo 'Carregando: include_funcao'; 

function carregarArquivo(){
    include ('include_arquivo.php');

    echo $var . '<br>'; 
    echo soma(2,5).'!<br>';
}
echo 'Novamente no arquivo include_funcao<br>';
carregarArquivo();
