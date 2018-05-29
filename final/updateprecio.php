<?php

require('conexionBD.php');

function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    return $datos;
}

    
if($_SERVER["REQUEST_METHOD"] == "POST"){

$precioDisc = $_POST['preciodisc'];




$query1 = "UPDATE Discos SET Precio='$precioDisc' WHERE 


if ($conexion->query($query1) === TRUE) {
    echo "<script type=''>alert('PEDIDO REALIZADO CORRECTAMENTE');</script>";
    echo "<script>location.href='homepage.php'</script>";

} else {
    echo "Error: " . $query1 . "<br>" . $conexion->error;

}

}	

$conexion->close();


?>