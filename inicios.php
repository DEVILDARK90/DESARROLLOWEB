<?php
    //phpinfo();
    echo "<h1>"."APRENDIENDO PHP"."</h1><br>";
    //VARIABLES EN PHP

    $nombre = "EDGAR";
    $edad = 15;
    echo "MI NOMBRE ES: ".$nombre." Y MI EDAD ES: ".$edad." AÑOS"."<br>";
    if ($edad >= 18)
    echo " SOY MAYOR DE EDAD"."<br>";
    else 
    echo " SOY MENOR DE EDAD"."<br>";

    $a=1;
    while ($a <= $edad)
    {
    echo $a."<br>";
    $a++;
    }
    ?>