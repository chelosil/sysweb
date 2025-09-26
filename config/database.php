<?php
$server="localhost";
$username="root";
$password="";
$database="utic_sysweb";
$mysqli = new mysqli($server, $username, $password, $database);
if ($mysqli->connect_error) {
    die("Fallo la conexion a MySQL: (" . $mysqli->connect_error);
}


?>  