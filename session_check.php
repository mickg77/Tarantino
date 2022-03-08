<?php 
session_start();

echo $_SESSION['colour'];



session_unset();
session_destroy();

echo $_SESSION['colour'];
?>