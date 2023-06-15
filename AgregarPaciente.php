<?php

    include "Config/Conexion.php";

    $apellidospaciente =$_POST["Apellidos"];
    $nombrespaciente =$_POST["Nombres"];
    $sexopaciente =$_POST["Sexo"];
    $especialidadpaciente =$_POST["Especialidad"];
    $foto = addslashes(file_get_contents($_FILES['Foto']['tmp_name']));

    $sql = "INSERT INTO `paciente` ( Apellidos, Nombres, Sexo, Especialidad, Foto) VALUES ('$apellidospaciente','$nombrespaciente','$sexopaciente','$especialidadpaciente','$foto')";

    $resultado = $conexion -> query($sql);

    if ($resultado) {
        header('Location: Index.php');
    }else {
        echo "No se insertaron los datos";
    }

 

