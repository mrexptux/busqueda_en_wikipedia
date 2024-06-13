<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación de búsqueda de Wikipedia</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <img src="images/logo.png" alt="Logo" class="logo">
        <h1>Búsqueda en Wikipedia</h1>
        <input type="text" id="terminoBusqueda" placeholder="Introduzca el término de búsqueda...">
        <button onclick="buscarWikipedia()">Buscar</button>
        <div id="resultado"></div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
