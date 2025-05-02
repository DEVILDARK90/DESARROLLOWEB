<?php

session_start();

$_SESSION['USUARIO'] = "Edgar";
$_SESSION['ROL'] = "Estudiante";

echo "Sesion Iniciada: "."<br>";

echo "<a href='Bienvenida.php'>Ir a la pagina de Bienvenida</a>";

?>