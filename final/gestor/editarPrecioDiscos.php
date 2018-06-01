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


		
		<h2>Editar precio Discos</h2>

		<?php



  require('../conexionBD.php');

  $query1 = "SELECT ID ,NombreDisco , Precio FROM Discos";
  $result2 = mysqli_query($conexion,$query1) or die('Consulta fallida: '.mysqli_error());


  // CAMBIAR TD POR TH 
  echo "<table border = '1'> \n"; 
  echo "<tr><th>ID</th><th>NombreDisco</th><th>Precio</th></tr> \n"; 


	while ($row = mysqli_fetch_row($result2)){ 
       echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr> \n"; 
       } 

	echo "</table> \n"; 

  ?>

	


<div id="zonaTexto2">


    <h2>Selecciona ID del disco para cambiar el precio</h2>

    <?php

    echo <<< HTML
<form action="cambiaprecios.php" method="post">
<label>Introduce el ID del disco</label>
<input type="number" name="entrada" required>
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