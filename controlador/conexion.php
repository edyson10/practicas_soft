<?php

// Create a new connection to the MySQL database using PDO, $my_Db_Connection is an object
try {
    /* CONEXION CON EL SERVIDOR LOCAL PC */
    $conexion = mysqli_connect("localhost","root","","practicas");
    /* CONEXION CON EL SERVIDOR AWS */
    //$conexion = mysqli_connect("54.209.96.130","admin","edysonleal10","practicas");
    /* CONEXION CON EL SERVIDOR GIDIS UFPS */
    //$conexion = mysqli_connect("localhost","practic_admin","soft_2020","practic_bd");
    //echo "Connected successfully";
} catch (PDOException $error) {
    echo 'Connection error: ' . $error->getMessage();
}
