<?php
    $hostname ='localhost';
    $username = "root";
    $password = '' ;
    $database = 'alimentador';
    $conn = mysqli_connect($hostname,$username,$password,$database);
    if (!$conn) {
        die("error de conexion " . mysqli_connect_error());
    }
?>