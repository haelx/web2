<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .login-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<div class="login-container">
    <h2 class="text-center mb-4">Login</h2>
    <form id="formLogin">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </div>
    </form>
</div>

<!-- Bootstrap JS and dependencies (jQuery, Popper.js) -->
<script src="js/jquery-3.7.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#formLogin').on('submit', function (e) {
            e.preventDefault();
            // validation code here
            var usuario = $('#username').val();
            var pass = $('#password').val();
            var datos = {
                'usuario': usuario,
                'pass': pass
            }
            $.ajax({
                url: "../controlador/ct_login.php",
                type: 'POST',
                data: JSON.stringify(datos),
                success: function (result) {
                    console.log(result);
                    var resp = JSON.parse(result);
                    if (resp.exito === 1) {
                        // sessionStorage.setItem('nombre', resp.data.nombre);
                        // sessionStorage.setItem('papellido', resp.data.papellido);
                        window.location.href = "dashboard.php";
                    } else {
                        Swal.fire({
                            title: "Error",
                            text: resp.mensaje,
                            icon: "error"
                        });
                    }
                }
            });
        });

    });

</script>
</body>
</html>
