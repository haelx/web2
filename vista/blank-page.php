<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Ventas - Waifu Food</title>
    <!-- Agregar Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shC1n0w2lw3z5aDdtzEJ4SLq5NqL2ba0yc8yf" crossorigin="anonymous">
    <style>
        body {
            background-color: #0052a5; /* Fondo azul */
            color: #fff; /* Texto blanco */
            font-family: Arial, sans-serif;
            padding-top: 20px;
        }
        .menu-item {
            background-color: rgba(128, 0, 285); /* Fondo blanco con opacidad */
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
            margin-bottom: 20px;
        }
        .menu-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        .img-thumbnail {
            border: none;
            border-radius: 10px;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-5">Menú - Waifu Food</h1>
        <!-- Hamburguesa 1 -->
        <div class="menu-item">
            <img src="images/hamburguesa_clasica.png" width="400px" class="img-thumbnail mb-3" alt="Hamburguesa 1"> 
            <h3 class="mb-3">Hamburguesa Clasica</h3>
            <p class="mb-3">carne de res, tosino, lechuga, tomate, cebolla y queso chedar.</p>
            <div class="input-group mb-3">
                <span class="input-group-text">Cantidad</span>
                <input type="number" class="form-control">
            </div>
        </div>

        <!-- Hamburguesa 2 -->
        <div class="menu-item">
            <img src="images/hamburguesa_doble.png" width="400px" class="img-thumbnail mb-3" alt="Hamburguesa 2">
            <h3 class="mb-3">Hamburguesa Doble</h3>
            <p class="mb-3"> doble carne de res, tosino, lechuga, tomate, cebolla y queso chedar</p>
            <div class="input-group mb-3">
                <span class="input-group-text">Cantidad</span>
                <input type="number" class="form-control">
            </div>
        </div>

        <!-- Hamburguesa 3 -->
        <div class="menu-item">
            <img src="images/hamburguesa-barbacoa.png" width="400px" class="img-thumbnail mb-3" alt="Hamburguesa 3">
            <h3 class="mb-3">Barbacoa Burguer</h3>
            <p class="mb-3">carne de res, tosino, queso chedar, salsa barbacoa</p>
            <div class="input-group mb-3">
                <span class="input-group-text">Cantidad</span>
                <input type="number" class="form-control">
            </div>
        </div>

        <!-- Hamburguesa 4 -->
        <div class="menu-item">
            <img src="images/Hamburguesa-de-pollo.png" width="400px" class="img-thumbnail mb-3" alt="Hamburguesa 4">
            <h3 class="mb-3">Hamburguesa de pollo</h3>
            <p class="mb-3">carne de pollo, tosino, lechuga, tomate, cebolla, queso musarela.</p>
            <div class="input-group mb-3">
                <span class="input-group-text">Cantidad</span>
                <input type="number" class="form-control">
            </div>
        </div>

        <!-- Hamburguesa 5 -->
        <div class="menu-item">
            <img src="images/hamburguesa-vegana.png" width="400px" class="img-thumbnail mb-3" alt="Hamburguesa 5">
            <h3 class="mb-3">Hamburguesa Vegana</h3>
            <p class="mb-3">Cane de soya, lechuga, tomate, palta</p>
            <div class="input-group mb-3">
                <span class="input-group-text">Cantidad</span>
                <input type="number" class="form-control">
            </div>
        </div>

        <!-- Hamburguesa 6 -->
        <div class="menu-item">
            <img src="images/hamburguesa_ninos.png" width="400px" class="img-thumbnail mb-3" alt="Hamburguesa 6">
            <h3 class="mb-3">Kit Burguer</h3>
            <p class="mb-3">Carne de pollo, lechgua, tomate, pepinillos, aceitunas</p>
            <div class="input-group mb-3">
                <span class="input-group-text">Cantidad</span>
                <input type="number" class="form-control">
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-md-6">
                <h2 class="mb-3">Refrescos</h2>
                <table class="table">
                    <tbody>
                    <img src="images/refresco.png" width="200px" class="img-thumbnail mb-3" alt="refrescos">
                        <tr>
                            <td>Coca-Cola</td>
                            <td>
                                <input type="number" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Fanta</td>
                            <td>
                                <input type="number" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Sprite</td>
                            <td>
                                <input type="number" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Pepsi</td>
                            <td>
                                <input type="number" class="form-control">
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
            
            <h2 class="mb-3">Papas</h2>
            <img src="images/papas.png" width="200px" class="img-thumbnail mb-3" alt="Hamburguesa 6">
                <input type="number" class="form-control mb-3">
                
            </div>
        </div>

        <button class="btn btn-primary btn-lg mt-5">Pagar</button>
    </div>

    <!-- Agregar Bootstrap JS al final del body para un mejor rendimiento -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-+Vo9z3/zZoL9Pq4IkFyfMy0rC0o3E1z66kz5e0+87MU2oZlGB8Kkh9PeXrdz+BoX" crossorigin="anonymous"></script>
</body>
</html>