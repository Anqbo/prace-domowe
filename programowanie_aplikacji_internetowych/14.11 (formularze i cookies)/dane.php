<?php
    if (isset($_GET['przycisk'])){
        $imie = $_GET['imie'];
        $naz = $_GET['nazwisko'];
        $tel = $_GET['tel'];
        $email = $_GET['email'];
        echo"<table border=1px>
            <tr><td>Imie: </td><td>$imie</<td></tr>
            <tr><td>Nazwisko: </td><td>$naz</td></tr>
            <tr><td>Telefon: </td><td>$tel</td></tr>
            <tr><td>Email: </td><td>$email</td></tr>
        </table>";     
        //echo "Imie: ".$imie."<br> Nazwisko: ".$naz."<br> Telefon: ".$tel."<br> Email: ".$email;
    
    }