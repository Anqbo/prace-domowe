<?php
function silnia($a){
    $silnia=1;
    for ($i=1;$i<$a+1;$i++){
        $silnia = $silnia*$i;
    }
    return($silnia);
}
//echo silnia(5);
$n = 11;
$k = 7;
$newton = silnia($n)/(silnia($k)*silnia($n-$k));
echo "<br>Wartość wyrażenia to: $newton";