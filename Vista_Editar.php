<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Modificar Paciente</title>
</head>

<body>
    <?php
        include "Config/Conexion.php";
        $Id = $_REQUEST['Id'];

        $Sql = "SELECT * FROM paciente WHERE Id = $Id";
        $resultado = $conexion->query($Sql);

        $Fila = $resultado->fetch_assoc();

    ?>

    <div class="container">
        <br>
        <center>
            <h1>Modificar Paciente</h1>
        </center>
        <form action="EditarPaciente.php?IdEditar=<?php echo $Fila["Id"]?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="ApellidosPaciente" value="<?php echo $Fila['Apellidos']?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombres</label>
            <input type="text" class="form-control" name="NombresPaciente" value="<?php echo $Fila['Nombres']?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Sexo</label>
            <input type="text" class="form-control" name="SexoPaciente" value="<?php echo $Fila['Sexo']?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Especialidad</label>
            <input type="text" class="form-control" name="EspecialidadPaciente" value="<?php echo $Fila['Especialidad']?>">
        </div>

        <img style="width: 200px;" src="data:image/jpg;base64,<?php echo base64_encode($Fila['Foto'])?>" alt="">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Foto</label>
            <input type="File" class="form-control" name="FotoPaciente">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
        <a href="Index.php" class="btn btn-info">Regresar</a>
        </form>


    </div>

</body>

</html>