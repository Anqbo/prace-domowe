<?php
//include "plik.php";  
//require "plik.php";

if(file_exists("Pliki.php")){ //sprawdeza czy ten plik istnieje
    echo"Plik istnieje";
}else{
    echo"nie ma takiego pliku";
}

echo"<br>";

if(is_file("plik.php")){ //sprawdza czy to plik
    echo "to jest plik";
}else{
    echo"To nie jest plik";
}

echo"<br>";

echo filesize("pliki.php"); //wielkość pliku w bajtach

echo"<br>";

//touch("pliki.txt"); //tworzy plik serwer moze to zablokować bo plik mzoe nie mieć odpaowiednich uprawnien
//unlink("pliki.txt"); //usuwa plik

$tekst = "Ala ma kota1
"; //jak dam enter to zrobi spacje w pliku
if(!$p = fopen("dane.txt","a")){ //jak się nie udało otworzyć to:. w pisze nowy tekst a "a" dopisuje do pliku
    echo "Błąd pliku";
}else{
    if(fwrite($p,$tekst)){ //sprawdzamy czy uda się zapisać jesli takiego pliku nie ma to fwrite tworzy ten plik
        echo"Zapis się powiółd";
    }else{
        echo"Błąd zapisu";
    }
}

echo"<br>";
fclose($p);
echo"<br>";
//ODCZYT PLIKU
/*
if(!$p = fopen("plik1.txt","r")){
    echo"Nie da się odczytać";
}else{
    echo fgets($p);
    echo fgets($p); //podaje drugą liniję bo kursor tekstowy jest za pierwszym wierczem
    echo fgets($p,3); //liczba znaków, jak jest wiecej to do konca wierszaa
}
fclose($p);
*/

if(!$p = fopen("plik1.txt","r")){
    echo"Nie da się odczytać";
}else{
    while(!feof($p)){ //funkcja znajdująca koniec pliku
        echo fgets($p)."<br>"; //wyświetla plik z podziałem na wiersze
    }
    fclose($p);
}
