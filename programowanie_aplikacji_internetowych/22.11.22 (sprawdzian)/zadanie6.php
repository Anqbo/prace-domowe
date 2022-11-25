<?php
if (isset($_COOKIE['licznik'])){
    $odw = $_COOKIE['licznik']+1;
    echo"Witaj poraz $odw";
}else{
    $odw = 1;
    echo"Witaj po raz pierwszy";
}

setcookie("licznik",$odw);