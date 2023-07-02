<?php
    session_start();
    // Destroy session
    if(session_destroy()) {
        // Redireccion a la pagina de inicio
        header("Location: index.php");
    }
?>