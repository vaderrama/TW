<?php

require('conexionBD.php');

function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    return $datos;
}

    
if($_SERVER["REQUEST_METHOD"] == "POST"){


     if(($_POST["pago"]) == "Tarjeta"){

      if(empty($_POST["ntarjeta"])){
          $errores[] = "No se ha indicado numero Tarjeta";
    }
      if(empty($_POST["mes"])){
          $errores[] = "No se ha indicado mes de caducidad de la tarjeta";
    }
        if(empty($_POST["cvv"])){
          $errores[] = "No se ha indicado cvv de la tarjeta";
     }
 }

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
$ahora = time();
$fechahoy = date('Y-m-d', $ahora) ;
$gestor ="";
$motivo = "";
$ID = mt_rand(1, 999);




$query1 = "INSERT INTO compras (ID , Nombre, Apellidos, Email ,Direccion, Disco, Precio , Estado , FechaRealizacion , FechaModificacion , Gestor , Motivo)
VALUES ('$ID','$nombre', '$apellidos', '$email','$direccion', '$disco','$precio', '$estado' , '$fechahoy' , '$fechamodificacion' , '$gestor' , '$motivo')";


if ($conexion->query($query1) === TRUE) {
    echo "<script type=''>alert('PEDIDO REALIZADO CORRECTAMENTE');</script>";
    echo "<script>location.href='homepage.php'</script>";

} else {
    echo "Error: " . $query1 . "<br>" . $conexion->error;

}

}	

$conexion->close();


?>
