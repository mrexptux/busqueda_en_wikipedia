function buscarWikipedia() {

    const resultadoDiv = document.getElementById('resultado');

    //Capturamos el valor del termino que estamos buscando.
    const terminoBusqueda = document.getElementById('terminoBusqueda').value;

    if (terminoBusqueda.trim() === '') { //Antes de realizar lo siguiente lo que vamos hacer es comprobar que terminoBusqueda que es el INPUT tiene valor.

        alert('¡Por favor ingrese un término de búsqueda!');
        resultadoDiv.innerHTML = '';

        return;
    }

    //Realizamos la llamada a la API de la WIKIPEDIA con los parametros que necesita para realizar el filtro.
    fetch(`https://en.wikipedia.org/w/api.php?action=query&list=search&srsearch=${terminoBusqueda}&format=json&origin=*`)
        .then(response => response.json())
        .then(data => {

            //Especificamos el elemento en cuestion donde le añadiremos el resultado de la API WIKIPEDIA.

            resultadoDiv.innerHTML = '';
            const resultadoBusqueda = data.query.search; //Esto es lo que devuelve la api que es un array de objetos.

            resultadoBusqueda.forEach(result => {
                const resultadoElementos = document.createElement('div'); //Creamos un elemento DIV con dom
                resultadoElementos.className = 'resultado-item';
                resultadoElementos.innerHTML = `<h3>${result.title}</h3><p>${result.snippet}</p><a href="https://en.wikipedia.org/wiki/${result.title}" target="_blank">Leer más</a>`; //Creamos la estructura del DIV con los datos.
                resultadoDiv.appendChild(resultadoElementos); //Introducimos la estructura creada anteriormente en el DIV que queremos.
            });

            // llamamos a la funcion para guardar el termino de busqueda.
            guardamosterminoBusqueda(terminoBusqueda);
        })
        .catch(error => console.error('Error:', error));
}

//Funcion que hace una lamada fetch indicandole donde tiene que llamar a la api y los datos que le pasaremos y que metodo es, en este caso POST ya que enviamos datos y no solicitamos datos si solicitaramos datos utilizariamos GET.
function guardamosterminoBusqueda(termino) {
    fetch('../db/guardar_busqueda.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ termino })
    })
        .then(response => response.text())
        .then(data => console.log(data))
        .catch(error => console.error('Error:', error));
}
