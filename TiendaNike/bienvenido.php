
<?php
session_start();

if (!isset($_SESSION["usuario_id"])) {
    header("Location: login.php");
    exit;
}

$nombre = $_SESSION["usuario_nombre"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido | Nike Store</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<header class="encabezado">
    <a class="logo" href="index.php">NIKE<span>.</span></a>
    <nav>
        <a href="index.php">Inicio</a>
        <a href="tenis.php">Tenis</a>
        <a href="ropa.php">Ropa</a>
        <a href="accesorios.php">Accesorios</a>
    </nav>
</header>

<main class="formulario-contenedor bienvenida">
    <h1>¡Bienvenido, <?php
        echo htmlspecialchars($nombre, ENT_QUOTES, "UTF-8");
    ?>!</h1>

    <p>Has iniciado sesión correctamente en Nike Store.</p>

    <a href="index.php" class="boton boton-bienvenida">
        Ir a la tienda
    </a>

    <a href="cerrar_sesion.php" class="enlace-formulario">
        Cerrar sesión
    </a>
</main>

<footer>
    <h2>NIKE.</h2>
    <p>Just Do It.</p>
</footer>

</body>
</html>
