<?php
include "cabecera.php";
?>
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <h3 class="tile-title">Registrar Persona</h3>
            <div class="tile-body">
                <form id="form-registroPersona" class="form-horizontal">
                    <div class="form-group row">
                        <label class="control-label col-md-3">Nombre</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" placeholder="Ingrese su nombre" name="nombre" id="nombre">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Primer Apellido</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" placeholder="Ingrese su primer apellido" name="papellido" id="papellido">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Segundo Apellido</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" placeholder="Ingrese su segundo apellido" name="sapellido" id="sapellido">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Celular</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" placeholder="Ingrese su celular" name="celular" id="celular">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Direccion</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" placeholder="Ingrese su direccion" name="direccion" id="direccion">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Fecha de nacimiento</label>
                        <div class="col-md-8">
                            <input class="form-control" type="date" placeholder="Ingrese su fecha de nacimiento" name="fechanac" id="fechanac">
                        </div>
                    </div>
                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-3">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                            </div>
                        </div>
                    </div>                  
                </form>
            </div>

        </div>
    </div>

</div>
<?php
include "footer.php";
?>
      <script type="text/javascript">
      $(document).ready(function() {
        $('#form-registroPersona').on('submit', function(e) {
            e.preventDefault();
            // validation code here
            var nombre = $('#nombre').val();
            var papellido = $('#papellido').val();
              var sapellido = $('#sapellido').val();
                var celular = $('#celular').val();
                  var direccion = $('#direccion').val();
                    var fechanac = $('#fechanac').val();
            var datos = {
                'nombre': nombre,
                'papellido': papellido,
                'sapellido': sapellido,
                'celular':celular,
                'direccion':direccion,
                'fechanac': fechanac
            }
            $.ajax({
                url: "../controlador/controladorPersona.php",
                type: 'POST',
                data: JSON.stringify(datos),
                success: function(result) {
                    var resp = JSON.parse(result);
                    //window.location.href = "/vista";
                    console.log(resp);
                   
                }
            });
        });
    });
    </script>

