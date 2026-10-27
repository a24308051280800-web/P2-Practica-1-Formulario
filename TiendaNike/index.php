
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike Store | Tienda Deportiva</title>
    <link rel="stylesheet" href="estilos.css">
    <script src="carrito.js" defer></script>
</head>
<body>


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


<section class="hero">
    <div class="hero-texto">
        <p class="etiqueta">NIKE SPORTSWEAR</p>
        <h1>SUPERA TUS<br> LÍMITES.</h1>
        <p>Encuentra el equipo ideal para alcanzar tu mejor versión.</p>
        <a class="boton" href="#productos">Comprar ahora</a>
    </div>
</section>

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

<section class="seccion" id="productos">
    <h2>Productos destacados</h2>

    <div class="productos">

        <article class="producto">
            <img src="imagenes/airmax.png" alt="Tenis Nike Air Max">
            <h3>Nike Air Max</h3>
            <p>Tenis deportivos para uso diario.</p>
            <strong>$2,499 MXN</strong>
            <button onclick="agregar('Nike Air Max',2499)">
                Agregar a la bolsa
            </button>
        </article>

        <article class="producto">
            <img src="imagenes/airforce.png" alt="Tenis Nike Air Force">
            <h3>Nike Air Force 1</h3>
            <p>Diseño clásico y comodidad.</p>
            <strong>$2,299 MXN</strong>
            <button onclick="agregar('Nike Air Force 1',2299)">
                Agregar a la bolsa
            </button>
        </article>

        <article class="producto">
            <img src="imagenes/playera.png" alt="Playera Nike">
            <h3>Playera Nike</h3>
            <p>Playera casual para todos los días.</p>
            <strong>$599 MXN</strong>
            <button onclick="agregar('Playera Nike',599)">
                Agregar a la bolsa
            </button>
        </article>

        <article class="producto">
            <img src="imagenes/sudadera.png" alt="Sudadera Nike">
            <h3>Sudadera Nike</h3>
            <p>Comodidad para entrenar o salir.</p>
            <strong>$1,399 MXN</strong>
            <button onclick="agregar('Sudadera Nike',1399)">
                Agregar a la bolsa
            </button>
        </article>

        <article class="producto">
            <img src="imagenes/gorra.png" alt="Gorra deportiva">
            <h3>Gorra deportiva</h3>
            <p>Un accesorio para completar tu estilo.</p>
            <strong>$499 MXN</strong>
            <button onclick="agregar('Gorra deportiva',499)">
                Agregar a la bolsa
            </button>
        </article>

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

<section class="seccion bolsa" id="carrito">
    <h2>Tu bolsa de compras</h2>
    <div id="lista-carrito"></div>
    <h3>Total: $<span id="total">0</span> MXN</h3>

    <button onclick="vaciar()">Vaciar bolsa</button>
    <button onclick="comprar()">Finalizar compra</button>
</section>

</body>
</html>
