<?php

/*
    $con = new mysqli('localhost','root','','practicas');

    if($con->connect_error){
        echo $error->$con->connect_error;
    }
*/
$servername = "localhost";
$database = "practicas";
$username = "root";
$password = "";

/* $sql = "mysql:host=$servername;dbname=$database;";
$dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]; */
// Create a new connection to the MySQL database using PDO, $my_Db_Connection is an object
try {
    $conexion = mysqli_connect("localhost","root","","practicas");
    //$conexion = new PDO($sql, $username, $password, $dsn_Options);
    //echo "Connected successfully";
} catch (PDOException $error) {
    echo 'Connection error: ' . $error->getMessage();
}
