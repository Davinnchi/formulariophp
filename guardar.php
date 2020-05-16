<?php

//CONECTAR A LA BD
mysqli_close($mysqli);

$mysqli = new mysqli("127.0.0.1", "php_legacy", "p4p_l3g4cy", "php_legacy", 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

//Recibir parametros 

$first_name = $_POST["first_name"]
$last_name = $_POST["last_name"]
$email = $_POST["email"]
$usarname = $_POST["usarname"]
$password = $_POST["password"]

?>