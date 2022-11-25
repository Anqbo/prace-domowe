<?php
for ($i=1;$i<1001;$i++){
    $tab[$i]=rand(1,10);
}
$suma = 0;
foreach ($tab as $element){
    $suma += $element;
}
$srednia = $suma/count($tab);
echo "Średnia elemnetów tablicy to: $srednia<br>";
echo "Majwiększy element to: ".max($tab);
echo "<br>Majmniejszy element to: ".min($tab);
sort($tab);
echo"<pre>";
print_r($tab);
echo"</pre>";