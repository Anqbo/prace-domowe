<?php
session_start();
if (isset($_POST['p'])){
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['haslo'] = $_POST['haslo'];

    if ($_SESSION['login']=="Jan" && $_SESSION['haslo']=="pass" ){
        $login = $_SESSION['login'];
        $haslo = $_SESSION['haslo'];
        echo"Twój login to: $login <br>";
        echo"<a href='zadanie7c.php'>Wyloguj mnie</a>";
    }else{
        header("location: zadanie7a.html");
    }
}