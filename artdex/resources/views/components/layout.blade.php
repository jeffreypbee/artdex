<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/1b886f8acb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style.css">
    <title>Artdex</title>
</head>
<body>
    <header>
        <h1>the ARTDEX</h1>
        <nav> 
            <a href="/"><i class="fa-solid fa-house"></i> Home</a>
            <a href="/dex"><i class="fa-solid fa-book"></i> Dex</a>
            <a href="/stats"><i class="fa-solid fa-chart-simple"></i> Stats</a>
        </nav>
        
    </header>

    <main>
        {{$slot}}
    </main>

    <footer>
        Copyright &copy; {{date('Y')}} Jeffrey Bee
    </footer>
</body>
</html>
