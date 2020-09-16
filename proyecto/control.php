<?php 

if(isset($_REQUEST['btn_guardar'])){
    include("../conexion/conexion.php");

    $fecha = $_POST['fecha'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $grado = $_POST['grado'];
    $turno = $_POST['turno'];

    $sql = "INSERT INTO alummno(fecha, nombre, apellido, edad, grado, turno) VALUES ('$fecha', '$nombre', '$apellido', '$edad', '$grado', '$turno')";

    $ejecutar = mysqli_query($conexion, $sql);

    if ($ejecutar) {
        header("Location: index.php");
    }
}

?>