<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <main>
        <div id="dane">
            <h1>TEST</h1>
            <hr>
        </div>
<form method="POST" action="odpowiedzi.php">
<input type="text" name="imie" placeholder="IMIE">&nbsp;
<input type="text" name="nazwisko" placeholder="NAZWISKO"><br><br>
<?php

    $conn = mysqli_connect("localhost","root","","test");
    $zapytanie = "SELECT pytanie, odp1, odp2, odp3, id FROM pytania";
    $query = mysqli_query($conn,$zapytanie);

    while($wynik = mysqli_fetch_array($query)){
        echo "<div id='pytanie'>";
        echo "$wynik[0] <br>";
        echo "<b>A) $wynik[1]</b><input type='radio' id='$wynik[4]_1' name='$wynik[4]' value='1'>";
        echo "<b>B) $wynik[2]</b><input type='radio' id='$wynik[4]_2' name='$wynik[4]' value='2'>";
        echo "<b>C) $wynik[3]</b><input type='radio' id='$wynik[4]_3' name='$wynik[4]' value='3'>";
        echo "</div>";
    } 
mysqli_close($conn);
?>
<button type="submit">WYŚLIJ</button>

</form>



</main>
</body>
</html>