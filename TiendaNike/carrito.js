// *Recupera los productos guardados en el almacenamiento local del navegador. Si no existe un carrito guardado, crea uno vacío.
let carrito = JSON.parse(localStorage.getItem("carritoNike")) || [];

// *Guarda el contenido actual del carrito en localStorage para conservar los productos aunque se recargue la página.
function guardarCarrito() {
    localStorage.setItem("carritoNike", JSON.stringify(carrito));
}

// *Busca un producto en el carrito para aumentar su cantidad si ya existe o agregarlo como nuevo. Después guarda y actualiza el carrito y muestra una confirmación.
function agregar(nombre, precio) {
    let producto = carrito.find(p => p.nombre === nombre);

    if (producto) {
        producto.cantidad++;
    } else {
        carrito.push({
            nombre: nombre,
            precio: precio,
            cantidad: 1
        });
    }

    guardarCarrito();
    actualizarCarrito();

    alert(nombre + " se agregó a tu bolsa.");
}

// *Actualiza la información visual del carrito, calcula la cantidad total de productos y el precio acumulado, y muestra la lista con opciones para eliminar artículos.
function actualizarCarrito() {
    let lista = document.getElementById("lista-carrito");
    let contador = document.getElementById("contador");
    let totalElemento = document.getElementById("total");

    let cantidadTotal = carrito.reduce(
        (suma, p) => suma + p.cantidad, 0
    );

    let total = carrito.reduce(
        (suma, p) => suma + p.precio * p.cantidad, 0
    );

    if (contador) {
        contador.textContent = cantidadTotal;
    }

    if (totalElemento) {
        totalElemento.textContent = total.toLocaleString("es-MX");
    }

    if (lista) {
        lista.innerHTML = "";

        if (carrito.length === 0) {
            lista.textContent = "Tu bolsa está vacía.";
            return;
        }

        // *Recorre los productos del carrito y crea los elementos que muestran su nombre, cantidad, subtotal y botón para eliminarlos.
        carrito.forEach((p, indice) => {
            let fila = document.createElement("div");
            fila.className = "item-carrito";

            let informacion = document.createElement("span");
            informacion.textContent =
                p.nombre + " x " + p.cantidad +
                " - $" +
                (p.precio * p.cantidad).toLocaleString("es-MX");

            let eliminar = document.createElement("button");
            eliminar.textContent = "Eliminar";
            eliminar.onclick = function () {
                quitar(indice);
            };

            fila.appendChild(informacion);
            fila.appendChild(eliminar);
            lista.appendChild(fila);
        });
    }
}

// *Elimina del carrito el producto que corresponde al índice indicado y actualiza la información guardada y mostrada.
function quitar(indice) {
    carrito.splice(indice, 1);
    guardarCarrito();
    actualizarCarrito();
}

// *Vacía todos los productos del carrito y guarda y muestra el resultado actualizado.
function vaciar() {
    carrito = [];
    guardarCarrito();
    actualizarCarrito();
}

// *Comprueba si hay productos en el carrito y muestra un mensaje. La función solo simula la compra y no procesa pagos reales.
function comprar() {
    if (carrito.length === 0) {
        alert("Tu bolsa está vacía.");
        return;
    }

    alert(
        "Esta es una tienda de demostración.\n" +
        "No se procesarán pagos reales."
    );
}

// *Valida los datos del formulario de registro, comprueba que las contraseñas coincidan y muestra los datos ingresados. No crea una cuenta ni guarda información.
function registrarUsuario(evento) {
    evento.preventDefault();

    let nombre = document.getElementById("nombre").value.trim();
    let correo = document.getElementById("correo").value.trim();
    let telefono = document.getElementById("telefono").value;
    let contrasena = document.getElementById("contrasena").value;
    let confirmar = document.getElementById("confirmar").value;

    if (contrasena !== confirmar) {
        alert("Las contraseñas no coinciden.");
        return false;
    }

    alert(
        "Formulario validado correctamente, " + nombre +
        ".\nCorreo: " + correo +
        "\nTeléfono: " + telefono +
        "\n\nEsta demostración no guarda los datos ni crea una cuenta real."
    );

    return false;
}

// *Evita el envío tradicional del formulario de inicio de sesión y muestra el correo ingresado. Esta función es una demostración y no autentica al usuario.
function iniciarSesion(evento) {
    evento.preventDefault();

    let correo = document.getElementById("correo").value;

    alert(
        "Formulario validado.\nCorreo ingresado: " + correo +
        "\n\nEl inicio de sesión real requiere un sistema de usuarios."
    );

    return false;
}

// *Espera a que el documento HTML termine de cargarse para actualizar la información del carrito en la página.
document.addEventListener("DOMContentLoaded", actualizarCarrito);