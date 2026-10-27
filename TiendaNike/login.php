
<?php
session_start();
require_once "conexion.php";

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $correo = trim($_POST["correo"] ?? "");
    $contrasena = $_POST["contrasena"] ?? "";

    if (!filter_var($correo, FILTER_VALIDATE_EMAIL) || $contrasena === "") {
        $mensaje = "Ingresa un correo y una contraseña válidos.";
    } else {
        $consulta = $conexion->prepare(
            "SELECT id, nombre, correo, contrasena
             FROM usuarios WHERE correo = ?"
        );

        $consulta->bind_param("s", $correo);
        $consulta->execute();
        $consulta->store_result();

        if ($consulta->num_rows === 1) {
            $consulta->bind_result(
                $id,
                $nombre,
                $correoBD,
                $hash
            );
            $consulta->fetch();

            if (password_verify($contrasena, $hash)) {
                session_regenerate_id(true);

                $_SESSION["usuario_id"] = $id;
                $_SESSION["usuario_nombre"] = $nombre;
                $_SESSION["usuario_correo"] = $correoBD;

                $consulta->close();
                $conexion->close();

                header("Location: bienvenido.php");
                exit;
            }
        }

        $mensaje = "Correo o contraseña incorrectos.";
        $consulta->close();
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión | Nike Store</title>
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

<main class="formulario-contenedor">
    <h1>Iniciar sesión</h1>
    <p>Ingresa a tu cuenta de Nike Store.</p>

    <?php if ($mensaje !== ""): ?>
        <div class="mensaje error">
            <?php echo htmlspecialchars($mensaje, ENT_QUOTES, "UTF-8"); ?>
        </div>
    <?php endif; ?>

    <form action="login.php" method="POST">
        <label for="correo">Correo electrónico</label>
        <input type="email" id="correo" name="correo"
               autocomplete="email" required>

        <label for="contrasena">Contraseña</label>
        <input type="password" id="contrasena" name="contrasena"
               autocomplete="current-password" required>

        <button type="submit">Iniciar sesión</button>
    </form>

    <a class="enlace-formulario" href="registro.php">
        ¿No tienes cuenta? Regístrate aquí
    </a>

    <a class="enlace-formulario" href="index.php">
        Volver a la tienda
    </a>
</main>



</body>
</html>
