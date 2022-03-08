<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('main.css') }}">
    <title>MarketPlace</title>
</head>

<body>
    <header class="header">
        <nav>
            <ul>
                <li><a href="{{ route('site.produtos') }}"> Produtos</a></li>
                <li><a href="{{ route('site.produtos') }}"> Voltar</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <p class="texto-footer"> Feito com carinho por Felipe L :P <span> phelipes2000</span></p>
    </footer>
</body>

</html>
