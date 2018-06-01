<?php





function head (){
	echo <<< HTML

<head>
<title>Jarabe de Palo</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="../estilo.css" rel="stylesheet" type="text/css" />
</head>


HTML;
}

function panelTop (){

 if (empty($_SESSION['user'])){

	echo <<< HTML

	<h1>JARABE DE PALO</h1>
	
<nav>
  <ul> 
	<li style="list-style:none;"><a  style="text-decoration:none" href="../homepage.php" >Inicio </a></li>
	<li style="list-style:none;"><a  style="text-decoration:none" href="../biografia.html" >Biografia </a></li> 
	<li style="list-style:none;"><a  style="text-decoration:none" href="../discografia.html" >Discografia</a></li>
   <li style="list-style:none;"><a  style="text-decoration:none" href="../tienda.php" >Tienda </a></li>
  	<li style="list-style:none;"><a  style="text-decoration:none" href="../comprar.html" >Conciertos </a></li>  
    <li style="list-style:none;"><a  style="text-decoration:none" href="../busqueda.php" >Buscador </a></li>
</ul>
</nav>

HTML;
}else{

  echo <<< HTML

  <h1>JARABE DE PALO</h1>
  
<nav>
  <ul> 
  <li style="list-style:none;"><a  style="text-decoration:none" href="../homepage.php" >Inicio </a></li>
  <li style="list-style:none;"><a  style="text-decoration:none" href="../biografia.html" >Biografia </a></li> 
  <li style="list-style:none;"><a  style="text-decoration:none" href="../discografia.html" >Discografia</a></li>
    <li style="list-style:none;"><a  style="text-decoration:none" href="../comprar.html" >Conciertos </a></li>  
</ul>
</nav>

HTML;

}



}

function zonaLogin (){

echo <<< HTML

	<div id="zonaLogin">

	<form action="../login.php" method="post">
  <div class="imgcontainer">
    <img src="../images/login.png" width="200px" height="180px" alt="Avatar" id="avatar">
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

HTML;

}



function usuarioRegistrado(){

  if (isset($_SESSION['user'])){
  $usuario=$_SESSION['user'];
  echo "Bienvenido , $usuario" ;
  echo <<< HTML
  
   <form action="../logout.php" method="post">
   <h5> Cerrar sesión <h5>
   <input type="submit" name="submit" value="LOGOUT">
  </form>

HTML;

}
}



function pie(){

echo <<< HTML
	<footer>
   
  
	 <a style="text-decoration:none" id="foot" href="../homepage.php" >Inicio </a>
	 <a style="text-decoration:none" id="foot" href="http://www.jarabedepalo.com/"> Copyright <img src="copy.png" width="20" height="20"></a>
  	<a style="text-decoration:none" id="foot" href="http://www.jarabedepalo.com"> Mapa del sitio </a>

    <p id="web"> Web diseñada por Juan Alvarez Carrasco </p>
    </footer>

HTML;
}



function gestortools(){
	 echo <<< HTML

<div id="gestortools">

   <ul> 
  <li style="list-style:none;"><a  style="text-decoration:none" href="consultarPedidos.php" >Consultar peticiones compra </a></li>
  <li style="list-style:none;"><a  style="text-decoration:none" href="historicoCompras.php" >Consultar historico compras </a></li> 
  <li style="list-style:none;"><a  style="text-decoration:none" href="editarPrecioDiscos.php" >Editar precio discos</a></li>
  
</ul>

</div>


HTML;
}


function admintools(){

	echo <<< HTML

  <div id="admintools">

   <ul> 
  <li style="list-style:none;"><a  style="text-decoration:none" href="homepage.php" >Editar informacion componentes</a></li>
  <li style="list-style:none;"><a  style="text-decoration:none" href="biografia.html" >Editar Biografia</a></li> 
  <li style="list-style:none;"><a  style="text-decoration:none" href="discografia.html" >Editar discografia</a></li>
  <li style="list-style:none;"><a  style="text-decoration:none" href="discografia.html" >Editar conciertos </a></li>
  <li style="list-style:none;"><a  style="text-decoration:none" href="discografia.html" >Editar usuarios y sus roles</a></li>
  <li style="list-style:none;"><a  style="text-decoration:none" href="discografia.html" >Visualizar log </a></li>
  
</ul>

</div>

HTML;
}


























?>