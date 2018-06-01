<?php
session_start();
require ('../conexionBD.php');


if($_SERVER["REQUEST_METHOD"] == "POST"){


$id = $_POST['id'];
$estado = $_POST['estado'];
$motivo = $_POST['motivo'];
$ahora = time();
$fechahoy = date('Y-m-d', $ahora) ;
$gestor = $_SESSION['user'];




  $query1 = "UPDATE  compras SET Estado='$estado' , Motivo='$motivo' , Gestor='$gestor' , FechaModificacion='$fechahoy' WHERE ID = '$id'";
  $result2 = mysqli_query($conexion,$query1) or die('Consulta fallida: '.mysqli_error());



if ($conexion->query($query1) === TRUE) {
    echo "<script type=''>alert('PEDIDO MODIFICADO CORRECTAMENTE');</script>";
    echo "<script>location.href='consultarPedidos.php'</script>";

  }
}
?>