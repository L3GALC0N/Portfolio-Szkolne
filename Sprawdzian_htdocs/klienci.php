<?php

$imie = $_POST["imie"];
$nazwisko = $_POST["nazwisko"];
$pesel = $_POST["PESEL"];
$nrdowodu_gen = $nazwisko[0].$nazwisko[1].$imie[0].$pesel[0].$pesel[1].$pesel[2].$pesel[3].$pesel[4];

$polaczenie = mysqli_connect("localhost","root","","wypozyczalnia");
$zapytanie = "INSERT INTO `klienci` (`ID_klienta`, `Nazwisko`, `Imie`, `Nr_dowodu`) VALUES (NULL, '$nazwisko', '$imie', upper('$nrdowodu_gen'))";
$query = mysqli_query($polaczenie,$zapytanie);

echo "Klient ".$imie." ".$nazwisko." został dodany do bazy danych<br>";
mysqli_close($polaczenie);

?>