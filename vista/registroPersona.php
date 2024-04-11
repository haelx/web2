<?php
include_once "cabecera.php";
include_once "menu.php";
?>
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="bi bi-speedometer"></i> Registro Persona</h1>
                <p>Llenado de datos de las personas</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            </ul>
        </div>
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">Registro Persona</h3>
                <div class="tile-body">
                    <form action="../controlador/ct_persona.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Nombres:</label>
                            <input required class="form-control" type="text" placeholder="Ingrese sus nombres" name="nombre">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Primer apellido:</label>
                            <input required class="form-control" type="text" placeholder="Ingrese su primer apellido" name="papellido">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Segundo apellido:</label>
                            <input class="form-control" type="text" placeholder="Ingrese su segundo apellido" name="sapellido">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Celular:</label>
                            <input class="form-control" type="number" placeholder="Ingrese su numero de celular" name="celular">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Direccion:</label>
                            <input class="form-control" type="text" placeholder="Ingrese su direccion de su domicilio" name="direccion">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Fecha de Nacimiento:</label>
                            <input class="form-control" type="date" placeholder="fecha" name="fechanac">
                        </div>
                        <div class="tile-footer">
                            <button class="btn btn-primary"type="submit"><i class="bi bi-check-circle-fill me-2"></i>Registrar</button>&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-warning" type="reset"><i class="bi bi-check-circle-fill me-2"></i>Limpiar</button>
                            &nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="bi bi-x-circle-fill me-2"></i>Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>



    </main>
<?php
include_once "pie.php";
?>



