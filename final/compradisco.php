<!DOCTYPE html>
<html>
<head>

<title>Jarabe de Palo</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="estilo.css" rel="stylesheet" type="text/css" />
</head>

<body>


<div id="PanelTop"> 
	<h1>JARABE DE PALO</h1>
	
<nav>
  <ul> 
	<li style="list-style:none;"><a  style="text-decoration:none" href="homepage.html" >Inicio </a></li>
	<li style="list-style:none;"><a  style="text-decoration:none" href="biografia.html" >Biografia </a></li> 
	<li style="list-style:none;"><a  style="text-decoration:none" href="discografia.html" >Discografia</a></li>
  	<li style="list-style:none;"><a  style="text-decoration:none" href="comprar.html" >Tienda </a></li>
  	<li style="list-style:none;"><a  style="text-decoration:none" href="comprar.html" >Conciertos </a></li>  
</ul>
</nav>
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
      <input type="text" name="nombre">
      <label for="apellidos">Apellidos:</label>
      <input type="text" name="apellidos">
      <label for="email">Correo Electronico:</label>
       <input type="text" name="email">
      <label for="telefono">Telefono:</label>
       <input type="text" name="telefono">
      <label for="direccion">Direccion Envio:</label>
       <input type="text" name="direccion">
    </fieldset>
    <fieldset>
      <legend>Metodo de Pago</legend>
       <input type="radio" name="pago" value="Contrarrembolso"> Contrarrembolso<br>
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


	<div id="zonaLogin">

	<form action="login.php" method="post">
  <div class="imgcontainer">
    <img src="login.png" width="200px" height="180px" alt="Avatar" id="avatar">
  </div>

  <div class="container">
    <label for="name"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user" required>

    <label for="pass"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

	</div>


</div>


<div id="separador">
  
</div>


</body>

<div id="pie">
<footer>
   
  
	 <a style="text-decoration:none" id="foot" href="principal.html" >Inicio </a>
	 <a style="text-decoration:none" id="foot" href="http://www.jarabedepalo.com/"> Copyright <img src="copy.png" width="20" height="20"></a>
  	<a style="text-decoration:none" id="foot" href="http://www.jarabedepalo.com"> Mapa del sitio </a>

    <p id="web"> Web diseñada por Juan Alvarez Carrasco </p>






</footer>

</div>




</html>