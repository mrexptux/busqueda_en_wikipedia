# 📖 Búsqueda en Wikipedia 📖

## Descripción

La aplicación web Wikipedia Search permite a los usuarios realizar búsquedas de términos en Wikipedia y visualizar los resultados directamente en la misma página. Además, guarda automáticamente un historial de búsquedas en una base de datos SQL mediante el uso de PHP.


![Captura de pantalla](public/images/imagenAplicativo.png)

![Captura de pantalla](public/images/imagenAplicativo1.png)


## Configuración

1. Clonar el repositorio: `git clone https://github.com/tu-usuario/busqueda_en_wikipedia.git`
2. Crear la base de datos `historial_busqueda` y ejecutar el script `db/init.sql`.
3. Configurar los parámetros de la base de datos creando un fichero .env en la raíz y añadiendo la configuración de tu servidor.
4. Asegurarse de que el servidor web esté configurado para servir archivos PHP (XAMPP) y acceder a la carpeta `public`.

## Uso

Abrir `public/index.html` en un navegador web. Ingresar un término de búsqueda y ver los resultados. Las búsquedas se guardarán automáticamente en la base de datos.

## Autor / Desarrollador

Desarrollado por [Pol Aguilar Cardus]. Puedes encontrarme en [LinkedIn](https://www.linkedin.com/in/pol-aguilar-cardús-2930388b).



## Estructura del Proyecto

```plaintext
busqueda_en_wikipedia/
├── public/
│   ├── css/
│   │   └── styles.css
│   ├── js/
│   │   └── script.js
│   ├── images/
│   │   └── logo.png
│   └── index.php
├── src/
│   └── config.php
└── db/
    ├── guardar_busqueda.php
    └── init.sql
=======




