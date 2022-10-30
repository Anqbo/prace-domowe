<?php

function wyswietlTablice($tablica){
    echo "<pre>";
    print_r($tablica);
    echo "</pre>";
}
//zadanie 1.1
echo "Zadanie 1.1 Tworzenie tablicy<br>";
$tablica = [];
for ($i = 0; $i < 10; $i++) {
    $tablica[$i] = rand(1, 10);
}
wyswietlTablice($tablica);


//zadanie 1.2
echo "Zadanie 1.2<br>";
echo "Wartość minimalna w tablicy: ";
echo min($tablica);
echo "<br>";
echo "Wartość maksymalna w tablicy: ";
echo max($tablica);
echo "<br>";

//zadanie 1.3
echo "<br>";
echo "Zadanie 1.3<br>";
$ileTrojek = 0;
$sumaElemntow = 0;
$parzyste = 0;
$nieparzyste = 0;
$podzielnePrzezTrzy = 0;
foreach ($tablica as $element) {
    if ($element == 3) {
        $ileTrojek += 1;
    }

    $sumaElemntow += $element;

    if ($element % 2 == 0) {
        $parzyste += 1;
    } else {
        $nieparzyste += 1;
    }

    if ($element % 3 == 0) {
        $podzielnePrzezTrzy += 1;
    }
}
echo "Średnia wartość elemnetów tablicy to: " . $sumaElemntow / count($tablica);
echo "<br>";

//zadanie 1.4
echo "<br>";
echo "Zadanie 1.4<br>";
echo "Ilość trójek w tablicy to: " . $ileTrojek . "<br>";

//zadanie 1.5
echo "<br>";
echo "Zadanie 1.5 Tablica posortowana rosnąco<br>";
echo "<br>";
sort($tablica);
wyswietlTablice($tablica);


//zadanie 1.6
echo "<br>";
echo "Zadanie 1.6<br>";
$mediana = 0;
if (count($tablica) % 2 != 0) {
    $mediana = $tablica[floor(count($tablica) / 2)];
    echo "Mediana z tej tablicy to: " . $mediana;
} else {
    $srodkowaLiczba1 = $tablica[count($tablica) / 2];
    $srodkowaLiczba2 = $tablica[(count($tablica) / 2) - 1];
    $mediana = ($srodkowaLiczba1 + $srodkowaLiczba2) / 2;
    echo "Mediana z tej tablicy to: " . $mediana;
}
echo "<br>";

//zadanie 1.7
echo "<br>";
echo "Zadanie 1.7<br>";
echo "Trzy najmniejsze elemety tablicy: " . $tablica[0] . ", " . $tablica[1] . ", " . $tablica[2];
echo "<br>";
echo "Trzy największe elementy tablicy: " . $tablica[count($tablica) - 1] . ", " . $tablica[(count($tablica) - 2)] . ", " . $tablica[(count($tablica) - 3)];
echo "<br>";

//zadanie 1.8
echo "<br>";
echo "Zadanie 1.8 Tablica z liczbami do kwadratu<br>";
$i = 0;
foreach ($tablica as $element) {
    $element *= $element;
    $elementyDoKwadratu[$i] = $element;
    $i++;
}
wyswietlTablice($elementyDoKwadratu);

//zadanie 1.9
echo "Zadanie 1.9<br>";
echo "Ilość liczb parzystych to: " . $parzyste;
echo "<br>";
echo "Ilosć liczb nieparzystych to: " . $nieparzyste;
echo "<br>";

//zadanie 1.10
echo "<br>";
echo "Zadanie 1.10<br>";
echo "Ilość liczb podzielnych przez trzy to: " . $podzielnePrzezTrzy;
echo "<br>";

//___________________________________________________________________________________________
//zadanie 2 
//zadanie 2.1
echo "<br>";
echo "Zadanie 2.1 Tablica 100 elementowa uzupełniona ciągiem fibonacciego<br>";
$fibonacci[0] = 0;
$kolejnaLiczbaZCiaguFibonacciego = 1;
for ($i = 1; $i < 100; $i++) {
    $fibonacci[$i] = $kolejnaLiczbaZCiaguFibonacciego;
    $kolejnaLiczbaZCiaguFibonacciego += $fibonacci[$i - 1];
}
wyswietlTablice($fibonacci);

//zadanie 2.2
echo "Zadanie 2.2 Tablica 100 elementowa uzupełniona potęgami liczby dwa<br>";
$kolejnaPotegaDwojki = 1;
for ($i = 0; $i < 100; $i++) {
    $potegiDwojki[$i] = $kolejnaPotegaDwojki;
    $kolejnaPotegaDwojki *= 2;
}
wyswietlTablice($potegiDwojki);

//zadanie 2.3
echo "Zadanie 2.3 Tablica 100 elementowa uzupełniona wielokrotnościami liczby trzy<br>";
$kolejnaLiczbaCiaguCoTrzy = 3;
for ($i = 0; $i < 100; $i++) {
    $wielokrotnosciTrojki[$i] = $kolejnaLiczbaCiaguCoTrzy;
    $kolejnaLiczbaCiaguCoTrzy += 3;
}
wyswietlTablice($wielokrotnosciTrojki);

//zadanie 2.4
echo "Zadanie 2.4 Tablica 100 elementowa uzupełniona kolejnymi liczbami pomnożonymi przez dwa<br>";
$KolejnaLiczbaCiaguRazyDwa = 2;
for ($i = 0; $i < 100; $i++) {
    $kolejneLiczbyRazyDwa[$i] = $KolejnaLiczbaCiaguRazyDwa;
    $KolejnaLiczbaCiaguRazyDwa *= 2;
}
wyswietlTablice($kolejneLiczbyRazyDwa);

//___________________________________________________________________________________
//zadanie 3
echo "Zadanie 3 Stworzenie loginu z imienia, nazwiska oraz roku urodzenia<br>";
$imie = "Anna";
$nazwisko = "Kowalczyk";
$rokUrodzenia = "2000";
$tablicaImie = str_split($imie);
$tablicaNazwisko = str_split($nazwisko);
$login = "Twój login to: " . $tablicaImie[0] . $tablicaImie[1] . $tablicaImie[2] . $tablicaNazwisko[0] . $tablicaNazwisko[1] . $tablicaNazwisko[2] . $rokUrodzenia;
echo $login;
