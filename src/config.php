<?php

//Llamamos a las credenciales de .env y asi poder configurar correctamente los parametros de conexion.
require_once('../env.php');

//Esta parte es muy importante ya que estamos configurando el tema de el contenido de datos y el tema de las cors.
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');


//POL: Configuracion parametros del servidor. 
$servername = "localhost"; // Url donde tenemos que apuntar para poder realizar la conexion.
$username = "root"; // User del servidor.
$password = ""; //PW del servidor. 
$dbname = "historial_busqueda"; //Base de datos que hacemos referencia para realizar las acciones pedidas.

//POL: Llamamos a la conexion.
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//POL: Verificamos si la conexion a sido existosa con el parametro que nos ofrece mysqli->connect_error.
if ($conn->connect_error) {
    die(json_encode(['error' => 'Connection failed: ' . $conn->connect_error]));
}


?>