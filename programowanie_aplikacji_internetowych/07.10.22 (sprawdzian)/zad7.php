<?php

function pierwsza($n){
    $tab = [];
    $liczby = 0;
    for($i=2;$i<$n;$i++){
        $tab[] = $i;
    }
foreach($tab as $t){
    if($n%$t==0){
       $liczby += 1;
    }
}
if($liczby == 0){
    return true;
}else{
    return false;
}
}
$x = rand(10,100);
echo $x . "<br>";
echo (pierwsza($x))? "Liczba pierwsza" : "Nie pierwsza";