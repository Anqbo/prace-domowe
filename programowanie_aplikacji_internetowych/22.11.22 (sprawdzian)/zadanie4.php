<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form>
        <label>Podaj szukane słowo: <input type="text" name="slowo"></label><br>
        <input type="submit" name="p"><input type="reset">
    </form>
<?php

$text = "Przykładowe zdanie na tej stronie, na oknem jest mgła a ten sprawdzian jest trudny<br>";
echo $text;
if (isset($_GET['p'])){
$slowo = $_GET['slowo'];
if (strstr($text,$slowo)){
    echo"Podane słowo eystępuje w tekście";
}else{
    echo"Nie wystepuje";
}
}
?>
</body>
</html>

