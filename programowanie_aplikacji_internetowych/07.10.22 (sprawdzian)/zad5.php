<?php
$max = 0;
$min = 501;
$tab = [];
$parzyste = 0;
$nieparzyste = 0;
$suma = 0;
$srednia = 0;
for ($i = 1; $i < 101; $i++){
    $tab[$i] = rand(1,500);
} 
foreach($tab as $a){
    if($a > $max){
        $max = $a;
    }
    if($a < $min){
        $min = $a;
    }
    if($a%2 == 0){
        $parzyste+=1;
    }else{
        $nieparzyste +=1;
    }
    $suma += $a;

}
$srednia = $suma/100;
echo "Najwięsza to: $max, najmniejsza to: $min, liczba parzystych liczb to: $parzyste, a nie parzystych to: $nieparzyste  "."<br>";
echo"Suma to $suma, a średnia tych liczb to: $srednia";