<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>Login: <input type="text" name="login"></label><br>
        <input type="submit" name="p"><input type="reset">
    </form>

    <?php
    if (isset($_POST['p'])){
        // $imie = $_POST['imie'];
        // $naz = $_POST['nazwisko'];
        // $t = "$imie $naz";
        // $date = date("d.m.Y");
        // $login = strtoupper((substr($t,-(strlen($t)),3)).substr($t, 4,3));
        // $text = "$imie $naz $login $date \n";
        // $plik = fopen("dane.txt","a");
        // fwrite($plik, $text);

        if ($_POST['login'] == "JANKOW"){
            $plik = fopen("dane.txt","r");
            // while(!feof($plik)){
                echo fgets($plik);
            //}
        }else{
            echo"Błędny login";
        }
    }
    ?>
</body>
</html>