<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form>
        <label>Data urodzin: <input type="date" name="data"></label><br>
        <input type="submit" name="przycisk"><input type="reset">
    </form>

    <?php
        if (isset($_GET['przycisk'])){
            $data=$_GET['data'];
            echo $data."<br>";
            $tab = explode("-",$data);
            print_r($tab);
            if ($tab[0]>(2022-18)){
                echo"Jesteś nie pełonoletni";
               
            }if ($tab[0]==(2022-18)){
                if ($tab[1]<11){
                    echo"Jesteś pełonoletni";
                    
                }if($tab[1]==11){
                    if($tab[2]<22){
                        echo"Jesteś pełonoletni";
                        
                    }if($tab[2]>22){
                        echo"Jesteś nie pełonoletni";   
                    }
                if ($tab[1]>11){
                    echo"Jesteś nie pełonoletni";
                }
                }
            }if ($tab[0]<(2022-18)){
                echo"Jesteś pełonoletni";
            }
        }
    ?>
</body>
</html>