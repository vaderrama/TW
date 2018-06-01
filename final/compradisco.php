<?php
require("contenidoweb.php");
?>

<!DOCTYPE html>
<html>

<?php
head();
?>

<body>


<div id="PanelTop"> 
  <?php
PanelTop();
?>

</div>

<div id="PanelMid">



	<div id="zonaTexto">
		
		<h2>Datos de compra</h2>
    <fieldset>
    <legend><p id="des">  Rellene sus datos de compra : </p></legend>
    <form action="inDatosCompra.php" method="post">
    <fieldset>
      <legend>Datos del disco:</legend>
      <label for="disco">Nombre del disco:</label>
      <input type="text" name="disco" readonly="readonly" value="<?php $disco=$_POST['discos']; echo "$disco";
      ?>
      ">
      <label for="precio">Precio del disco:</label>
      <input type="text" name="precio" readonly="readonly" value="
      <?php
      require('conexionBD.php');

      if($_SERVER["REQUEST_METHOD"] == "POST"){

        $disco = $_POST['discos'];

       
        $query1 = "SELECT Precio FROM Discos WHERE NombreDisco='$disco'";
        $result2 = mysqli_query($conexion,$query1) or die('Consulta fallida: '.mysqli_error());


        while ($row =mysqli_fetch_row($result2)) { 
          $comp = $row[0];
          }

      echo "$comp €";}?>">


    </fieldset>
    <fieldset>
    <legend>Datos del comprador:</legend>
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" required>
      <label for="apellidos">Apellidos:</label>
      <input type="text" name="apellidos" required>
      <label for="email">Correo Electronico:</label>
      <input type="text" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" name="email" required/>
      <label for="telefono">Telefono:</label>
       <input type="text" name="telefono" required>
      <label for="direccion">Direccion Envio:</label>
       <input type="text" name="direccion" required>
    </fieldset>
    <fieldset>
      <legend>Metodo de Pago</legend>
       <input type="radio" name="pago" value="Contrarrembolso" checked> Contrarrembolso<br>
       <input type="radio" name="pago" value="Tarjeta"> Tarjeta<br>
       <fieldset>
         <label for="ntarjeta">Numero de Tarjeta:</label>
          <input type="text" name="ntarjeta" size="16" maxlength="16">
         <label for="mes">Mes y año Caducidad:</label>
          <input type="month" name="mes">
         <label for="cvv">Codigo Seguridad ( CVV ):</label>
          <input type="text" name="cvv" size="3" maxlength="3">
       </fieldset>
    </fieldset>

 
  </fieldset>
 <button type="submit">Enviar</button>

</form>
		<p id="des"> </p>




<div id="separador">
  
</div>



<div id="zonaTexto2">

  <h2></h2>
	<p> </p>

</div>

	</div>

<?php
	zonaLogin();
?>

</div>


<div id="separador">
  
</div>


</body>

<div id="pie">

<?php

pie();

?>

</div>



</html>