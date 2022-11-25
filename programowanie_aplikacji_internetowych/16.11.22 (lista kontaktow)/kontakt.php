<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="dane.php">
        <label>Podaj imię: <input type="text" name="imie" required></label><br>
        <label>Podaj nazwisko:  <input type="text" name="nazwisko"></label><br>
        <label>Podaj numer telefonu:  <input type="number" name="tel"></label><br>
        <label>Podaj email:  <input type="text" name="email"></label><br>
        <label><input type = "reset"><input type="submit" name="przycisk"></label>
    </form>
    <?php
    if (isset($_GET['przycisk'])){
        $imie = $_GET['imie'];
        $naz = $_GET['nazwisko'];
        $tel = $_GET['tel'];
        $email = $_GET['email'];
        $tekst = "Imie: ".$imie."\n Nazwisko: ".$naz."\n Telefon: ".$tel."\n Email: ".$email;
        if(!$p = fopen("daneKontaktowe.txt","w")){ //jak się nie udało otworzyć to:. w pisze nowy tekst a "a" dopisuje do pliku
            echo "Błąd pliku";
        }else{
            if(fwrite($p,$tekst)){ //sprawdzamy czy uda się zapisać jesli takiego pliku nie ma to fwrite tworzy ten plik
                echo"zapis udanych";
            }else{
                echo"Błąd zapisu";
            }
        }
        
    }
    ?>
    
</body>
</html>