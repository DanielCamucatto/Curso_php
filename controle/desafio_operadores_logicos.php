<div class="titulo">Desafio Operadores Lógicos</div>

 <h2>Desafio</h2>
<br> Construa a lógica
<p> Dois trabalhos  -> terça e quinta <br>
          Se os dois forem concluidos -> tv 50` e sorvete,
          Se apenas um for executado -> tv 32` e sorvete, 
          Se nenhum for executado  -> fica em casa mais saudavel    
</p>
<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (terça):</label>
        <select name="t1" id="t1">
            <option value="0"> Não executado</option>
            <option value="1">Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (quinta):</label>
        <select name="t2" id="t2">
            <option value="0"> Não executado</option>
            <option value="1">Executado</option>
        </select>
    </div>
    <button type='submit'>executar</button>
</form>
<style>
button, select{
    font-size: 1.5rem;
}
</style>


<?php
    $t1 = $_POST['t1']; 
    $t2 = $_POST['t2']; 
    // var_dump($t1);
    // var_dump($t2);

    if( $t1 && $t2 != 0){
        echo 'Vamos comprar uma televisão  de 50 e tomar sorvete'; 
    }elseif( $t1 xor $t2){
        echo 'Vamos comprar uma televisão de 32 e tomar sorvete'; 
    }else{
        echo 'Vamos ficar em casa';
    }
    
?>