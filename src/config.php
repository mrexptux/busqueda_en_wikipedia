<?php

//Llamamos a las credenciales de .env y asi poder configurar correctamente los parametros de conexion.
require_once('../env.php');

//Parametros de configuracion de archivo .env
$db_host = getenv('DB_HOST');
$db_user = getenv('DB_USER');
$db_password = getenv('DB_PASSWORD');
$db_name = getenv('DB_NAME');

//Esta parte es muy importante ya que estamos configurando el tema de el contenido de datos y el tema de las cors.
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');


//POL: Llamamos a la conexion.
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

//POL: Verificamos si la conexion a sido existosa con el parametro que nos ofrece mysqli->connect_error.
if ($conn->connect_error) {
    die(json_encode(['error' => 'Connection failed: ' . $conn->connect_error]));
}


?>