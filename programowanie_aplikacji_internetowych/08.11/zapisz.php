<?php
if(isset($_GET['wyslij'])){
    $pseudonim=$_GET['pseudonim'];
    echo"Twój pseudonim to: ".$pseudonim."<br>";
    $kom=$_GET['komentarz'];
    echo "Komentarz: ".$kom."<br>";
    echo "Bez pogrubienia: ".strip_tags($kom);

}