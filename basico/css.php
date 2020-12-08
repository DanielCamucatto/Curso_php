<div class="titulo">Integracao CSS</div>

<h1 center>
    <?php
        echo 'Olá '; 
        echo '<small>'; 
        echo 'Mundo!'; 
        echo '</small>';
    ?>
</h1>
<?= "<div center azul> Gerando uma div dentro do PHP</div>"?> 
<br>
<div center><button><?= "legal" ?></button></div>

<style>
    button{
        padding: 5px <?= 2 * 10?>;
        background-color: #4286f4;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }

    [center]{
        display: flex;
        justify-content: center;
    }
    [azul]{
        color: #4286f4;
    }
    [dobro]{
        font-size: 2rem;
    }
</style>