<?php
setcookie("odwiedziny","tak", time() + 3600);
setcookie("data_odwiedzin", date("d-m-Y G:i:s"));
if (isset($_COOKIE["odwiedziny"])){
    echo "Witaj ponownie";
    $data = $_COOKIE["data_odwiedzin"];
    echo "<br>Ostatni raz byłeś u nas: $data<br>";
} else {
echo "Witaj po raz pierwszy na naszej stronie<br>";
}

if (isset($_COOKIE['odwiedziny'])){
    $odw = intval($_COOKIE['odwiedziny'])+1;
    echo "Liczba odwiedzin: $odw";
} else {
    echo "Witaj po raz pierwszy";
    $odw = 1;
}
setcookie("odwiedziny",$odw,time()+60*60*24*365);