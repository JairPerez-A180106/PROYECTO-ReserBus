<?php
$correo=$_POST['usuario'];
$password=$_POST['password'];
include_once '../Global/conexion.php';
$mysqlConexion=new mysqli($servidorBD,$usuarioBD,$claveBD,$nombreBD);
$consulta="SELECT * from usuario WHERE correo='".$correo."'";
$resultado=$mysqlConexion->query($consulta);
if($registro=$resultado->fetch_array(MYSQLI_ASSOC))
{
    if($registro['clave_acceso']==$password)
    {
        session_start();
        $_SESSION['idUsuario']=$registro['id_usuario'];
        $_SESSION['nombreUsuario']=$registro['correo'];
        $_SESSION['tipoUsuario']=$registro['tipo_usuario'];
        header("Location: ../../index.php");
    }
    else{
        header("Location: login.php");
        exit();
    }
}
else{
    header("Location: login.php");
    exit();  
}
?>