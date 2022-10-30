<?php
$i = 0;
$a = 0;
while ($i<25){
    $i++;
    if($i == 1 || $i == 7 || $i == 13 || $i == 19 || $i == 25){
        $a = 1;
    }else{
        $a=0;
    }
    echo "$a ";
    if($i%5==0){
        echo"<br>";
    }
}
