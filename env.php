<?php

/**
 * Carga las variables de entorno desde el archivo .env
 *
 * @param string $path Ruta al archivo .env
 * @return array Las variables de entorno cargadas
 */
function load_env($path)
{
    $variables = [];

    // Verificar si el archivo .env existe
    if (!file_exists($path)) {
        throw new Exception("El archivo .env no existe.");
        alert("El archivo .env no existe..");
    }

    // Leer líneas del archivo .env
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        // Ignorar líneas que comiencen con # (comentarios)
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        // Dividir la línea en nombre y valor de variable
        list($key, $value) = explode('=', $line, 2);

        // Limpiar y asignar la variable de entorno
        $key = trim($key);
        $value = trim($value);
        putenv("$key=$value");
        $variables[$key] = $value;
    }

    return $variables;
}

// Ruta al archivo .env (ajusta según la ubicación de tu archivo .env)
$dotenv_path = __DIR__ . '/.env';

// Cargar las variables de entorno desde el archivo .env
$env_vars = load_env($dotenv_path);

?>