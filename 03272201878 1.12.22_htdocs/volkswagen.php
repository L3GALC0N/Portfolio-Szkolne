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
        <form method="post" action="volkswagen.php">
        <p>Podaj model samochodu</p>
        <input id="numer" type="number"/>
        <p>Skomponuj kolor swojego samochodu</p>
        <input id="R" type="number">R</input><br>
        <input id="G" type="number">G</input><br>
        <input id="B" type="number">B</input><br>
        <input type="button" value="Zamówienie" onClick="zamowienie()"/><br>
        <p id="zamowienie">Wybrany Model</p>
        <input type="button" value="Kolor" onClick="kolorek()"/>
        <form>

        <script>
            function zamowienie()
                {
                
                    zmienna = document.getElementById('numer').value;

                    if(zmienna==1)
                    {
                        document.getElementById('zamowienie').innerHTML=('Twoje zamówienie to model Passat');
                    }

                    else if(zmienna==2)
                    {
                        document.getElementById('zamowienie').innerHTML=('Twoje zamówienie to model Golf');
                    }

                    else if(zmienna==3)
                    {
                        document.getElementById('zamowienie').innerHTML=('Twoje zamówienie to model Amarok');
                    }
                    
                    else
                    {
                        document.getElementById('zamowienie').innerHTML=('Twoje zamówienie to inny model Volkswagena');
                    }
                }

            funcrion kolorek()
                {
                    kl1 = document
                }


        </script>
    </div>

    <div id="prawy">
        <h2>Nasza oferta</h2>

        <table>
            <tr>
                <td>Model</td>
                <td rowspan="2">Możesz zamówić dowolny kolor<br>Volkswagena</td>
            </tr>

            <tr>
                <td>
                    <ol>
                        <li>Passat</li>
                        <li>Golf</li>
                        <li>Amarok</li>
                    </ol>
                </td>
            </tr>
        </table>

        <img src="volkswagen.png" alt="Auto w kolorze niebieskim"/>

    </div>

    <footer>
        Stronę o wypożyczalni przygotował: 03272201878
    </footer>
</body>
</html>