<?php
session_start();
if (isset($_POST['przycisk'])){
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $w=$_POST['wiadomosc'];
    $data = date("d-m-Y");
    $text = "Imie: $imie \nNazwisko: $nazwisko \nWiadomość: $w \nData: $data\n ---------------------------\n";
    $plik = fopen("dane.txt","a");
    fwrite($plik,$text);
    fclose($plik);
    
    $_SESSION['login'] = $_POST['imie'];
    $_SESSION['haslo'] = $_POST['haslo'];
    if ($_SESSION['login']=="Anna" && $_SESSION['haslo']=="pass"){
        $plik = fopen("dane.txt","r");
        while(!feof($plik)){
            echo fgets($plik)."<br>";
        }
        fclose($plik);

        echo"<a href='wylogowanko.php'>Wyloguj mnie</a>";
    }else{
        header("location: tak.php");
    }
}