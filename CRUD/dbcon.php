<?php

$con = mysqli_connect("localhost", "root","","honesty");

if(!$con){
    die('La conexión con la base de datos no es exitosa'. mysqli_connect_error());
}

?>