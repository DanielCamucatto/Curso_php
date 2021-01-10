<div class="titulo">If Else</div>
<?php

if(true){
    echo "Serei impresso?";
}else{
    echo ' Serei impresso novamente?';
}

if (false){
    echo '<br> se for true me coloca na tela';
}else{
    echo '<br> se for false me coloca na tela';
}

if(false){
    echo 'sou verdadeiro';
}elseif(true){
    echo '<br> sou verdadeiro elseif';
}else{
    echo 'nunca serei renderizado';
}

?>