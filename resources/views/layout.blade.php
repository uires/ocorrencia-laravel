<html>
    <head>
        <meta charset="UTF-8" />
        <title> Ocorrências - @yield('titulo') </title>
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/custom.css">
    </head>
    <body>
        <header class="header-class">
            <nav>
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ocorrencia/criar">Criar Ocorrência</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ocorrencia/listar">Ocorrências</a>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="container">
                @yield('conteudo')        
            </div>
        </main>
        <footer class="footer-class"></footer>
    </body>
</html>