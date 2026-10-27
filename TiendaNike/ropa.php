
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ropa Nike</title>
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

<section class="seccion">
    <h2>Ropa deportiva</h2>
    <p>Prendas deportivas y casuales para completar tu estilo.</p>

    <div class="productos">

        <article class="producto">
            <img src="imagenes/playera.png" alt="Playera Nike Sportswear">
            <h3>Playera Nike Sportswear</h3>
            <p>Playera casual de diseño sencillo.</p>
            <strong>$599 MXN</strong>
            <button onclick="agregar('Playera Nike Sportswear',599)">Agregar a la bolsa</button>
        </article>

        <article class="producto">
            <img src="imagenes/sudadera.png" alt="Sudadera Nike">
            <h3>Sudadera Nike</h3>
            <p>Una prenda cómoda para los días frescos.</p>
            <strong>$1,399 MXN</strong>
            <button onclick="agregar('Sudadera Nike',1399)">Agregar a la bolsa</button>
        </article>

        <article class="producto">
            <img src="imagenes/pants.png" alt="Pants deportivos">
            <h3>Pants deportivos</h3>
            <p>Ideales para entrenar o descansar.</p>
            <strong>$1,099 MXN</strong>
            <button onclick="agregar('Pants deportivos',1099)">Agregar a la bolsa</button>
        </article>

        <article class="producto">
            <img src="imagenes/shorts.png" alt="Short Nike">
            <h3>Short Nike</h3>
            <p>Para hacer ejercicio y practicar deporte.</p>
            <strong>$699 MXN</strong>
            <button onclick="agregar('Short Nike',699)">Agregar a la bolsa</button>
        </article>

        <article class="producto">
            <img src="imagenes/chamarra.png" alt="Chamarra deportiva">
            <h3>Chamarra deportiva</h3>
            <p>Una opción para tus actividades al aire libre.</p>
            <strong>$1,799 MXN</strong>
            <button onclick="agregar('Chamarra deportiva',1799)">Agregar a la bolsa</button>
        </article>

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
