<?php

    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    $odpowiedz1 = $_POST["1"];
    $odpowiedz2 = $_POST["2"];
    $odpowiedz3 = $_POST["3"];
    $odpowiedz4 = $_POST["4"];
    $odpowiedz5 = $_POST["5"];
    $odpowiedz6 = $_POST["6"];
    $odpowiedz7 = $_POST["7"];
    $odpowiedz8 = $_POST["8"];
    $odpowiedz9 = $_POST["9"];
    $odpowiedz10 = $_POST["10"];

$conn = mysqli_connect("localhost","root","","test");
$zapytanie = "SELECT * FROM pytania";
$query = mysqli_query($conn,$zapytanie);
$wynikk = 0;
while($wynik = mysqli_fetch_array($query)){
    
    if($wynik[0] == 1){
        if( $odpowiedz1==$wynik[5]){
            $wynikk++;
    }
}
    if($wynik[0] == 2){
        if( $odpowiedz2==$wynik[5]){
            $wynikk++;
    }
}
    if($wynik[0] == 3){
        if( $odpowiedz3==$wynik[5]){
            $wynikk++;
    }
}
    if($wynik[0] == 4){
        if( $odpowiedz4==$wynik[5]){
            $wynikk++;
    }
}
    if($wynik[0] == 5){
        if( $odpowiedz5==$wynik[5]){
            $wynikk++;
    }
}
    if($wynik[0] == 6){
        if( $odpowiedz6==$wynik[5]){
            $wynikk++;
    }
}
    if($wynik[0] == 7){
        if( $odpowiedz7==$wynik[5]){
            $wynikk++;
    }
}
    if($wynik[0] == 8){
        if( $odpowiedz8==$wynik[5]){
            $wynikk++;
    }
}
    if($wynik[0] == 9){
        if( $odpowiedz9==$wynik[5]){
            $wynikk++;
    }
}
    if($wynik[0] == 10){
        if( $odpowiedz10==$wynik[5]){
            $wynikk++;
    }
}

}
echo "<h1 style='text-align: center'>Wynik końcowy: $wynikk punktów</h1>";
mysqli_close($conn);

$polaczenie_zew = mysqli_connect("10.10.10.24","4gd","4gd","matematyka");
$zapytanie_sprawdzajace = "SELECT * FROM matem WHERE imie LIKE '$imie' AND nazwisko LIKE '$nazwisko'";
$zapytanie_dodajace = "INSERT INTO `matem` (`id`, `imie`, `nazwisko`, `punkty`) VALUES (NULL, '$imie', '$nazwisko', '$wynikk')";
$zapytanie_sumujace = "UPDATE `matem` SET `punkty` = punkty+$wynikk WHERE `imie` LIKE '$imie' AND nazwisko LIKE '$nazwisko'";
$zapytanie_sprawdzajace_tabele = "SELECT * FROM $imie.$nazwisko";
$zapytanie_dodajace_kolumne = "ALTER TABLE `matem` ADD `$imie.$nazwisko` VARCHAR(30)";
$zapytanie_dodajace_do_tabeli = "INSERT INTO `$imie.$nazwisko` (`imie2`,`nazwisko2`) VALUES ('$imie','$nazwisko')";

$query_sprawdzajace = mysqli_query($polaczenie_zew,$zapytanie_sprawdzajace);
$czyjest = mysqli_num_rows($query_sprawdzajace);

$query_sprawdzajace_tabele = mysqli_query($polaczenie_zew,$zapytanie_sprawdzajace_tabele);
$czyjestkolumna = mysqli_num_rows($query_sprawdzajace_tabele);

if($czyjestkolumna > 0){
    $query4 = mysqli_query($polaczenie_zew,$zapytanie_dodajace_kolumne);
    echo "Stworzono kolumne";
} else if($czyjestkolumna > 1) {
    $query5 = mysqli_query($polaczenie_zew,$zapytanie_dodajace_do_tabeli);
    echo "Dodano do kolumny";
}

if($czyjest == 0){
    $query2 = mysqli_query($polaczenie_zew,$zapytanie_dodajace);
    echo "<h1 style='text-align: center'>Utworzono nowy wynik dla $imie $nazwisko</h1>";
} else {
    $query3 = mysqli_query($polaczenie_zew,$zapytanie_sumujace);
    echo "<h1 style='text-align: center'>Zaktualizowano liczbę punktów ucznia $imie $nazwisko</h1>";
}


mysqli_close($polaczenie_zew);
?>

