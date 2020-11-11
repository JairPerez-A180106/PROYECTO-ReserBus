<?php
$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$password=$_POST['password'];
include_once '../Global/conexion.php';
$mysqlConexion=new mysqli($servidorBD,$usuarioBD,$claveBD,$nombreBD);

$consulta="INSERT INTO usuario(clave_acceso,nombre,ap_paterno,ap_materno,direccion,telefono,correo,tipo_usuario)
VALUES('$password','$nombre','$paterno','$materno','$direccion','$telefono','$correo',2)";
if($resultado=$mysqlConexion->query($consulta))
{
    header("Location: ../Login/login.php");
}
else
{
    header("Location: registro.php");

}
?>


