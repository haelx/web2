<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Registro Persona</title>
</head>
<body>
<form class="container mt-5" action="../controlador/ct_persona.php" method="post">
    <h1 class="mb-4">Registro Persona</h1>
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre" id="nombre">
    </div>
    <div class="form-group">
        <label for="papellido">Primer Apellido:</label>
        <input type="text" class="form-control" name="papellido" id="papellido">
    </div>
    <div class="form-group">
        <label for="sapellido">Segundo Apellido:</label>
        <input type="text" class="form-control" name="sapellido" id="sapellido">
    </div>
    <div class="form-group">
        <label for="celular">Celular:</label>
        <input type="number" class="form-control" name="celular" id="celular">
    </div>
    <div class="form-group">
        <label for="direccion">Dirección:</label>
        <textarea class="form-control" name="direccion" id="direccion" cols="20" rows="2"></textarea>
    </div>
    <div class="form-group">
        <label for="fechanac">Fecha de nacimiento:</label>
        <input type="date" class="form-control" name="fechanac" id="fechanac">
    </div>
    <button id="btn-registrar" type="submit" class="btn btn-primary">Registrar</button>
    <button type="reset" class="btn btn-secondary">Limpiar</button>
</form>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>
<?php
session_start();
if (isset($_SESSION['error']) && $_SESSION['error'] == 1) {
    $mensaje = $_SESSION['mensaje'];
    echo "<script>
Swal.fire({
  title: 'Error!',
  text: 'Do you want to continue',
  icon: 'error',
  confirmButtonText: 'Cool'
})('$mensaje')
</script>";
    $_SESSION['error'] = 0;
}
?>