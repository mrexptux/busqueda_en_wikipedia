<?php

//Esta parte es muy importante ya que estamos configurando el tema de el contenido de datos y el tema de las cors.
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');


//Configuracion parametros del servidor. 
$servername = "localhost"; // Url donde tenemos que apuntar para poder realizar la conexion.
$username = "root"; // User del servidor.
$password = ""; //PW del servidor. 
$dbname = "historial_busqueda"; //Base de datos que hacemos referencia para realizar las acciones pedidas.

//Llamamos a la conexion.
$conn = new mysqli($servername, $username, $password, $dbname);

//Verificamos si la conexion a sido existosa con el parametro que nos ofrece mysqli->connect_error.
if ($conn->connect_error) {
    die(json_encode(['error' => 'Connection failed: ' . $conn->connect_error]));
}


?>