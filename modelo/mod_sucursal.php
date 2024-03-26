<?php
class Sucursal {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function obtenerSucursales() {
        $query = "SELECT * FROM sucursal";
        $statement = $this->conexion->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerSucursalPorId($id) {
        $query = "SELECT * FROM sucursal WHERE id_sucursal = :id";
        $statement = $this->conexion->prepare($query);
        $statement->bindParam(":id", $id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function crearSucursal($direccion, $nit, $sufijo, $id_responsable) {
        $query = "INSERT INTO sucursal (direccion, nit, sufijo, id_responsable) VALUES (:direccion, :nit, :sufijo, :id_responsable)";
        $statement = $this->conexion->prepare($query);
        $statement->bindParam(":direccion", $direccion);
        $statement->bindParam(":nit", $nit);
        $statement->bindParam(":sufijo", $sufijo);
        $statement->bindParam(":id_responsable", $id_responsable);
        return $statement->execute();
    }

    public function eliminarSucursal($id) {
        $query = "DELETE FROM sucursal WHERE id_sucursal = :id";
        $statement = $this->conexion->prepare($query);
        $statement->bindParam(":id", $id);
        return $statement->execute();
    }
}

// Ejemplo de uso
try {
    $conexion = new PDO("mysql:host=localhost;dbname=nombre_base_de_datos", "usuario", "contraseña");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sucursalModelo = new Sucursal($conexion);

    // Obtener todas las sucursales
    $sucursales = $sucursalModelo->obtenerSucursales();
    print_r($sucursales);

    // Obtener una sucursal por su ID
    $sucursal = $sucursalModelo->obtenerSucursalPorId(1);
    print_r($sucursal);

    // Crear una nueva sucursal
    $sucursalModelo->crearSucursal("Dirección de ejemplo", "123456789", "SufijoEjemplo", 1);

    // Eliminar una sucursal
    $sucursalModelo->eliminarSucursal(2);

} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>