<?php
require("conexionBD.php");
session_start();



if($_SERVER["REQUEST_METHOD"] == "POST"){

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$pago = $_POST['pago'];
$ntarjeta = $_POST['ntarjeta'];
$mes = $_POST['mes'];
$cvv = $_POST['cvv'];
$precio = $_POST['precio'];
$disco = $_POST['disco'];
$estado = "Pendiente";
$fechamodificacion = "";
$fechahoy = date("d/m/Y");
$gestor ="";
$motivo = "";

$query1 = "INSERT INTO compras (Nombre, Apellidos, Email ,Direccion, Disco, Precio , Estado , FechaRealizacion , FechaModificacion , Gestor , Motivo)
VALUES ('$nombre', '$apellidos', '$email','$direccion', '$disco','$precio', '$estado' , '$fechahoy' , '$fechamodificacion' , '$gestor' , '$motivo')";


if ($conexion->query($query1) === TRUE) {
    echo "<script type=''>alert('PEDIDO REALIZADO CORRECTAMENTE');</script>";
    echo "<script>location.href='homepage.php'</script>";

} else {
    echo "Error: " . $query1 . "<br>" . $conexion->error;

}

}

$conexion->close();


?>
