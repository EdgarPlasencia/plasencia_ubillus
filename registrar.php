<?php

$conexion=mysqli_connect('localhost','prueba','c8u$7ShG','test')
or die(mysql_error($mysqli));

insertar($conexion);

function insertar($conexion){
    $fecha=$_POST['fecha'];
    $taller=$_POST['taller'];

    $consulta="INSERT INTO prueba(fecha,taller)
    VALUES ('$fecha','$taller')";
    mysqli_query($conexion,$consulta);
    mysqli_close($conexion);
}

?>