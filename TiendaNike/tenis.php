
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenis Nike</title>
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
    <h2>Calzado deportivo</h2>
    <p>Encuentra tenis para entrenar, correr y usar todos los días.</p>

    <div class="productos">

        <article class="producto">
            <img src="imagenes/airmax.png" alt="Nike Air Max">
            <h3>Nike Air Max</h3>
            <p>Tenis casuales con diseño deportivo.</p>
            <strong>$2,499 MXN</strong>
            <button onclick="agregar('Nike Air Max',2499)">Agregar a la bolsa</button>
        </article>

        <article class="producto">
            <img src="imagenes/airforce.png" alt="Nike Air Force 1">
            <h3>Nike Air Force 1</h3>
            <p>Estilo clásico para cualquier ocasión.</p>
            <strong>$2,299 MXN</strong>
            <button onclick="agregar('Nike Air Force 1',2299)">Agregar a la bolsa</button>
        </article>

        <article class="producto">
            <img src="imagenes/running.png" alt="Tenis Nike Running">
            <h3>Nike Running</h3>
            <p>Calzado deportivo para salir a correr.</p>
            <strong>$1,899 MXN</strong>
            <button onclick="agregar('Nike Running',1899)">Agregar a la bolsa</button>
        </article>

        <article class="producto">
            <img src="imagenes/court.png" alt="Nike Court">
            <h3>Nike Court</h3>
            <p>Diseño urbano inspirado en el deporte.</p>
            <strong>$1,799 MXN</strong>
            <button onclick="agregar('Nike Court',1799)">Agregar a la bolsa</button>
        </article>

        <article class="producto">
            <img src="imagenes/training.png" alt="Nike Training">
            <h3>Nike Training</h3>
            <p>Para complementar tus entrenamientos.</p>
            <strong>$1,699 MXN</strong>
            <button onclick="agregar('Nike Training',1699)">Agregar a la bolsa</button>
        </article>

        <article class="producto">
            <img src="imagenes/sportswear.png" alt="Nike Sportswear">
            <h3>Nike Sportswear</h3>
            <p>Comodidad y estilo para el día a día.</p>
            <strong>$2,099 MXN</strong>
            <button onclick="agregar('Nike Sportswear',2099)">Agregar a la bolsa</button>
        </article>

    </div>
</section>


</body>
</html>
