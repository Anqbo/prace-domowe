<?php
if (isset($_GET['przycisk'])){
    echo"Wybrałeś: ".$_GET['opcje'];
    echo"<br>";
    if (isset($_GET['rad'])){
        echo "Wybrana opcja to: ".$_GET['rad'];
    }
    echo "<br>";
            if (isset($_GET['zgoda1'])){
                echo "Wyrazona zgoda dot. regulaminu";
            } else {
                echo "Zaznacz zgodę dotyczącą regulaminu";
            }
            echo "<br>";
            if (isset($_GET['zgoda2'])){
                echo "Wyrazona zgoda dot. zapamiętywania";
            } else {
                echo "Zaznacz zgodę dotyczącą zapamiętywania";
            }
            echo "<br>";
            if (isset($_GET['zgoda3'])){
                echo "Wyrazona zgoda dot. danych osobowych";
            } else {
                echo "Zaznacz zgodę dotyczącą danych osobowych";
            }
            echo "<br>";
}