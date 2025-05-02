<?php
session_start();

if(isset ($_SESSION['USUARIO']) && isset ($_SESSION['ROL']))
{
    echo "HOLA, ".$_SESSION['USUARIO'] . " TU ROL ES: " . $_SESSION['ROL'];
}
 else {
     echo "NO SE ENCUENTRA REGISTRADO. POR FAVOR <a href='login.php'>INICIA SESION</a>.";
 }

?>