<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>piłka nożna</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <div id="baner">
        <h3>Reprezentacja polski w piłce nożnej</h3>
        <img src="obraz1.jpg" alt="reprezentacja">
    </div>

    <div id="lewy">
        <form method="POST">
            <label><select name="opcje"><option value="bramkarze">Bramkarze</option><option value="obroncy">Obrońcy</option><option value="pomocnicy">Pomocnicy</option><option value="napastnicy">Napastnicy</option></select></label>
            <button type="submit" name="przycisk">Zobacz</button>
        </form>
        <img src="zad2.png" alt="piłka">
        <p>Autor:0000000000000</p>
    </div>

    <div id="prawy">
            <?php
            if (isset($_POST['przycisk'])){
                $opcje = $_POST['opcje'];
                $db = mysqli_connect("localhost", "root", "", "egzamin");
                echo"<ol>";
                switch($opcje){
                    case "bramkarze":
                        $sql = "SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id=1";
                        $query = mysqli_query($db,$sql);
                        while($row = mysqli_fetch_array($query)){
                            echo "<li><p>".$row['imie']." ".$row['nazwisko']."</p></li>";
                        }
                        mysqli_close($db);
                        break;
                    case "obroncy":
                        $sql = "SELECT imie, nazwisko FROM zawodnik  WHERE pozycja_id=2";
                        $query = mysqli_query($db,$sql);
                        while($row = mysqli_fetch_array($query)){
                            echo "<li><p>".$row['imie']." ".$row['nazwisko']."</p></li>";
                        }
                        mysqli_close($db);
                        break;
                    case "pomocnicy":
                        $sql = "SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id=3";
                        $query = mysqli_query($db,$sql);
                        while($row = mysqli_fetch_array($query)){
                            echo "<li><p>".$row['imie']." ".$row['nazwisko']."</p></li>";
                        }
                        mysqli_close($db);
                        break;
                    case "napastnicy":
                        $sql = "SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id=4";
                        $query = mysqli_query($db,$sql);
                        while($row = mysqli_fetch_array($query)){
                            echo "<li><p>".$row['imie']." ".$row['nazwisko']."</p></li>";
                        }
                        mysqli_close($db);
                        break;
                }
                echo"</ol>";
            }
            ?>
    </div>
    
    <div id="glowny">
        <h3>Liga mistrzów</h3>
    </div>

    <div id="liga">
        <?php
        $db = mysqli_connect("localhost", "root","","egzamin");
        $sql = "SELECT zespol, punkty, grupa FROM liga order by punkty";
        $query = mysqli_query($db,$sql);
        while ($r = mysqli_fetch_array($query)){
            echo"<div class='druzyna'>";
            echo"<h2>".$r['zespol']."</h2><br><h1>".$r['punkty']."</h1><br><p>grupa: ".$r['grupa']."</p>";
            echo"</div>";
        }
        ?>
        </div>
    </div>
    
</body>
</html>