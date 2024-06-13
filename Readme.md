# 📖 Búsqueda en Wikipedia 📖

## Descripción

La aplicación web Wikipedia Search permite a los usuarios realizar búsquedas de términos en Wikipedia y visualizar los resultados directamente en la misma página. Además, guarda automáticamente un historial de búsquedas en una base de datos SQL mediante el uso de PHP.


![Captura de pantalla](public/images/imagenAplicativo.png)

![Captura de pantalla](public/images/imagenAplicativo1.png)


## Configuración

1. Clonar el repositorio: `git clone https://github.com/tu-usuario/busqueda_en_wikipedia.git`
2. Crear la base de datos `historial_busqueda` y ejecutar el script `db/init.sql`.
3. Configurar los parámetros de la base de datos creando un fichero .env en la raiz usando de ejemplo .env.example y modificando el nombre a .env
4. Asegurarse de que el servidor web esté configurado para servir archivos PHP (XAMPP) y acceder a la carpeta `public`.

## Uso

Abrir `public/index.php` en un navegador web. Ingresar un término de búsqueda y ver los resultados. Las búsquedas se guardarán automáticamente en la base de datos.

## Autor / Desarrollador

Desarrollado por `Pol Aguilar Cardus`. Puedes encontrarme en [LinkedIn](https://www.linkedin.com/in/pol-aguilar-cardús-2930388b).

## Estructura del Proyecto

```plaintext
busqueda_en_wikipedia/
├── .git
├── db
│ └── init.sql
├── public
│ ├── css
│ │ └── styles.css
│ ├── images
│ │ ├── imagenAplicativo.png
│ │ ├── imagenAplicativo1.png
│ │ └── logo.png
│ ├── js
│ │ └── script.js
│ └── index.php
├── src
│ ├── db
│ │ ├── guardar_busqueda.php
│ │ └── config.php
│ ├── .env.example
│ └── env.php
└── README.md
=======
