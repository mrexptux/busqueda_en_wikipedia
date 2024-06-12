<?php

include("../src/config.php");

//
$data = json_decode(file_get_contents('php://input'), true);
$termino = $data['termino'];


//Preparamos la query y utilizamos tecnicas contra inyecciones.
$stmt = $conn->prepare("INSERT INTO busquedas (termino) VALUES (?)");
$stmt->bind_param("s", $termino);


//Con el execute ejecutamos la query anterior y verficamos si se realiza bien la inseccion.
if ($stmt->execute()) {
    echo json_encode(['success' => 'El término de búsqueda se guardó correctamente.']);
} else {
    echo json_encode(['error' => 'Error al guardar el término de búsqueda: ' . $stmt->error]);
}

//cerramos la conexion.
$stmt->close();
$conn->close();

?>