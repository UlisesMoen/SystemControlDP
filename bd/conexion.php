<?php

$sname = "localhost";
$unmae = "root";
$password = "12345";
$db_name = "sistcontrol";
$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if(!$conn){

    echo "Conexión Fallida";
}

?>
