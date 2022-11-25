<?php
for ($i=1; $i<101; $i++){
    $tab[$i]=rand(1,50);
}
$suma=0;
foreach($tab as $element){
    $suma += $element;
}
$srednia=$suma/count($tab);
echo"Średnia wartość elementów w tablicy to: ".$srednia."<br>";
echo "Maksymalna wartość tablicy to: ".max($tab);
echo "<br>Minimalna wartość tablicy to: ".min($tab);

sort($tab);
echo"<pre>";
print_r($tab);
echo"</pre>";
