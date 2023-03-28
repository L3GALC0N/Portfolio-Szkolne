<?php



$x = $_POST["zdjecie"];

echo $x;

$polaczenie = mysqli_connect("localhost","root","","podroze");
$zapytanie = "UPDATE licznik SET polubienia = polubienia + 1 where zdjecie like '$x'";
$query = mysqli_query($polaczenie,$zapytanie);


?>