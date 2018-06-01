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



  require('../conexionBD.php');

  $query1 = "SELECT ID , Email , Disco , Precio , Estado , FechaRealizacion , FechaModificacion , Gestor , Motivo FROM compras WHERE Estado = 'Pendiente'";
  $result2 = mysqli_query($conexion,$query1) or die('Consulta fallida: '.mysqli_error());


  // CAMBIAR TD POR TH 
  echo "<table border = '1'> \n"; 
  echo "<tr><th>ID</th><td>Email</td><td>Disco</td><td>Precio</td><td>Estado</td><td>FechaRealizacion</td><td>FechaModificacion</td><td>Gestor</td><td>Motivo</td></tr> \n"; 


	while ($row = mysqli_fetch_row($result2)){ 
       echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td></tr> \n"; 
       } 

	echo "</table> \n"; 

  ?>

	


<div id="zonaTexto2">


    <h2>Selecciona compra para la Gestión</h2>

    <?php

    echo <<< HTML
<form action="actualizarPedido.php" method="post">
<label>Introduce el ID del pedido a gestionar</label>
<input type="number" name="id" required>
<input type="submit" name="submit" value="ENVIAR">
</form>

HTML;



    ?>

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