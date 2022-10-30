<?php
function figury($a){
    $p = 0;
    $x = 5;
    $b = 6;
    $h = 8;
    $r = 2;
    switch($a){
        case"kwadrat":
            $p = $x*$x;
            echo "Pole kwadratu to: ".$p;
            break;
        case "prostokat":
            $p = $x*$b;
            echo "Pole prostokąta to: ".$p;
            break;
        case "kolo":
            $p = $r*$r*3.14;
            echo "Pole koła to: ".$p;
            break;
        case "trojkat":
            $p = ($x*$h)/2;
            echo "Pole trójkąta to: ".$p;
            break;
        default:
            echo"Błędne dane";
            break;
    } 
    return $p;
}
figury("kwadrat");