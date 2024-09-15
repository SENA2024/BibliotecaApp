const containerLibros = document.getElementById("container-libros");

function cargarLibros(){
    fetch("../php/listar-libros.php")
    .then(response => response.json())
    .then(data => {
        data.libros.forEach(element => {
            const div = document.createElement("div");
            div.className = 'card';
            div.innerHTML = `
                <p>Libro: ${element.titulo}</p>
                <p>Autor: ${element.autor}</p>
                <p>Cantidad: ${element.cantidad}</p>
            `;
            containerLibros.appendChild(div);
        })
    })
    .catch(error => console.log(error))
}

cargarLibros();