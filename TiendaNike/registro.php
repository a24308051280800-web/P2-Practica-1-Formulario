
<?php
session_start();
require_once "conexion.php";

$mensaje = "";
$tipo = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = trim($_POST["nombre"] ?? "");
    $correo = trim($_POST["correo"] ?? "");
    $telefono = trim($_POST["telefono"] ?? "");
    $contrasena = $_POST["contrasena"] ?? "";
    $confirmar = $_POST["confirmar"] ?? "";

    if (
        $nombre === "" ||
        !filter_var($correo, FILTER_VALIDATE_EMAIL) ||
        !preg_match('/^[0-9]{10}$/', $telefono) ||
        strlen($contrasena) < 6
    ) {
        $mensaje = "Revisa los datos. La contraseña debe tener al menos 6 caracteres y el teléfono 10 dígitos.";
        $tipo = "error";
    } elseif ($contrasena !== $confirmar) {
        $mensaje = "Las contraseñas no coinciden.";
        $tipo = "error";
    } else {
        $consulta = $conexion->prepare(
            "SELECT id FROM usuarios WHERE correo = ?"
        );
        $consulta->bind_param("s", $correo);
        $consulta->execute();
        $consulta->store_result();

        if ($consulta->num_rows > 0) {
            $mensaje = "Este correo ya está registrado.";
            $tipo = "error";
        } else {
            $hash = password_hash($contrasena, PASSWORD_DEFAULT);

            $insertar = $conexion->prepare(
                "INSERT INTO usuarios
                (nombre, correo, telefono, contrasena)
                VALUES (?, ?, ?, ?)"
            );

            $insertar->bind_param(
                "ssss",
                $nombre,
                $correo,
                $telefono,
                $hash
            );

            if ($insertar->execute()) {
                $mensaje = "¡Registro exitoso! Ya puedes iniciar sesión.";
                $tipo = "exito";
            } else {
                $mensaje = "No se pudo completar el registro.";
                $tipo = "error";
            }

            $insertar->close();
        }

        $consulta->close();
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro | Nike Store</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<header class="encabezado">
    <a class="logo" href="index.html">NIKE<span>.</span></a>
    <nav>
        <a href="index.html">Inicio</a>
        <a href="tenis.html">Tenis</a>
        <a href="ropa.html">Ropa</a>
        <a href="accesorios.html">Accesorios</a>
    </nav>
</header>

<main class="formulario-contenedor">
    <h1>Crear una cuenta</h1>
    <p>Regístrate para formar parte de Nike Store.</p>

    <?php if ($mensaje !== ""): ?>
        <div class="mensaje <?php echo $tipo; ?>">
            <?php echo htmlspecialchars($mensaje, ENT_QUOTES, "UTF-8"); ?>
        </div>
    <?php endif; ?>

    <form action="registro.php" method="POST">
        <label for="nombre">Nombre completo</label>
        <input type="text" id="nombre" name="nombre"
               maxlength="100" required
               value="<?php echo htmlspecialchars($_POST["nombre"] ?? "", ENT_QUOTES, "UTF-8"); ?>">

        <label for="correo">Correo electrónico</label>
        <input type="email" id="correo" name="correo"
               maxlength="150" required
               value="<?php echo htmlspecialchars($_POST["correo"] ?? "", ENT_QUOTES, "UTF-8"); ?>">

        <label for="telefono">Teléfono</label>
        <input type="tel" id="telefono" name="telefono"
               pattern="[0-9]{10}" maxlength="10"
               minlength="10" required
               value="<?php echo htmlspecialchars($_POST["telefono"] ?? "", ENT_QUOTES, "UTF-8"); ?>">

        <label for="contrasena">Contraseña</label>
        <input type="password" id="contrasena" name="contrasena"
               minlength="6" required>

        <label for="confirmar">Confirmar contraseña</label>
        <input type="password" id="confirmar" name="confirmar"
               minlength="6" required>

        <button type="submit">Crear cuenta</button>
    </form>

    <a class="enlace-formulario" href="login.php">
        ¿Ya tienes cuenta? Inicia sesión
    </a>
    <a class="enlace-formulario" href="index.php">
        Volver a la tienda
    </a>
</main>

</body>
</html>
