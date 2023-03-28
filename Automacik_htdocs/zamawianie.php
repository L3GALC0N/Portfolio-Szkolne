<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="style2.css"/>
    </head>

    <body>
        <div id="a1">
            <form method="POST" action="zamawianie.php">
                <input name="b1" type="text">Wpisz zamawiany produkt!</input><br>
                <input name="b2" type="text">Wpisz swój Identyfikator!</input><br>
                <input name="b4" type="submit"/><br>
            </form>
        </div>

        <div id="a1">

            <?php
                
                $con = mysqli_connect('10.10.10.24' , '4gc' , '4gc' , '4gd_automat');
                $con2 = mysqli_connect('localhost' , 'root' , '' , 'automat');
                $prd = $_POST['b1'];
                $id = $_POST['b2'];
                $query1 = "SELECT pr.nazwa, pr.ilosc FROM produkty pr WHERE pr.nazwa=$prd;";
                $query2 = "INSERT INTO automat VALUES('' , '$id' , '$prd');";
                
                $res1 = mysqli_query($con2, $query1);

                while($row = mysqli_fetch_array($res1))
                            {
                                echo "<tr>
                                        <td>$row[0]</td>
                                        <td>$row[1]</td>
                                        <td>$row[2]</td>

                                    </tr>";
                            }

                mysqli_close($con);
                mysqli_close($con2);
            ?>

        </div>

        <div id="a1">
            <table>
                <?php


                    $con3 = mysqli_connect('10.10.10.24' , '4gc' , '4gc' , '4gd_automat');
                    $query = "SELECT * FROM automat WHERE id='AK';";
                    $res = mysqli_query($con3, $query);

                        while($row = mysqli_fetch_array($res))
                            {
                                echo "<tr>
                                        <td>$row[0]</td>
                                        <td>$row[1]</td>
                                        <td>$row[2]</td>

                                    </tr>";
                            }

                    mysqli_close($con3);



                ?>
            </table>
        </div>

        <div id="a2">
            <table>
                <?php
                $con = mysqli_connect('localhost' , 'root' , '' , 'automat');
                $query = "SELECT pr.id AS 'Numer Produktu' , pr.nazwa AS 'Nazwa Produktu' , pr.ilosc AS 'Pozostało (sztuk): ' FROM produkty pr;";
                $res = mysqli_query($con, $query);

                    while($row = mysqli_fetch_array($res))
                        {
                            echo "<tr>
                                    <td>$row[0]</td>
                                    <td>$row[1]</td>
                                    <td>$row[2]</td>

                                </tr>";
                        }

                mysqli_close($con);
                ?>
            </table>
        </div>


    </body>

</html>








