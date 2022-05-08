<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtEdad"]) || empty($_POST["txtCarrera"]) || empty($_POST["txtSistema"])){
        header('Location: index.php?mensaje=falta');
        exit();
    }

    include_once 'model/conexion.php';
    $nombre = $_POST["txtNombre"];
    $edad = $_POST["txtEdad"];
    $carrera = $_POST["txtCarrera"];
    $sistema = $_POST["txtSistema"];
    
    $sentencia = $bd->prepare("INSERT INTO persona(nombre,edad,carrera,sistema) VALUES (?,?,?,?);");
    $resultado = $sentencia->execute([$nombre,$edad,$carrera,$sistema]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=registrado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>