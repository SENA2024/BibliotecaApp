<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "bibliotecapp";
    $port = 3307;

    $conn = mysqli_connect($host, $user, $pass, $db, $port);

    if(!$conn){
        echo("No se pudo conectar a la base de datos");
    }else{
        //echo("Conexión exitosa");
    }
?>