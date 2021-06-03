<?php
    session_start();
    $usuario = $_SESSION['usuario'];

    echo "<H1> BIENVENIDO $usuario </H1>";

    echo "<a href='salir.php'>Salir</a>"
?>
