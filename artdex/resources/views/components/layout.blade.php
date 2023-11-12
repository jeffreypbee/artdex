<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artdex</title>
</head>
<body>
    <header>
        <h1>Artdex</h1>
        <a href="/art">Art</a>
    </header>

    <main>
        {{$slot}}
    </main>

    <footer>
        Copyright &copy; {{date('Y')}} Jeffrey Bee
    </footer>
</body>
</html>

<style>

body {
    display: grid;
    height: 100vh;
    grid-template-rows: auto 1fr auto;
    grid-template-areas: 'header'
                        'main'
                        'footer';
}

header {
    grid-area: header;
}

main {
    grid-area: main;
}

footer {
    grid-area: footer;
}

</style>