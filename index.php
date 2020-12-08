<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Google Font: Oswald-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>índice de Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <div class="conteudo">
                <div class="modulos">
                    <div class="modulo verde">
                        <h3>Módulo 01</h3>
                        <ul>
                            <li><a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
                            <li><a href="exercicio.php?dir=basico&file=html">Integracao HTML</a></li>
                            <li><a href="exercicio.php?dir=basico&file=css">Integracao CSS</a></li>
                            <li><a href="exercicio.php?dir=basico&file=comentarios">Comentários</a></li>
                            <li><a href="exercicio.php?dir=basico&file=desafio">Desafio</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS &copy; <?= date("Y");?>
    </footer>
</body>
</html>