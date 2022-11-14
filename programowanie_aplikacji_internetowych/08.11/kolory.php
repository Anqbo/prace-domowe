<?php
    if (isset($_GET['przycisk'])){
        echo("<p style= 'height:50%; width:50%; margin-left:auto; margin-right:auto; amrgin-top:50px; border: 2px red dashed; background-color:".$_GET['kolorTła'].";color: ".$_GET['kolorTekstu']."'>Anna Bork</p>");
    }