<!DOCTYPE html>
<html lang="es">
<head>
    <!-- *Configura los caracteres, la adaptación a dispositivos y el título de la página. -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ropa Nike</title>

    <!-- *Conecta los estilos CSS y el archivo JavaScript del carrito de compras. -->
    <link rel="stylesheet" href="estilos.css">
    <script src="carrito.js" defer></script>
</head>
<body>

<!-- *Encabezado de la tienda con el logotipo, los enlaces de navegación y la bolsa de compras. -->
<header class="encabezado">
    <a class="logo" href="index.php">NIKE<span>.</span></a>

    <!-- *Menú para navegar entre las diferentes secciones de la tienda. -->
    <nav>
        <a href="index.php">Inicio</a>
        <a href="tenis.php">Tenis</a>
        <a href="ropa.php">Ropa</a>
        <a href="accesorios.php">Accesorios</a>

        <!-- *Incluye los enlaces relacionados con la cuenta del usuario. -->
        <?php include 'usuario_nav.php'; ?>
    </nav>

    <!-- *Muestra el acceso a la bolsa y la cantidad de productos agregados. -->
    <div class="acciones">
        <a href="carrito.php">Bolsa (<span id="contador">0</span>)</a>
    </div>
</header>

<!-- *Sección principal que presenta la ropa deportiva disponible en la tienda. -->
<section class="seccion">
    <h2>Ropa deportiva</h2>
    <p>Prendas deportivas y casuales para completar tu estilo.</p>

    <!-- *Contenedor que organiza las tarjetas de los productos de ropa. -->
    <div class="productos">

        <!-- *Tarjeta de producto con imagen, descripción, precio y botón para agregarlo a la bolsa. -->
        <article class="producto">
            <img src="imagenes/playera.png" alt="Playera Nike Sportswear">
            <h3>Playera Nike Sportswear</h3>
            <p>Playera casual de diseño sencillo.</p>
            <strong>$599 MXN</strong>
            <button onclick="agregar('Playera Nike Sportswear',599)">Agregar a la bolsa</button>
        </article>

        <!-- *Tarjeta que muestra la sudadera Nike y permite agregarla al carrito. -->
        <article class="producto">
            <img src="imagenes/sudadera.png" alt="Sudadera Nike">
            <h3>Sudadera Nike</h3>
            <p>Una prenda cómoda para los días frescos.</p>
            <strong>$1,399 MXN</strong>
            <button onclick="agregar('Sudadera Nike',1399)">Agregar a la bolsa</button>
        </article>

        <!-- *Tarjeta que presenta los pants deportivos con su precio y botón de compra. -->
        <article class="producto">
            <img src="imagenes/pants.png" alt="Pants deportivos">
            <h3>Pants deportivos</h3>
            <p>Ideales para entrenar o descansar.</p>
            <strong>$1,099 MXN</strong>
            <button onclick="agregar('Pants deportivos',1099)">Agregar a la bolsa</button>
        </article>

        <!-- *Tarjeta que presenta los shorts Nike y permite agregarlos a la bolsa. -->
        <article class="producto">
            <img src="imagenes/shorts.png" alt="Short Nike">
            <h3>Short Nike</h3>
            <p>Para hacer ejercicio y practicar deporte.</p>
            <strong>$699 MXN</strong>
            <button onclick="agregar('Short Nike',699)">Agregar a la bolsa</button>
        </article>

        <!-- *Tarjeta que muestra la chamarra deportiva con su descripción y precio. -->
        <article class="producto">
            <img src="imagenes/chamarra.png" alt="Chamarra deportiva">
            <h3>Chamarra deportiva</h3>
            <p>Una opción para tus actividades al aire libre.</p>
            <strong>$1,799 MXN</strong>
            <button onclick="agregar('Chamarra deportiva',1799)">Agregar a la bolsa</button>
        </article>

        <!-- *Tarjeta que presenta una playera casual y permite agregarla al carrito. -->
        <article class="producto">
            <img src="imagenes/playera-casual.png" alt="Playera casual">
            <h3>Playera casual</h3>
            <p>Combina con tus tenis favoritos.</p>
            <strong>$649 MXN</strong>
            <button onclick="agregar('Playera casual',649)">Agregar a la bolsa</button>
        </article>

    </div>
</section>

</body>
</html>