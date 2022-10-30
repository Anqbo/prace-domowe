<?php
$liczby = [10, 15, 9, 61, 78, 2, 44, 21, 30];
$max = 0;
foreach($liczby as $a){
    if($a>$max){
        $max = $a;
    }
}
echo "Największą liczbą jest: ", $max;