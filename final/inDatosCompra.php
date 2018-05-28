<?php
require("conexionBD.php");
session_start();


function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}


if($_SERVER["REQUEST_METHOD"] == "POST"){

$nombre = filtrado($_POST['nombre']);
$apellidos = filtrado($_POST['apellidos']);
$email = filtrado($_POST['email']);
$telefono = filtrado($_POST['telefono']);
$direccion = filtrado($_POST['direccion']);
$pago = filtrado($_POST['pago']);
$ntarjeta = filtrado($_POST['ntarjeta']);
$mes = filtrado($_POST['mes']);
$cvv = filtrado($_POST['cvv']);
$precio = filtrado($_POST['precio']);
$disco = filtrado($_POST['disco']);
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
