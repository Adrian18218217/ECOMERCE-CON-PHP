<?php
include 'cn.php';
//recibir los datos y almacenar en variables
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$telefono = $_POST["telefono"];


//Consulta para insertar
$insertar = "INSERT INTO cliente(nombre, apellidos,correo,usuario,clave,telefono) VALUES('$nombre','$apellidos',
'$correo','$usuario','$clave','$telefono')";
//verificar usuario repetido
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM cliente WHERE usuario ='$usuario'");
if(mysqli_num_rows($verificar_usuario)>0){
    echo '<script>
    alert("El usuario ya esta registrado");
    window.history.go(-1);
    </script>';
    exit;
}

//verificar correo repetido
$verificar_correo = mysqli_query($conexion, "SELECT * FROM cliente WHERE correo ='$correo'");
if(mysqli_num_rows($verificar_correo)>0){
    echo '<script>
    alert("El usuario ya esta registrado");
    window.history.go(-1);

    </script>';
    exit;
}
//ejecutar consulta
$resultado=mysqli_query($conexion,$insertar);
if(!$resultado){
echo 'Error al registrarse';
}else{
    echo 'Usuario registrado exitosamente';
}
//cerrar conexion
mysqli_close($conexion);
?>