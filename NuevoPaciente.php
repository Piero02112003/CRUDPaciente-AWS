<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Nuevo Paciente</title>
</head>
<body>
    <div class="container">
        <br>
        <h1>Nuevo Paciente</h1>
        <br>
        <form action="AgregarPaciente.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellidos del Paciente</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="Apellidos">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombres del Paciente</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="Nombres">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Sexo del Paciente</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="Sexo">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Especialidad para el Paciente</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="Especialidad">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Foto</label>
                <input type="File" class="form-control" name="Foto">
            </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
        <a href="Index.php" class="btn btn-info">Regresar</a>
    </form>
    </div>

</body>
</html>