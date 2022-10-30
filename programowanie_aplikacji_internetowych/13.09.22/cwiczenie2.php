<?php
$a = 6;
$b = 3;
$c = 8;
$d = 2;
$x = ($a/$b)+($c/$d);
if($b == 0 || $d == 0){
    echo "Błędne dane, nie można dzielić przez zero";
}
else{
    echo"Wynik $a podzielić przez $b dodać $c podzielić przez $d jest równy: $x";
}
?>