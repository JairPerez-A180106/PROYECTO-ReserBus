<?php
session_start();
if(isset($_SESSION['nombreUsuario']))
{
	$usuarioSesion=$_SESSION['nombreUsuario'];
	$tipoSesion=$_SESSION['tipoUsuario'];
}
else
{
	$usuarioSesion='';
	$tipoSesion='';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=divice-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>ReserBus</title>
</head>
<body>
    <!-- BARRA MENÚ (BARRA DE NAVEGACION) -->
    <header>
        <nav class="navbar navbar-expand-sm navbar-light border-bottom box-shadow mb-2" style="background-color: #306ebb;">
            <div class="container">
                <div class="navbar flex-sm-row-reverse"  style="margin:0; padding: 0px;">
                    <!-- Para la seccion de los botones -->
                    <ul class="navbar-nav flex-row  mr-auto">
                        <li class="nav-item" style="font-size: 1.4em">
                            <a style="color: #306ebb;">Espacio</a>
                        </li>    
                        <li class="nav-item ">
                            <button class="btn btn-primary btn-lg" type="button" style="color: #306ebb; background-color: #ffffff;">Registrarse</button>
                        </li>
                        <li class="nav-item ">
                            <p style="color: #306ebb;">|</p> <!-- Separador improvisado jeje -->
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-primary btn-lg" type="button" style="margin: qpx; POSITION: absolute; color: #306ebb; background-color: #ffffff;" onclick="location.href='../Login/login.php'">Iniciar Sesión</button>
                        </li>
                    </ul>
                    
                    <!-- Para el logo en el centro -->    
                    <center>
                    <a class="navbar-brand" href="../../index.php" style="margin:0; padding-right: 0px; margin-right: 0px; width: 75%;"><img src="../../img/Reserbuslogo.png" style="width: 100%; height: 10%; margin:0; padding:0;" /></a>
                    </center>
                    <!-- Para dirigirse a las otras paginas -->     
                    <ul class="navbar-nav flex-row ml-auto">
                        <?php
                        if($usuarioSesion<>'' && $tipoSesion==2 || $tipoSesion==1)
					        {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="../Reserva/reservacion.php" style="font-size: 1em; color: white;" >Reservación</a>
                        </li>
                        <?php
				            }
			            ?>
                        <li class="nav-item">
                            <a class="nav-link" href="../Terminal/terminales.php" style="color: white; font-size: 1em;" href="#">Terminales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Acerca/acercaDe.php" style="color: white; font-size: 1em;" href="#">Acerca de</a>
                        </li>
                        <?php
				        if($usuarioSesion<>'' && $tipoSesion==1)
					        {
                        ?>
                        <li class="nav-item" >
                            <a class="nav-link" style="color: white; font-size: 1em;">Admin</a>
                        </li>
                        <?php
				            }
			            ?>
                        <li class="nav-item" style="font-size: 1.4em">
                            <a style="color: #306ebb;">Espac</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- INICIO CONTENIDO -->
    <div class="text-center">
        <p class="text-center" style="margin-top: 20px;">
            <img class="centerimg" src="../../img/login02_popup.png" alt="">
            <fieldset>
                <legend class="text-center all-tittles">Registro de Usuario</legend>
                <section id="main" class="wrapper">
                    <div class="container">
                        <form action="guardarUsuario.php" method="post">
                            <label>Nombre</label>
                            <input type="text" name="nombre" placeholder="Ingrese su Nombre" required><br>
                            <label>Apellido Paterno</label>
                            <input type="text" name="paterno" placeholder="Ingrese su Primer Apellido" required><br>
                            <label>Apellido Materno</label>
                            <input type="text" name="materno" placeholder="Ingrese su Segundo Apellido"><br>
                            <label>Direccion</label>
                            <input type="text" name="direccion" placeholder="Captura tu direccion" required><br>
                            <label>Telefono</label>
                            <input type="text" name="telefono" placeholder="Ingrese su numero telefonico" required><br>
                            <label>Correo</label>
                            <input type="text" name="correo" placeholder="Captura tu correo" required><br>
                            <label >Contraseña</label>
                            <input type="password" name="password" placeholder="captura tu contraseña" required><br>
                            <input type="submit" value="Enviar">
                        </form>		
                    </div>		
                </section>
            </fieldset>
        </p>
    </div>
    
    <!-- PIE DE PAGINA -->
    <footer class="border-top footer text-muted" style=" font-size: 0.8em; position: fixed;">
        <div style="color: white; background-color:blue; width:100%; ">
            <div class="navbar-collapse collapse d-sm-inline-flex flex-sm-row-reverse">
                <ul class="navbar-nav flex-row ml-auto">
                    <li class="nav-item">
                        <button class="btn btn-outline-success" type="button" style="color: #fff; background-color: #0e8a15; border-color: #076614; font-size: 1em">Contactanos</button>
                    </li>
                </ul>
            </div>
            <?php
				if($usuarioSesion<>'' && $tipoSesion==2 || $tipoSesion==1)
					{
                ?>
                <a href="../Login/logout.php" style="color: white;">Cerrar Sesion</a>
                <?php
				    }
			    ?>
        </div>
            &copy; 2020 - ReserBus - <a asp-area="" asp-controller="Home" asp-action="Privacy">Privacy</a>
    </footer>
</body>
</html>
