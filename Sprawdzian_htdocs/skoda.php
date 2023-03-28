<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>WYPOŻYCZALNIA SAMOCHODÓW</title>
    <link rel="stylesheet" href="samochody.css">
</head>
<body>

<div id="menu">
    <a href="samochody.php">Strona startowa</a>
    <a href="volkswagen.php">Samochody Volkswagen</a>
    <a href="audi.php">Samochody Audi</a>
    <a href="skoda.php">Samochody Skoda</a>
</div>

<div id="logo">
    <h2>WYPOŻYCZALNIA SAMOCHODÓW</h2>
</div>

<div id="lewy">
    <h1>Klienci wypożyczalni samochodów</h1>
    <form method="POST" action="klienci.php">

        Nazwisko: <input type="text" name="nazwisko"><br>
        Imię: <input type="text" name="imie"><br>
        PESEL: <input type="number" name="PESEL"><br>
        <button type="reset">WYCZYŚĆ</button>
        <button type="submit">WYŚLIJ</button>

    </form>
</div>

<div id="prawy">
    <img src="skoda.png" alt="auto w kolorze ciemny brąz">
</div> 

<div id="footer">
    Stronę o wypożyczalni przygotował: 03291703694
</div>


</body>
</html>
