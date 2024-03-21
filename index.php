<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
    <link rel="stylesheet" href="assets/CSS/style.css">
    <script src="script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>


<body>

    <header>
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>

    <main>
        <div class="content">
            <nav class="modules">

                <div class="module green">
                    <h3>Módulo 01 - Básico</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">
                            Olá PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=html">
                            Integração HTML</a></li>
                        <li><a href="exercicio.php?dir=basico&file=css">
                            Integração CSS</a></li>
                        <li><a href="exercicio.php?dir=basico&file=comentarios">
                            Comentários PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=desafio">
                            Desafio PHP</a></li>
                    </ul>
                </div>
                <div class="module red">
                    <h3>Módulo 02 - Tipos Básicos</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=inteiro">
                            Inteiro</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=float">
                            Float</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=aritmetica">
                            Aritméticas</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_precedencia">Desafio Precedência</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=string">
                            String</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafiostring">
                            Desafio String</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=booleano">
                            Booleano</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=conversoes">
                            Conversões</a></li>
                    </ul>
                </div>
                
                <div class="module blue">
                    <h3>Módulo 03 - Variáveis</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=variaveis&file=basico">
                            Básico
                        </a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafioequacao">
                            Desafio Equação
                        </a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=atribuicoes">
                            Atribuições
                        </a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=interpolacao">
                            Interpolação
                        </a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=variaveisvariaveis">
                            Variáveis Variáveis
                        </a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafiovariaveisvariaveis">
                            Desafio Variáveis Variáveis
                        </a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=valor_referencia">
                            Valor VS Referência
                        </a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=Constantes">
                            Constantes
                        </a></li>
                       
                    </ul>
                </div>
                <div class="module purple">
                    <h3>Módulo 04 - Básico</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>

                <div class="module orange">
                    <h3>Módulo 05 - Básico</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="module darkgreen">
                    <h3>Módulo 06 - Básico</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                
                <div class="module magenta">
                    <h3>Módulo 07 - Básico</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="module dark">
                    <h3>Módulo 08 - Básico</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="module yellow">
                    <h3>Módulo 09 - Básico</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>

            </nav>
        </div>
    </main>

    <footer>
        <div>
           <p id="message">Estudos por Darlan Schmeller</p>
        </div>
        MMTecnologia © <?=  date('Y'); ?>
    </footer>

</body>

</html>