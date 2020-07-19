<?php
$conexion = mysqli_connect("localhost","root", "", "ecomerce");
if(!$conexion){
    echo "Error al conectar base de datos";
}else{
    echo "Conectado a la base de datos";
}
?>