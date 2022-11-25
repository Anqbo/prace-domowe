<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>Imie: <input type="text" name="imie"></label><br>
        <label>Nazwisko: <input type="text" name="nazwisko"></label><br>
        <input type="submit" name="p"><input type="reset">
    </form>

    <?php
    if (isset($_POST['p'])){
        $imie = $_POST['imie'];
        $naz = $_POST['nazwisko'];
        $t = "$imie $naz";
        $date = date("d.m.Y");
        $login = strtoupper((substr($imie,-(strlen($imie)),3)).substr($naz, 0,3));
        $text = "$imie $naz $login $date \n";
        $plik = fopen("dane.txt","a");
        fwrite($plik, $text);

    
    }
    ?>
</body>
</html>