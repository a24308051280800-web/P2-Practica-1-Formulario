
let carrito = JSON.parse(localStorage.getItem("carritoNike")) || [];

function guardarCarrito() {
    localStorage.setItem("carritoNike", JSON.stringify(carrito));
}

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

function quitar(indice) {
    carrito.splice(indice, 1);
    guardarCarrito();
    actualizarCarrito();
}

function vaciar() {
    carrito = [];
    guardarCarrito();
    actualizarCarrito();
}

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

function iniciarSesion(evento) {
    evento.preventDefault();

    let correo = document.getElementById("correo").value;

    alert(
        "Formulario validado.\nCorreo ingresado: " + correo +
        "\n\nEl inicio de sesión real requiere un sistema de usuarios."
    );

    return false;
}

document.addEventListener("DOMContentLoaded", actualizarCarrito);
