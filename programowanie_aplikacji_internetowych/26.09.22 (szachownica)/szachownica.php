<!doctype html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>szachownica</title>
		<link rel="stylesheet" href="style.css">
	</head>
    <body>
    <?php
        echo "<table border = 2px>";
        for($i=1; $i<=8; $i++){
            echo "<tr>";
            for($j=1; $j<=8;$j++){
                echo "<td>";
            
                echo " ";
                echo "</td>";
            }
            echo "</tr>";
        }
        echo"</table>";

    ?>
    </body>
    </html>