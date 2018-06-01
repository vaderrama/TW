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


		
		<h2>Jarabe de Palo, Rock Español</h2>

		<p id="des"> Pau Donés trabajó en varios grupos antes de poder llevar a cabo su proyecto actual, Jarabe de Palo. Comenzó su historia musical a los 15 años junto con su hermano Marc, con quien formó un grupo llamado J.& Co.Band y posteriormente otro llamado Dentaduras Postizas. Durante este período combinaba sus actuaciones musicales en locales de Barcelona con un trabajo en una agencia de publicidad.

El éxito le llegaría tras un viaje a Cuba, donde le llegó la inspiración que le llevaría a escribir la canción La Flaca, la cual dio título a su primer disco en 1996. Su primer tema se hace famoso un año más tarde, gracias a un spot publicitario, llevando al disco a vender millones de copias en varios países.

Tras este éxito en un primer disco Pau buscaba demostrar que el grupo no era un "One-hit wonder" (grupo de un solo éxito), y con esta idea se lanzó Depende (1998), que fue producido por Joe Dworniak (conocido en España por su trabajo con Radio Futura) en los estudios Moody de Londres durante dos meses. Este disco contó con colaboraciones como Ketama y continuó con una lírica irónica que consiguió conectar con parte del público hispano e incluso llegar al público italiano.</p>

	<img src="images/jarabedepalogrupo.jpg" width="800px" height="400px">







<div id="zonaTexto2">

  <h2> Ultimas Noticias </h2>
	<p> La canción que da nombre al nuevo álbum de Jarabe de Palo, De vuelta y vuelta, puede ser descargada gratuitamente en exclusiva en Internet desde el sitio web de Los 40 Principales (www.los40.com) hasta el día 12 de enero. Los usuarios que descarguen el sencillo podrán disfrutarlo sólo hasta el día 31 de enero. El nuevo álbum de Jarabe de Palo se pondrá a la venta el próximo 12 de febrero.

Si bien este tipo de promociones es habitual en países como Estados Unidos, Canadá o el Reino Unido, es la primera ocasión en que una discográfica española, Virgin Records, utiliza Internet para ofrecer una descarga gratuita para la promoción de un álbum antes de que éste se ponga a la venta. Utilizando la tecnología de MusicaAlaCarta.com en Control de Derechos Digitales, las compañías discográficas y los artistas disponen de una herramienta dinámica para la promoción de música protegida en el entorno digital.

'Estamos muy ilusionados con esta nueva iniciativa desarrollada conjuntamente por Virgin Records y 40 Principales. El poder de Internet como medio promocional para los lanzamientos discográficos ha quedado demostrado en los últimos tres años', comenta Iari Debad Wan, director de estrategias de conceptualización de MusicaAlaCarta.com.</p>

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
