<?php
$europa = array("Włochy" => "Rzym", "Belgia" => "Bruksela",
"Dania" => "Kopenhaga", "Finlandia" => "Helsinki",
"Francja" => "Paryż", "Niemcy" => "Berlin",
"Rosja" => "Moskwa", "Polska" => "Warszawa");

foreach($europa as $k=>$s){
    echo"<br>";
    echo"Kraj: ",$k,", stolicza: ", $s;
}