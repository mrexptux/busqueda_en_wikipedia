# Wikipedia Search App

## Descripción
Esta aplicación web permite a los usuarios buscar términos en Wikipedia y ver los resultados en la misma página. El historial de búsquedas se guarda en una base de datos SQL mediante PHP.

## Estructura del Proyecto

wikipedia-search-app/
│
├── public/
│ ├── index.html
│ ├── styles.css
│ └── script.js
│
├── src/
│ ├── save_search.php
│ └── config.php
│
├── db/
│ └── init.sql
│
└── README.md


## Configuración
1. Clonar el repositorio.
2. Crear la base de datos ejecutando el script `db/historial_busqueda.sql`.
3. Configurar los parámetros de la base de datos en `src/config.php`.
4. Asegurarse de que el servidor web esté configurado para servir archivos PHP (XAMPP) y acceder a la carpeta `public`.

## Uso
Abrir `public/index.html` en un navegador web. Ingresar un término de búsqueda y ver los resultados. Las búsquedas se guardarán automáticamente en la base de datos.



