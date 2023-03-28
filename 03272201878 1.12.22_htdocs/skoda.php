<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="samochody.css"/>
    <title>wypożyczalnia samochodów</title>
</head>
<body>
    <div id="menu">
        <a href="samochody.php">Strona Główna</a>
        <a href="volkswagen.php">Samochody Volkswagen</a>
        <a href="audi.php">Samochody Audi</a>
        <a href="skoda.php">Samochody Skoda</a>
    </div>

    <div id="logo">
        <h2>WYPOŻYCZALNIA SAMOCHODÓW</h2>
    </div>

    <div id="lewy">
        <h1>Klienci wypożyczalni samochodow</h1>
        <form method="post" action="klienci.php">
            <input type="text" id="imie">Imie</input><br>
            <input type="text" id="nazwisko">Nazwisko</input><br>
            <input type="number" id="pesel">PESEL</input><br>
            <input type="submit"/> <input type="reset"/>
        </form>
    </div>

    <div id="prawy">
        <img src="skoda.png" alt="auto w kolorze ciemny brąz"/>
    </div>

    <footer>
        Stronę o wypożyczalni przygotował: 03272201878
    </footer>
</body>
</html>