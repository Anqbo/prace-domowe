<?php
if (isset($_COOKIE['licznik'])){
    $odw = $_COOKIE['licznik']+1;
    if ($odw<=10){
        echo"Witaj po raz kolejny<br>";
        echo"Jesteś tu $odw raz";
    }if ($odw>10){
        echo"To znowu Ty!!<br>";
        echo"Jesteś tu $odw raz";
    }
}else{
    $odw = 1;
    echo"Witaj po raz pierwszy";
}setcookie("licznik",$odw);