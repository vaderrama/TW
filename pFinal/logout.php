<?php

 // La sesión debe estar iniciada
if (session_status()==PHP_SESSION_NONE){
session_start();
// Borrar variables de sesión
$_SESSION = array();
session_unset();
// Obtener parámetros de cookie de sesión
$param = session_get_cookie_params();
// Borrar cookie de sesión
setcookie(session_name(), $_COOKIE[session_name()], time()-2592000,
$param['path'], $param['domain'], $param['secure'], $param['httponly']);

$_SESSION['loggedin'] = false;
// Destruir sesión
session_destroy();
echo "<script type=''>alert('HA CERRADO SU SESION CON EXITO');</script>";
echo "<script>location.href='homepage.php'</script>";
} 


 
 ?>