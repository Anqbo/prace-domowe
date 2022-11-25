<?php
session_start();
$_SESSION=[];
session_destroy();
header("location: zadanie7a.html");