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
        <h1>jeffreypbee's Artdex</h1>
        <a href="/dex">Dex</a>
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

:root {
    --darkergray: #111;
    --darkgray: #222;
    --gray: #333;
    --white: #eee;
    --lightblue: #66aaff;
}

body {
    background: linear-gradient(var(--darkgray), var(--darkergray));
    color: var(--white);
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    margin: 0;
    padding: 0;
    display: grid;
    height: 100vh;
    grid-template-rows: auto 1fr auto;
    grid-template-areas: 'header'
                        'main'
                        'footer';
}

header {
    grid-area: header;
    display: flex;
    flex-direction: column;
    align-items: center;
    border-bottom: 1px solid var(--gray);
}

header h1 {
    margin: 0;
    padding: 0;
}

main {
    grid-area: main;
    display: flex;
    justify-content: center;
    padding: 10px;
}

footer {
    grid-area: footer;
    display: flex;
    justify-content: center;
    align-items: center;
}

a {
    color: var(--lightblue);
    text-decoration: none;
}

</style>