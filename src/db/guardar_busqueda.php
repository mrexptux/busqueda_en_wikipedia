<?php

include("../../src/config.php");

//POL: Leemos el cuerpo recibido por POST y lo transformamos a array, posteriormente elegimos el parametro recibido por POST.
$data = json_decode(file_get_contents('php://input'), true);
$termino = $data['termino'];


//POL: Preparamos la query y utilizamos tecnicas contra inyecciones.
$stmt = $conn->prepare("INSERT INTO busquedas (termino) VALUES (?)");
$stmt->bind_param("s", $termino);


//POL: Con el execute ejecutamos la query anterior y verficamos si se realiza bien la inseccion.
if ($stmt->execute()) {
    echo json_encode(['success' => 'El término de búsqueda se guardó correctamente.']);
} else {
    echo json_encode(['error' => 'Error al guardar el término de búsqueda: ' . $stmt->error]);
}

//POL: Cerramos la conexion y la query.
$stmt->close();
$conn->close();

?>