<?php


error_reporting(1);

include "Config/Conexion.php";

$Id = $_REQUEST['IdEditar'];

$Apellidos = $_POST['ApellidosPaciente'];
$Nombres = $_POST['NombresPaciente'];
$Sexo = $_POST['SexoPaciente'];
$Especialidad = $_POST['EspecialidadPaciente'];
$Foto = addslashes(file_get_contents($_FILES['FotoPaciente']['tmp_name']));


$sql = "UPDATE paciente SET 
Apellidos = '$Apellidos', 
Nombres = '$Nombres', 
Sexo = '$Sexo',
Especialidad = '$Especialidad',  
Foto = '$Foto' WHERE Id = $Id";


$resultado = $conexion->query($sql);

if ($resultado) {
    header("Location:Index.php");
}else {
    echo "No se insertaron lod datos";
}