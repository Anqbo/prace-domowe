<?php
if (isset($_POST['przycisk'])){
    $kategoria = $_POST['kategoria'];
    $podkategoria = $_POST['podkategoria'];
    $tytul = $_POST['tytul'];
    $tresc = $_POST['tresc'];
    $db = mysqli_connect("localhost", "root", "", "ogloszenia");
    $zapytanie = "INSERT INTO ogloszenie values('',1,$kategoria,$podkategoria,'$tytul','$tresc');";
    $query = mysqli_query($db, $zapytanie);
    mysqli_close($db);
}