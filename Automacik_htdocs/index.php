<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Automacik Pyszny Najlepszy</title>
</head>
<body>
    <header>
        <img src="Logo.png" alt="brakuje :c"/>
        <h1>Witamy w automacie elektronicznym</h1>
        <p>Życzymy udanych zakupów</p>
    </header>

    <div id="lewy">
        <form action="index.php" method="POST"><br>Zamów coś dla siebie!<br><br>

            <div id="lewy_1">
                <a>Podaj Numer Produktu</a>
                <input id="Produkt" type="number"><br>
                <input id="Guzik" type="submit" value="Zamawiamy!"/>
            </div>

            <div id="lewy_1">
                <a>Wrzuć Monetę lub Banknot</a>
                <input id="Kwota" type="number"><br>
                <input id="Guzik" type="button" value="Dodaj fundusze" onclick="pinionszki()"><br>
            </div>

            <div id="lewy_1">
                <ul>Dostępne nominały:
                    <li>Monety:
                        <ul>
                            <li>0,20 (20 gr)</li>
                            <li>0,50 (50 gr)</li>
                            <li>1 (1 zł)</li>
                            <li>2 (2 zł)</li>
                            <li>5 (5 zł)</li>
                        </ul>
                    </li>

                    <li>Banknoty:
                        <ul>
                            <li>10 (10 zł)</li>
                            <li>20 (20 zł)</li>
                            <li>50 (50 zł)</li>
                            <li>100 (100 zł)</li>
                            <li>200 (200 zł)</li>
                        </ul>
                    </li>
                </ul>
            </div>

        </form>
    </div>

    <div id="prawy_g">

        <div id="prawy_g1">

        </div>

            <table>
                <?php
                    $con = mysqli_connect('localhost' , 'root' , '' , 'automat');
                    $query = "SELECT pr.id AS 'Numer Produktu' , pr.nazwa AS 'Nazwa Produktu' , pr.cena AS 'Należność (PLN)' , pr.ilosc AS 'Pozostało (sztuk): ' FROM produkty pr;";
                    $res = mysqli_query($con, $query);

                    while($row = mysqli_fetch_array($res))
                        {
                            echo "<tr>
                                    <td>$row[0]</td>
                                    <td>$row[1]</td>
                                    <td>$row[2]</td>
                                    <td>$row[3]</td>
                                </tr>";
                        }
                    mysqli_close($con);
                ?>
            </table>

        <div id="prawy_g2">
            <h3>Fundusze(PLN):</h3>
            <input type="number" value="0" id="Fundusze"/><br><br>
            <button onClick="window.location.href=window.location.href">Wydaj Resztę</button>
        </div>

    </div>


    <div id="prawy_d">
            
    </div>

    <footer><p>Własność firmy VEMAT &#174; 03272201878</p></footer>

    <script>
        function pinionszki()
        {
        
        var a = parseFloat(document.getElementById('Fundusze').value);
        var b = parseFloat(document.getElementById('Kwota').value);
        
        if(b>=0)
            {
                b = b+a;
                document.getElementById('Fundusze').value = b;
            }
        else
            {
                alert('Wprowadzona liczba nie jest dostępną kwotą!');
            }
        }
    </script>

    <a href="zamawianie.php">portal</a>
</body>
</html>