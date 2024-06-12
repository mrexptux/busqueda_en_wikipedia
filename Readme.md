# Wikipedia Search App

## Descripción
Esta aplicación web permite a los usuarios buscar términos en Wikipedia y ver los resultados en la misma página. El historial de búsquedas se guarda en una base de datos SQL mediante PHP.

## Estructura del Proyecto

wikipedia-search-app/
│
├── public/
│ ├── index.html # Archivo principal HTML
│ ├── styles.css # Archivo CSS para los estilos
│ └── script.js # Archivo JavaScript para la lógica del cliente
│
├── src/
│ ├── save_search.php # Archivo PHP para guardar el historial de búsquedas
│ └── config.php # Archivo PHP para la configuración de la base de datos
│
├── db/
│ └── init.sql # Script SQL para inicializar la base de datos y crear las tablas
│
└── README.md # Documentación del proyecto


## Configuración
1. Clonar el repositorio.
2. Crear la base de datos ejecutando el script `db/init.sql`.
3. Configurar los parámetros de la base de datos en `src/config.php`.
4. Asegurarse de que el servidor web esté configurado para servir archivos PHP y acceder a la carpeta `public`.

## Uso
Abrir `public/index.html` en un navegador web. Ingresar un término de búsqueda y ver los resultados. Las búsquedas se guardarán automáticamente en la base de datos.



