<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form>
        <label>Podaj date urodzin: <input type="date" name="data"></label>
        <input type="submit" name="przycisk">
    </form>
    <?php
        if (isset($_GET['przycisk'])){
            $data=explode("-",$_GET["data"]);
            print_r($data);
            if ($data[0]<2022-18){
                echo"Jesteś pełnoletni";
            }if ($data[0]>2022-18){
                echo"Jesteś nie pełnoletni";
            }if ($data[0]==2022-18){
                if ($data[1]<11){
                    echo"Jesteś pełnoletni";
                }if ($data[1]>11){
                    echo"Jesteś nie pełnoletni";
                }if ($data[1]==11){
                    if ($data[2]<25){
                        echo"Jesteś pełnoletni";
                    }else{
                        echo"Jesteś nie pełnoletni";
                    }
                }
            }
        }

    ?>
</body>
</html>