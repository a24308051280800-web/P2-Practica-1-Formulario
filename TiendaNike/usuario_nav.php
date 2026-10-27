<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<div class="usuario-nav">
    <?php if (isset($_SESSION["usuario_id"])): ?>

        <span>
            Usuario:
            <strong>
                <?php echo htmlspecialchars($_SESSION["usuario_nombre"]); ?>
            </strong>
        </span>

        <a href="cerrar_sesion.php" class="cerrar-sesion">
            Cerrar sesión
        </a>

    <?php else: ?>

        <span>Usuario: <strong>Sin usuario</strong></span>
        <a href="login.php">Iniciar sesión</a>
        <a href="registro.php">Registrarse</a>

    <?php endif; ?>
</div>