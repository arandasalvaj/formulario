<?php
function conectar(){
    $baseD="railway";
    $contra="ROgSMkRiceGeD4ToPGBW";
    $usuario="root";
    $host="containers-us-west-59.railway.app";

    $conexion=mysqli_connect($host,$usuario,$conexion,$baseD);

    if (!$conexion) {
        die("No hay conexion")
    }else {
        echo "Conexion exitosa !!!"
    }
}

conectar(); 

?>