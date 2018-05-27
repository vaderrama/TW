<?php


require('conexionBD.php');



if($_SERVER["REQUEST_METHOD"] == "POST"){
$user=$_POST["user"];
$pass=$_POST["pass"];
}


$query1 = "SELECT ClaveAcceso FROM gestorescompras WHERE Login='$user'";


$result2 = mysqli_query($conexion,$query1) or die('Consulta fallida: '.mysqli_error());


while ($row =mysqli_fetch_row($result2)) { 
	$comp = $row[0];
}

//$passMD5=md5($pass);



if ($pass==$comp) {

	session_start(); // Antes de comenzar HTML

	// Comprobar credenciales [...]
	$_SESSION["user"] = $user;
	$_SESSION["loggedin"] = true;
    $_SESSION["start"] = time();
    $_SESSION["expire"] = $_SESSION['start'] + (60 * 60);

	
	echo "<script type=''>alert('LOGIN CORRECTO');</script>";
	echo "<script>location.href='homepage.php'</script>";
	
}else{
	echo "<script type=''>alert('LOGIN INCORRECTO. VUELVE A INTENTARLO');</script>";
	echo "<script>location.href='homepage.php'</script>";
	}

// Libera el recurso
mssql_free_result($query1);
// Cierra conexion 
msqli_close($conexion);

?>