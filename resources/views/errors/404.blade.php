<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
    <!-- css -->
    <link href="{{asset('css/404.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('imgs/devchallenges.png')}}" type="image/x-icon">
    <title>404 - Not Found</title>
</head>
<body>
<header>
    <h4>404 Not Found</h4>
</header>

<main>
    <img src="{{asset('imgs/Scarecrow.png')}}" alt="Espantalho">

    <div class="text">
        <h1>Tenho más notícias para você</h1>

        <p>
            A página que você está procurando pode ter sido removida ou está temporariamente indisponível
        </p>

        <a class="btn" href="{{route('welcome')}}">Voltar para homepage</a>
    </div>
</main>

<footer>
    <span>Criado por <a target="_blank" href="https://www.github.com/carlosaaraujo">carlosaaraujo</a> - devChallenge</span>
</footer>
</body>
</html>
