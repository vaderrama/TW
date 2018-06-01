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
		
		<h2>Listado de Discos en venta</h2>
    <fieldset>
    <legend><p id="des">  Eliga una de las siguientes opciones : </p></legend>

<form action="compradisco.php" method="post" >

  <input type="radio" name="discos" value="50Palos"> <pre>50 Palos ( 2017 ) 
 </pre><img src="images/disco50palos.jpeg"><br>
  <input type="radio" name="discos" value="Adelantando"> <pre>Adelantando ( 2007 ) 
  </pre><img src="images/discoadelantando.jpeg">
  <input type="radio" name="discos" value="Bonito "> Bonito ( 2003 )<img src="images/discobonito.jpeg" width="144px">
   <input type="radio" name="discos" value="DeVueltayVuelta">De vuelta y vuelta (2001)<img src="images/discodevueltayvuelta.jpeg">
  <input type="radio" name="discos" value="Depende"> Depende (1998)<img src="images/discodepende.jpeg">
  <input type="radio" name="discos" value="LaFlaca "> La Flaca (1996)<img src="images/discolaflaca.jpeg"> 

  </fieldset>

 <button type="submit">Enviar</button>

</form>
		<p id="des"> </p>





<div id="zonaTexto2">

  <h2></h2>
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