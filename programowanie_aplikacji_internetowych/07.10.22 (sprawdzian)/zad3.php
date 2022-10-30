<?php
$suma = 0;
while(true){
    $i = rand(1,10);
    $suma+=$i;
    if($suma>=50){
        break;
    }
}
echo $suma;
?>