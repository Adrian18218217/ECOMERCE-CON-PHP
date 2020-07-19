<?php
$usuario =$_POST['usuario'];
$clave=$_POST['clave'];

//conectar a la base de datos
$conexion=mysqli_connect("localhost","root","","ecomerce");
$consulta="SELECT * FROM cliente WHERE usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
    header("location:index.html");
}
else{
    echo "Error en la autentificacion";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>