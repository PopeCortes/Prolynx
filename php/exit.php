<script>
window.onunload = function() {
    <?php
    // Inicia sesión si no está iniciada
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    // Elimina todas las variables de sesión
    session_unset();

    // Destruye la sesión
    session_destroy();
    ?>
}
</script>
<?php
header("Location: ../index.php");
?>
