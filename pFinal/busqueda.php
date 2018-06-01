<?php
require("contenidoweb.php");
session_start();
?>
<!DOCTYPE html>
<html>


<?php

head();

?>

<body>

<div id="wrapper">


<div id="PanelTop"> 
	
  <?php

panelTop();

  ?>
</div>

<div id="PanelMid">



	<div id="zonaTexto">



		
		<h2>Buscar discografía</h2>

		<form method="post" action="buscar.php"></form>
		<label>Introduce el texto a buscar : </label>
		<input type="text" name="busqueda" required>
		<input type="submit" name="enviar">
		</form>

		<h2>Buscar conciertos</h2>

		<form method="post" action="buscar.php">
			<label>Buscar segun lugares :</label><br>
			<!– TERMINAR ESTE TROZO / SELECTOR MULTIPLE SEGUN LOS LUGARES DONDE HAY CONCIERT   –>
			<label>Buscar segun fechas dadas : </label><br>
			<input type="date" name="fecha1">	
			<input type="date" name="fecha2">
			<input type="submit" name="enviar">
		</form>








<div id="zonaTexto2">

  <h2>  </h2>
	<p> </p>

</div>

	</div>

<?php

require('conexionBD.php');

if (empty($_SESSION["user"])) {
 
// ZONA DE LOGIN SE MUESTRA

zonaLogin();



}else{

usuarioRegistrado();


}


// COMPROBACION DE SI ES GESTOR O ADMINISTRADOR

$usuario=$_SESSION['user'];
$query1 = "SELECT TipoDeUsuario FROM gestorescompras WHERE Login='$usuario'";
$result2 = mysqli_query($conexion,$query1) or die('Consulta fallida: '.mysqli_error());

while ($row =mysqli_fetch_row($result2)) { 
  $comp = $row[0];
}

if ($comp == "Gestor") {

 gestortools();

 
}else if ($comp == "Administrador") {


admintools();

}


?>


</div>


<div id="pie">

<?php

pie();

?>

</div>

</body>


</html>