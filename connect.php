<?php

$servername = "localhost";
$username = "root";
$password = "";


$conn = new PDO ("mysql:host=$servername;dbname=tarantino", $username, $password);
//turn on error mode and throws error mode exceptions (helps to debug)
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "Connected Successfully";

?>