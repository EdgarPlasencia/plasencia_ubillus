<?php

$conexion=mysqli_connect('localhost','prueba','c8u$7ShG','test')
or die(mysql_error($mysqli));

crear($conexion);

function crear($conexion){

    $consulta="CREATE TABLE test.registro ( fecha DATE NOT NULL , taller TEXT NOT NULL , kilometraje INT NOT NULL , costo INT NOT NULL , tipo TEXT NOT NULL , observaciones TEXT NOT NULL )";
    mysqli_query($conexion,$consulta);
    mysqli_close($conexion);
}

?>