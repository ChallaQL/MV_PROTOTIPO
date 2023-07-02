<?php
    require_once 'pdoconfig.php';
    include 'pdoconfig.php';
    //conexion con la base de datos, ingresando las variables definidas en el archivo pdoconfig.php
    $con = mysqli_connect($host,$dbname,$username,$password);
    // Check connection
    if (mysqli_connect_errno()){
        echo "Error al conectar con MySQL: " . mysqli_connect_error();
    }
?>