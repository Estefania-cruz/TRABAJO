<?php
    print_r($_POST);
    if(!isset($_POST['codigo'])){
        header('Location: index.php?mensaje=error');
    }

    include 'model/conexion.php';
    $codigo = $_POST['codigo'];
    $nombre = $_POST['txtNombre'];
    $edad = $_POST['txtEdad'];
    $carrera = $_POST['txtCarrera'];
    $sistema = $_POST['txtSistema'];

    $sentencia = $bd->prepare("UPDATE persona SET nombre = ?, edad = ?, carrera = ?,sistema = ? where codigo = ?;");
    $resultado = $sentencia->execute([$nombre, $edad, $carrera,$sistema, $codigo]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>