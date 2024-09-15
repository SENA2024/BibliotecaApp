<?php
    include 'db.php';

    $queryLibros = "SELECT * FROM libro WHERE cantidad > 0";

    $resultLibros = mysqli_query($conn, $queryLibros);

    $libors = [];
    while($row = mysqli_fetch_assoc($resultLibros)){
        $libros[] = $row;
    }

    echo json_encode([
        'libros' => $libros
    ])
?>