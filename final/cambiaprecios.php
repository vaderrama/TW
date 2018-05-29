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


		
		<h2>Editar precio Discos</h2>

		<?php

  require('conexionBD.php');


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id=$_POST['entrada'];
    // HACER COOKIE CON EL ID .
     setcookie("id",$id,time()+1000);

  $query1 = "SELECT Precio FROM Discos WHERE ID='$id'";
  $result2 = mysqli_query($conexion,$query1) or die('Consulta fallida: '.mysqli_error());

  $query2 = "SELECT NombreDisco FROM Discos WHERE ID='$id'";
  $result3 = mysqli_query($conexion,$query2) or die('Consulta fallida: '.mysqli_error());


  while ($row =mysqli_fetch_row($result2)) { 
    $comp = $row[0];
  }

   while ($row1 =mysqli_fetch_row($result3)) { 
    $comp1 = $row1[0];
  }

  echo <<< html

<form action="updateprecio.php" method="post">

<label> Nombre del disco seleccionado ; </label>
<input type "text" name="nombredisc" readonly="readonly" value="$comp1"><br><br>
<label>Precio del disco seleccionado ; </label>
<input type="number" name="preciodisc" value="$comp" required><br>

<input type="submit" name="submit" value="ENVIAR">
</form>


html;
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