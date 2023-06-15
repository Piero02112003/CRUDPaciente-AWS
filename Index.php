<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <br>
        <center>
            <H1>Listado de Pacientes</H1>
        </center>
        <br>
        <div class="container">

            <a href="NuevoPaciente.php" class="btn btn-dark">Agregar Paciente</a>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Especialidad</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "Config/Conexion.php";

                    $Sql = "SELECT * FROM paciente";
                    $resultado = $conexion->query($Sql);

                    while ($Fila = $resultado->fetch_assoc()) { ?>

                        <tr>
                            <th scope="row"><?php echo $Fila['Id']?></th>
                            <td><?php echo $Fila['Apellidos']?></td>
                            <td><?php echo $Fila['Nombres']?></td>
                            <td><?php echo $Fila['Sexo']?></td>
                            <td><?php echo $Fila['Especialidad']?></td>
                            <td><img style="width: 200px;" src="data:image/jpg;base64,<?php echo base64_encode($Fila['Foto'])?>" alt=""></td>
                            <td>
                                <a href="Vista_Editar.php?Id=<?php echo $Fila["Id"]?>" class="btn btn-warning">Editar</a>
                                <a href="Eliminar_Paciente.php?Id=<?php echo $Fila["Id"]?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                </tbody>
            <?php } ?>
            </table>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>