<?php
$suma = 0;
$srednia = 0;
$tab = ["j. polski" => 4, "matematyka" => 5, "j.angielski" => 5, "historia" => 4, "wf" => 6];
foreach($tab as $k => $v){
    echo "$k - $v <br>";
    $suma += $v;
}
$srednia = $suma/5;

echo "średnia ocen to: $srednia";
?>