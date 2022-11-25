<?php
if (isset($_GET['przycisk'])){
    $odleglosc=$_GET['odleglosc'];
    $ciepla=$_GET['ciepla'];
    $koszt = $odleglosc*0.5;
    if (isset($ciepla)){
        $koszt=$koszt*1.15;
    }
    echo"Koszt dowozu pizzy to: ".$koszt;
}