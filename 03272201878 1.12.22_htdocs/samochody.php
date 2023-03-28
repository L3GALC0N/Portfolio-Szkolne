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
        <?php
        
            $conn = mysqli_connect('localhost','root','','wypozyczalnia');

            $temp = mysqli_query($conn, "SELECT sa.Marka , sa.Model , sa.rok_produkcji , wy.Data_wypozycz FROM samochody sa , wypozyczenia wy WHERE sa.ID_samochodu=wy.ID_samochodu AND sa.rok_produkcji='2000';");

            

                for($i = 0; $i <= 6; $i++){
                     $temp2 = mysqli_fetch_assoc($temp);
                     echo("<p><b>Marka: ".$temp2['Marka']." Model: ".$temp2['Model']."</b></p>");
                     echo("<p>Rok Produkcji: ".$temp2['rok_produkcji']."Data Wypożyczenia: ".$temp2['Data_wypozycz']."</p><hr>");
                }
                 

        
             mysqli_close($conn);
        
        ?>
    </div>

    <div id="prawy">
        <h1>AUTA</h1>
        <a href="mailto:wypozyczalnia@wp.pl">Napisz do nas</a>
        <img src="auto.png" alt="auto w kolorze czewonym"/>
    </div>

    <footer>
        Stronę o wypożyczalni przygotował: 03272201878
    </footer>
</body>
</html>