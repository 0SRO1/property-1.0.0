<?php
session_start();
require 'dbcon.php';

if(isset($_POST['enviar'])){
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $documento = mysqli_real_escape_string($con, $_POST['documento']);


    $query = "INSERT INTO usuario (nombre, documento) VALUES('$nombre', '$documento')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message']="Datos insertados en la base de datos";
        header("Location: form1.php");
        exit(0);
    }
    else{
        $_SESSION['message']="Datos NO insertados en la base de datos";
        header("Location: form1.php");
        exit(0);
    }
}

?>