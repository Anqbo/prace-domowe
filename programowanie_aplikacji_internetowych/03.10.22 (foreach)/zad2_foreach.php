<?php
$wartosci = [20,12,22,20,16,31,22,15,13,-12,16,7,1,0,-7,-10];
$tem = 0;
$srednia = 0;
foreach($wartosci as $a){
    $tem = $tem + $a; 
    $srednia = $tem/16;
}
echo "Średnia temprtatur to: ", $srednia;
