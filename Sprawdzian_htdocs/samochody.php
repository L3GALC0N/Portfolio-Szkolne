<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>WYPOŻYCZALNIA SAMOCHODÓW</title>
    <link rel="stylesheet" href="samochody.css">
</head>
<body>

<div id="logo">
    <h2>WYPOŻYCZALNIA SAMOCHODÓW</h2>
</div>

<div id="menu">
    <a href="samochody.php">Strona startowa</a>
    <a href="volkswagen.php">Samochody Volkswagen</a>
    <a href="audi.php">Samochody Audi</a>
    <a href="skoda.php">Samochody Skoda</a>
</div>

<div id="lewy">
    
    <?php 
        $polaczenie = mysqli_connect("localhost","root","","wypozyczalnia");
        $zapytanie = "select s.marka, s.model, s.rok_produkcji, w.Data_wypozycz from samochody s, wypozyczenia w where s.ID_samochodu=w.ID_samochodu AND rok_produkcji like 2000";
        $query = mysqli_query($polaczenie,$zapytanie);

        while($wynik = mysqli_fetch_array($query)){
            echo "<br><b>Marka: ".$wynik[0]." Model: ".$wynik[1]."</b><br><br>";
            echo "Rok produkcji: ".$wynik[2]." Data wypożyczenia: ".$wynik[3];
            echo "<br><hr>";
        }

        mysqli_close($polaczenie);
    ?>


</div>

<div id="prawy">
    <h1>AUTA</h1>
    <a href="mailto:wypozyczalnia@wp.pl">Napisz do nas</a><br>
    <img src="auto.png" alt="auto w kolorze czerwonym">
</div> 

<div id="footer">
    Stronę o wypożyczalni przygotował: 03291703694
</div>


</body>
</html>