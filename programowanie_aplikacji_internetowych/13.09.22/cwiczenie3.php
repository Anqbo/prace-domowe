<?php
$a = 5;
$b = 7;
$x = ($a+6)/($b-4);
if($b == 4){
    echo "Błędne dane, nie można dzielić przez zero";
}
else{
    echo"Wynik $a + 6, podzielić przez $b - 4, jest równy: $x";
}
?>