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


		
		<h2>Consulta compras pendientes</h2>

		<?php



  require('conexionBD.php');

  $query1 = "SELECT * FROM compras";
  $result2 = mysqli_query($conexion,$query1) or die('Consulta fallida: '.mysqli_error());



  echo "<table border = '1'> \n"; 
  echo "<tr><td>Nombre</td><td>Apellidos</td><td>Email</td><td>Direccion</td><td>Disco</td><td>Precio</td><td>Estado</td><td>FechaRealizacion</td><td>FechaModificacion</td><td>Gestor</td><td>Motivo</td></tr> \n"; 


	while ($row = mysqli_fetch_row($result2)){ 
       echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td><td>$row[10]</td></tr> \n"; 
       } 

	echo "</table> \n"; 

  ?>

	


<div id="zonaTexto2">

  <h2> Ultimas Noticias </h2>
	<p> La canción que da nombre al nuevo álbum de Jarabe de Palo, De vuelta y vuelta, puede ser descargada gratuitamente en exclusiva en Internet desde el sitio web de Los 40 Principales (www.los40.com) hasta el día 12 de enero. Los usuarios que descarguen el sencillo podrán disfrutarlo sólo hasta el día 31 de enero. El nuevo álbum de Jarabe de Palo se pondrá a la venta el próximo 12 de febrero.

Si bien este tipo de promociones es habitual en países como Estados Unidos, Canadá o el Reino Unido, es la primera ocasión en que una discográfica española, Virgin Records, utiliza Internet para ofrecer una descarga gratuita para la promoción de un álbum antes de que éste se ponga a la venta. Utilizando la tecnología de MusicaAlaCarta.com en Control de Derechos Digitales, las compañías discográficas y los artistas disponen de una herramienta dinámica para la promoción de música protegida en el entorno digital.

'Estamos muy ilusionados con esta nueva iniciativa desarrollada conjuntamente por Virgin Records y 40 Principales. El poder de Internet como medio promocional para los lanzamientos discográficos ha quedado demostrado en los últimos tres años', comenta Iari Debad Wan, director de estrategias de conceptualización de MusicaAlaCarta.com.</p>

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