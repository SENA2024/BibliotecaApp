<?php
    include 'db.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['correo'];
    $password = $_POST['contrasena'];

    $verificar = "SELECT * FROM usuario WHERE email = '$email'";

    $resultVerificar = mysqli_query($conn, $verificar);

    if(mysqli_num_rows($resultVerificar) > 0){
        echo "Usuario ya registrado";
        return;
    }

    $query = "INSERT INTO usuario (nombre, apellido, email, pass) VALUES ('$nombre', '$apellido', '$email', '$password')";

    $result = mysqli_query($conn, $query);

    if($result){
        echo "Usuario creado exitosamente";
    }else {
        echo "Error al crear el usuario";
    }
?>