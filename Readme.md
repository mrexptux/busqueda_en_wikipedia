# 📖 Búsqueda en Wikipedia 📖

## Descripción

La aplicación web Wikipedia Search permite a los usuarios realizar búsquedas de términos en Wikipedia y visualizar los resultados directamente en la misma página. Además, guarda automáticamente un historial de búsquedas en una base de datos SQL mediante el uso de PHP.

## Estructura del Proyecto

```plaintext
wikipedia-search-app/
├── public/
│   ├── index.html
│   ├── styles.css
│   └── script.js
├── src/
├── save_search.php
├── config.php
└── db/
    └── init.sql



## Configuración

1. Clonar el repositorio: git clone [https://github.com/tu-usuario/busqueda_en_wikipedia.git](https://github.com/mrexptux/busqueda_en_wikipedia.git)  
2. Crear la base de datos ejecutando el script `db/init.sql`. 
3. Configurar los parámetros de la base de datos en `src/config.php`.
4. Asegurarse de que el servidor web esté configurado para servir archivos PHP (XAMPP) y acceder a la carpeta `public`.

## Uso

Abrir `public/index.html` en un navegador web. Ingresar un término de búsqueda y ver los resultados. Las búsquedas se guardarán automáticamente en la base de datos.


## Autor / Desarrollador

Desarrollado por [Pol Aguilar Cardus] Puedes encontrarme en [LinkedIn](https://www.linkedin.com/in/pol-aguilar-cardús-2930388b).




