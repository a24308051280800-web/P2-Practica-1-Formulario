<?php
/* *Comprueba si todavía no existe una sesión activa y, si es necesario, la inicia. */
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!-- *Contenedor que muestra las opciones de navegación relacionadas con la cuenta del usuario. -->
<div class="usuario-nav">

    <!-- *Comprueba si el usuario ha iniciado sesión para mostrar sus datos y opciones. -->
    <?php if (isset($_SESSION["usuario_id"])): ?>

        <!-- *Muestra el nombre del usuario que inició sesión. -->
        <span>
            Usuario:
            <strong>
                <?php echo htmlspecialchars($_SESSION["usuario_nombre"]); ?>
            </strong>
        </span>

        <!-- *Enlace que permite cerrar la sesión actual. -->
        <a href="cerrar_sesion.php" class="cerrar-sesion">
            Cerrar sesión
        </a>

    <!-- *Si no hay una sesión iniciada, muestra el estado y las opciones de acceso. -->
    <?php else: ?>

        <!-- *Indica que actualmente no hay ningún usuario conectado. -->
        <span>Usuario: <strong>Sin usuario</strong></span>

        <!-- *Enlace para acceder al formulario de inicio de sesión. -->
        <a href="login.php">Iniciar sesión</a>

        <!-- *Enlace para acceder al formulario de registro de una cuenta nueva. -->
        <a href="registro.php">Registrarse</a>

    <?php endif; ?>
</div>