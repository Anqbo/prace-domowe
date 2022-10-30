<?php
$a = 4;
$b = 2;
$liczba = "$a$b";
if($a%2 == 0 && $b%2 ==0){
    echo "obie liczby w liczbie $liczba są parzyste";
}
else if($a%2==0){
    echo"Liczba pierwsza $a w tej liczbie jest parzysta";
}
else if($b%2==0){
    echo"Liczba druga $b w tej liczbie jest parzysta";
}
else{
    echo"Żadna liczba nie jest parzysta";
}
echo "<br>";
if(($a+$b) == 4){
    echo"Suma $a i $b jest równa 4";
}
else{
    echo"Suma $a i $b nie jest równa 4";
}
?>
