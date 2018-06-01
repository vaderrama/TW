<?php
require("contenidowebGestor.php");
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


		
		<h2>Consulta compras pendientes</h2>

		<?php



if($_SERVER["REQUEST_METHOD"] == "POST"){
$id = $_POST['id'];


echo <<< HTML
<form action="actualizar1.php" method="post">
  <label>ID pedido :</label>
  <input type="number" name="id" value="$id" readonly="readonly"><br>
  <label>Estado : </label><br>
  <label><input type="radio" name="estado" value="Aceptado" required> Aceptar<br></label>
  <label><input type="radio" name="estado" value="Denegado"> Denegar<br></label>
  <label>Motivo : </label>
  <input type="text" name="motivo" required>
  <input type="submit" name="submit" value="Enviar">
</form>


HTML;


}

 ?>

	


<div id="zonaTexto2">



</div>

	</div>

<?php

usuarioRegistrado();

gestortools();


?>


</div>


<div id="pie">

<?php

pie();

?>

</div>

</body>


</html>