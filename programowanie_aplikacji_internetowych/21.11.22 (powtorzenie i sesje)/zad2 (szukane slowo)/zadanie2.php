<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form>
        <label>Podaj słowo<input type="text" name="slowo"></label><br>
        <input type="submit" name="przycisk">
    </form>
    <?php

    $text = "A nie wiem narazie to jaki kolwiek tekst";
    $plik = fopen("dane.txt", "r");
    $read = fread($plik, 40);
    if (isset($_GET['przycisk'])){
        $slowo = $_GET['slowo'];
        if (strstr($read, $slowo)){
            echo"Słowo '$slowo' zawiera się w tekście '$read'";
        }else{
            echo"Słowa '$slowo' nie ma w tekście '$read'";
        }
    }
    ?>
</body>
</html>