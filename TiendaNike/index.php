<!DOCTYPE html>
<html lang="es">
<head>
    <!-- *Configura el idioma, la codificación de caracteres, la adaptación a diferentes dispositivos, el título de la página y los archivos externos de estilos y JavaScript. -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike Store | Tienda Deportiva</title>
    <link rel="stylesheet" href="estilos.css">
    <script src="carrito.js" defer></script>
</head>
<body>

<!-- *Contiene el encabezado principal de la tienda, el logotipo, los enlaces a las categorías, la información del usuario y el acceso a la bolsa de compras. -->
<header class="encabezado">
    <a class="logo" href="index.php">NIKE<span>.</span></a>

    <nav>
        <a href="index.php">Inicio</a>
        <a href="tenis.php">Tenis</a>
        <a href="ropa.php">Ropa</a>
        <a href="accesorios.php">Accesorios</a>

        <?php include 'usuario_nav.php'; ?>
    </nav>

    <div class="acciones">
        <a href="carrito.php">Bolsa (<span id="contador">0</span>)</a>
    </div>
</header>

<!-- *Presenta el banner principal con el nombre de la colección, un mensaje promocional y un enlace que lleva directamente a los productos destacados. -->
<section class="hero">
    <div class="hero-texto">
        <p class="etiqueta">NIKE SPORTSWEAR</p>
        <h1>SUPERA TUS<br> LÍMITES.</h1>
        <p>Encuentra el equipo ideal para alcanzar tu mejor versión.</p>
        <a class="boton" href="#productos">Comprar ahora</a>
    </div>
</section>

<!-- *Muestra las principales categorías de la tienda mediante tarjetas con imágenes y enlaces para acceder a tenis, ropa y accesorios. -->
<section class="seccion">
    <h2>Compra por categoría</h2>

    <div class="categorias">
        <a href="tenis.html" class="categoria">
            <img src="imagenes/airmax.png" alt="Tenis Nike">
            <h3>Tenis</h3>
        </a>

        <a href="ropa.html" class="categoria">
            <img src="imagenes/playera.png" alt="Ropa Nike">
            <h3>Ropa</h3>
        </a>

        <a href="accesorios.html" class="categoria">
            <img src="imagenes/mochila.png" alt="Accesorios Nike">
            <h3>Accesorios</h3>
        </a>
    </div>
</section>

<!-- *Presenta el catálogo de productos destacados. Cada tarjeta incluye una imagen, el nombre, una descripción, el precio y un botón que utiliza JavaScript para agregar el producto a la bolsa. -->
<section class="seccion" id="productos">
    <h2>Productos destacados</h2>

    <div class="productos">

        <!-- *Muestra los tenis Nike Air Max con su precio y la opción de agregarlos a la bolsa de compras. -->
        <article class="producto">
            <img src="imagenes/airmax.png" alt="Tenis Nike Air Max">
            <h3>Nike Air Max</h3>
            <p>Tenis deportivos para uso diario.</p>
            <strong>$2,499 MXN</strong>
            <button onclick="agregar('Nike Air Max',2499)">
                Agregar a la bolsa
            </button>
        </article>

        <!-- *Muestra los tenis Nike Air Force 1 y permite agregarlos a la bolsa con su precio correspondiente. -->
        <article class="producto">
            <img src="imagenes/airforce.png" alt="Tenis Nike Air Force">
            <h3>Nike Air Force 1</h3>
            <p>Diseño clásico y comodidad.</p>
            <strong>$2,299 MXN</strong>
            <button onclick="agregar('Nike Air Force 1',2299)">
                Agregar a la bolsa
            </button>
        </article>

        <!-- *Presenta una playera Nike con su descripción, precio y botón para agregarla a la bolsa. -->
        <article class="producto">
            <img src="imagenes/playera.png" alt="Playera Nike">
            <h3>Playera Nike</h3>
            <p>Playera casual para todos los días.</p>
            <strong>$599 MXN</strong>
            <button onclick="agregar('Playera Nike',599)">
                Agregar a la bolsa
            </button>
        </article>

        <!-- *Muestra una sudadera Nike con su información y permite agregarla a la bolsa de compras. -->
        <article class="producto">
            <img src="imagenes/sudadera.png" alt="Sudadera Nike">
            <h3>Sudadera Nike</h3>
            <p>Comodidad para entrenar o salir.</p>
            <strong>$1,399 MXN</strong>
            <button onclick="agregar('Sudadera Nike',1399)">
                Agregar a la bolsa
            </button>
        </article>

        <!-- *Presenta una gorra deportiva con su precio y el botón para añadirla a la bolsa. -->
        <article class="producto">
            <img src="imagenes/gorra.png" alt="Gorra deportiva">
            <h3>Gorra deportiva</h3>
            <p>Un accesorio para completar tu estilo.</p>
            <strong>$499 MXN</strong>
            <button onclick="agregar('Gorra deportiva',499)">
                Agregar a la bolsa
            </button>
        </article>

        <!-- *Muestra una mochila deportiva con su descripción, precio y opción para agregarla a la bolsa de compras. -->
        <article class="producto">
            <img src="imagenes/mochila.png" alt="Mochila deportiva">
            <h3>Mochila deportiva</h3>
            <p>Espacio para llevar tus pertenencias.</p>
            <strong>$999 MXN</strong>
            <button onclick="agregar('Mochila deportiva',999)">
                Agregar a la bolsa
            </button>
        </article>

    </div>
</section>

<!-- *Muestra la bolsa de compras con la lista de productos, el total acumulado y los botones para vaciarla o simular la finalización de la compra. JavaScript actualiza su contenido dinámicamente. -->
<section class="seccion bolsa" id="carrito">
    <h2>Tu bolsa de compras</h2>
    <div id="lista-carrito"></div>
    <h3>Total: $<span id="total">0</span> MXN</h3>

    <button onclick="vaciar()">Vaciar bolsa</button>
    <button onclick="comprar()">Finalizar compra</button>
</section>

</body>
</html>