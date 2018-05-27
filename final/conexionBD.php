
<?php
DEFINE('DB_HOST','localhost');
DEFINE('DB_USER','root');
DEFINE('DB_PASSWD','root');
DEFINE('DB_DATABASE','final');

// Conectamos con la base de datos y almacenamos la conexión en la variable conexión
$conexion = mysqli_connect("localhost","root","root","final");

    //Creamos una condicional IF para estar seguros de que hemos conectado correctamente
    if (!$conexion) {
        echo "<p>Error de conexión</p>";
        echo "<p>Código: ".mysqli_connect_errno()."</p>";
        echo "<p>Mensaje: ".mysqli_connect_error()."</p>";
        die("Adiós");
    }
        
?>

