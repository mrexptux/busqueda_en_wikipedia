function buscarWikipedia() {

    //POL: Hacemos referencia al div del resultado para posteriormente poder cargar los resultados.
    const resultadoDiv = document.getElementById('resultado');

    //POL: Capturamos el valor del termino que estamos buscando.
    const terminoBusqueda = document.getElementById('terminoBusqueda').value;

    if (terminoBusqueda.trim() === '') { //POL: Antes de realizar lo siguiente lo que vamos hacer es comprobar que terminoBusqueda que es el INPUT tiene valor.

        alert('¡Por favor ingrese un término de búsqueda!');
        resultadoDiv.innerHTML = '';
        return;
    }

    //Pol: Función para validar el término de búsqueda, incluyendo la ñ y caracteres acentuados ya que tenemos caracteres con ñ o acentos.
    function validarBusquedaTermino(termino) {
        const regex = /^[a-zA-Z0-9\sáéíóúÁÉÍÓÚñÑüÜ]+$/;
        return regex.test(termino);
    }

    //Pol: Funcion para limpiar el termino de busqueda de signos raros o extraños que nos puedan inyectar.
    function limpiarTerminoBusqueda(termino) {
        return termino.replace(/[^a-zA-Z0-9\sáéíóúÁÉÍÓÚñÑüÜ]/g, '');
    }

    //Pol: Antes de realizar la llamada a la API vamos hacer una comprobacion del valor del input, para evitar inyecciones SQL.
    if (validarBusquedaTermino(terminoBusqueda)) {

        const terminoBusquedaLimpio = limpiarTerminoBusqueda(terminoBusqueda);

        //POL: Realizamos la llamada a la API de la WIKIPEDIA con los parametros que necesita para realizar el filtro.
        fetch(`https://en.wikipedia.org/w/api.php?action=query&list=search&srsearch=${encodeURIComponent(terminoBusquedaLimpio)}&format=json&origin=*`)
            .then(response => response.json())
            .then(data => {

                //POL: Especificamos el elemento en cuestion donde le añadiremos el resultado de la API WIKIPEDIA.
                resultadoDiv.textContent = '';
                const resultadoBusqueda = data.query.search; //POL: Esto es lo que devuelve la api que es un array de objetos.

                resultadoBusqueda.forEach(result => {

                    const resultadoElementos = document.createElement('div'); //POL: Creamos un elemento DIV con dom

                    //Pol: Añadimos al div la clase resultado-item, que le hemos dado anteriormente estilos.
                    resultadoElementos.className = 'resultado-item';

                    //Pol: Usamos textContent para evitar las inyecciones ya que permite texto.
                    const title = document.createElement('h3');
                    title.textContent = result.title;

                    //Pol: Usaremos en este caso InnerHTML ya que tenemos que controlar el contenido HTML.
                    const snippet = document.createElement('p');
                    snippet.innerHTML = result.snippet;

                    //Pol: Creamos el link para posteriormente ir al link del termino buscado y añadiremos textContent para evitar inyecciones.
                    const link = document.createElement('a');
                    link.href = `https://en.wikipedia.org/wiki/${encodeURIComponent(result.title)}`;
                    link.target = '_blank';
                    link.textContent = 'Leer más';

                    //Pol: Para finalizar y en orden añadiremos los 3 elementos que seran el titulo del termino devuelto por la api el snippet 
                    resultadoElementos.appendChild(title);
                    resultadoElementos.appendChild(snippet);
                    resultadoElementos.appendChild(link);

                    resultadoDiv.appendChild(resultadoElementos); //Pol: Al acabar de crear elementos DOM añadimos esos elementos al DIV padre que es resultadoDIV.


                });

                //POL: llamamos a la funcion para guardar el termino de busqueda.
                guardamosterminoBusqueda(terminoBusqueda);
            })
            .catch(error => console.error('Error:', error));


    } else {

        alert("Término de búsqueda no válido.");

    }


}

//POL: Funcion que hace una lamada fetch indicandole donde tiene que llamar a la api y los datos que le pasaremos y que metodo es, en este caso POST ya que enviamos datos y no solicitamos datos si solicitaramos datos utilizariamos GET.
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
