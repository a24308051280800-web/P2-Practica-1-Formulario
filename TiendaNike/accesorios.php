
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesorios Nike</title>
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
    <h2>Accesorios deportivos</h2>
    <p>Complementa tu equipo con accesorios para el día a día.</p>

    <div class="productos">

        <article class="producto">
            <img src="imagenes/mochila.png" alt="Mochila deportiva">
            <h3>Mochila deportiva</h3>
            <p>Espacio para tus objetos personales.</p>
            <strong>$999 MXN</strong>
            <button onclick="agregar('Mochila deportiva',999)">Agregar a la bolsa</button>
        </article>

        <article class="producto">
            <img src="imagenes/gorra.png" alt="Gorra deportiva">
            <h3>Gorra deportiva</h3>
            <p>Un accesorio casual para exteriores.</p>
            <strong>$499 MXN</strong>
            <button onclick="agregar('Gorra deportiva',499)">Agregar a la bolsa</button>
        </article>

        <article class="producto">
            <img src="imagenes/calcetines.png" alt="Calcetines deportivos">
            <h3>Calcetines deportivos</h3>
            <p>Un complemento para tu equipo deportivo.</p>
            <strong>$299 MXN</strong>
            <button onclick="agregar('Calcetines deportivos',299)">Agregar a la bolsa</button>
        </article>

        <article class="producto">
            <img src="imagenes/reloj.png" alt="Reloj deportivo">
            <h3>Reloj deportivo</h3>
            <p>Accesorio para complementar tu estilo.</p>
            <strong>$1,499 MXN</strong>
            <button onclick="agregar('Reloj deportivo',1499)">Agregar a la bolsa</button>
        </article>

        <article class="producto">
            <img src="imagenes/audifonos.png" alt="Audífonos">
            <h3>Audífonos deportivos</h3>
            <p>Escucha música durante tus actividades.</p>
            <strong>$899 MXN</strong>
            <button onclick="agregar('Audífonos deportivos',899)">Agregar a la bolsa</button>
        </article>

        <article class="producto">
            <img src="imagenes/lentes.png" alt="Lentes deportivos">
            <h3>Lentes deportivos</h3>
            <p>Un accesorio para actividades al aire libre.</p>
            <strong>$799 MXN</strong>
            <button onclick="agregar('Lentes deportivos',799)">Agregar a la bolsa</button>
        </article>

    </div>
</section>


</body>
</html>
