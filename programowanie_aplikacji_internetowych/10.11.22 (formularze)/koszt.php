<?php
if (isset($_GET['przycisk'])){
    $koszt=$_GET['koszt'];
    $ilekilomertow = $_GET['ile'];
    $spalanie=$_GET['spalanie'];
    echo"Koszt benzyny to: ".$_GET['koszt']."<br>";
    echo"Ilość kilometrów to: ".$_GET['ile']."<br>";
    echo"Średnie spalanie: ".$_GET['spalanie']."<br>";
    $kosztPrzejazdu=(($spalanie/100)*$koszt)*$ilekilomertow; //nie wiem jak się oblicza koszt przejzadu :P
    echo"Całkowity koszt przejazdu to: ".$kosztPrzejazdu."<br>";
}