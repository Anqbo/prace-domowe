<?php
    if(isset($_POST['przycisk'])){
        $login = $_POST['login'];
        echo("Twój login to: ".$login."<br>");
        $haslo=$_POST['haslo'];
        $haslo=sha1($haslo);
        echo("Hasło: ".$haslo."<br>");
        if(isset($_POST['zgoda'])){
            echo("Wyraziłeś zgode na zapamiętanie");
        }else{
            echo("Nie wyraziłeś zgody na zapamietanie");
        }
    }