<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Google Font: Oswald-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/exercicios.css"> 
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
                        <h3>1.Básico</h3>
                        <ul>
                            <li><a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
                            <li><a href="exercicio.php?dir=basico&file=html">Integracao HTML</a></li>
                            <li><a href="exercicio.php?dir=basico&file=css">Integracao CSS</a></li>
                            <li><a href="exercicio.php?dir=basico&file=comentarios">Comentários</a></li>
                            <li><a href="exercicio.php?dir=basico&file=desafio">Desafio</a></li>
                        </ul>
                    </div>
                    <div class="modulo vermelho">
                        <h3>2.Tipos</h3>
                        <ul>
                            <li><a href="exercicio.php?dir=tipos&file=int">Tipo Inteiro</a></li>
                            <li><a href="exercicio.php?dir=tipos&file=float">Tipo Float</a></li>
                            <li><a href="exercicio.php?dir=tipos&file=aritmeticas">Operações Aritméticas</a></li>
                            <li><a href="exercicio.php?dir=tipos&file=desafio_precedencia">Desafio Precedência</a></li>
                            <li><a href="exercicio.php?dir=tipos&file=string">Tipo String</a></li>
                            <li><a href="exercicio.php?dir=tipos&file=desafio_string">Desafio String</a></li>
                            <li><a href="exercicio.php?dir=tipos&file=boleano">Tipo Boleano</a></li>
                            <li><a href="exercicio.php?dir=tipos&file=conversoes">Tipo de Conversões</a></li>
                        </ul>
                    </div>
                    <div class="modulo azul">
                        <h3>3.Variáveis</h3>
                        <ul>
                            <li><a href="exercicio.php?dir=variaveis&file=basico">Variáveis</a></li>
                            <li><a href="exercicio.php?dir=variaveis&file=desafio_equacao">Desafio Equação</a></li>
                            <li><a href="exercicio.php?dir=variaveis&file=atribuicoes">Atribuições</a></li>
                            <li><a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a></li>
                            <li><a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">variaveis Variáveis</a></li>
                            <li><a href="exercicio.php?dir=variaveis&file=desafio_variaveis">Desafio Variaveis</a></li>
                            <li><a href="exercicio.php?dir=variaveis&file=constantes">Contantes</a></li>
                        </ul>
                    </div>
                    <div class="modulo roxo">
                        <h3>4.Controle</h3>
                        <ul>
                            <li><a href="exercicio.php?dir=controle&file=if_else">If Else</a></li>
                            <li><a href="exercicio.php?dir=controle&file=operadores_relacionais">Operadores Relacionais</a></li>
                            <li><a href="exercicio.php?dir=controle&file=desafio_pi">Desafio PI</a></li>
                            <li><a href="exercicio.php?dir=controle&file=operadores_logicos">Operadores Logicos</a></li>
                            <li><a href="exercicio.php?dir=controle&file=desafio_operadores_logicos">Desafio Operadores Lógicos</a></li>
                            <li><a href="exercicio.php?dir=controle&file=operador_ternario">Operador Ternário</a></li>
                            <li><a href="exercicio.php?dir=controle&file=switch">Switch</a></li>
                            <li><a href="exercicio.php?dir=controle&file=desafio_switch">Desafio Switch</a></li>
                        </ul>
                    </div>
                    <div class="modulo roxo">
                        <h3>11.Includes</h3>
                        <ul>
                            <li><a href="exercicio.php?dir=includes&file=include">Includes</a></li>
                            <li><a href="exercicio.php?dir=includes&file=include_funcao">Include Função</a></li>
                            <li><a href="exercicio.php?dir=includes&file=include_require">Include VS Require</a></li>
                            <li><a href="exercicio.php?dir=includes&file=require_return">Require & Return</a></li>
                            <li><a href="exercicio.php?dir=includes&file=include_once">Include Once</a></li>
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