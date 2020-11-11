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
        <link rel="stylesheet" href="css/style.css">
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
                            <button class="btn btn-primary btn-lg" type="button" style="color: #306ebb; background-color: #ffffff;" onclick="location.href='Areas/Registro/registro.php'">Registrarse</button>
                        </li>
                        <li class="nav-item ">
                            <p style="color: #306ebb;">|</p> <!-- Separador improvisado jeje -->
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-primary btn-lg" type="button" style="margin: qpx; POSITION: absolute; color: #306ebb; background-color: #ffffff;" onclick="location.href='Areas/Login/login.php'">Iniciar Sesión</button>
                        </li>
                    </ul>
                    
                    <!-- Para el logo en el centro -->    
                    <center>
                    <a class="navbar-brand" href="index.php" style="margin:0; padding-right: 0px; margin-right: 0px; width: 75%;"><img src="img/Reserbuslogo.png" style="width: 100%; height: 10%; margin:0; padding:0;" /></a>
                    </center>
                    <!-- Para dirigirse a las otras paginas -->     
                    <ul class="navbar-nav flex-row ml-auto">
                        <?php
				        if($usuarioSesion<>'' && $tipoSesion==2 || $tipoSesion==1)
					        {
                        ?>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="Areas/Reserva/reservacion.php" style="font-size: 1em; color: white;" >Reservación</a>
                        </li>

                        <?php
				            }
			            ?>
                        <li class="nav-item">
                            <a class="nav-link" href="Areas/Terminal/terminales.php" style="color: white; font-size: 1em;" href="#">Terminales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Areas/Acerca/acercaDe.php" style="color: white; font-size: 1em;" href="#">Acerca de</a>
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
    <div class="container">
        <div class="text-center">
            <div style=" background: url(img/transporte_tuxtla.jpg);">
                <br> <br> <br> <br>
                <div style="background-color: rgba(28, 31, 31, 0.5);">
                    <h1 style="color:white;">Viaja de manera mas sencilla con boletos desde tu movil</h1>
                    <h3 style="color:white;">Viajamos contigo en nuestras líneas de autobuses para llevarte a donde desees, en tod nuestro bello estado Chiapaneco. </h3>
                </div>
                <br> <br> <br> <br>
            </div>
            <hr>
            <div class="row"> 
                <div class="col-sm-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="img/Avisos.png" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Avisos - Titulos</h5>
                                        <p>Texto explicativo de Avisos</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/Recomendaciones.png" alt="Second slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Recomencaciones - Titulos</h5>
                                            <p>Texto explicativo de Recomendaciones</p>
                                        </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/promociones.png" alt="Third slide">
                                        <div class="carousel-caption d-none d-md-block">   
                                            <h5>Promociones - Titulos</h5>
                                            <p>Texto explicativo de Promociones</p>
                                        </div> 
                                </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div> 
            <br>
            <hr>
            <center><h2>Lugares de interes</h2>
            <div class="row" style="width: 86%;">
                <div class="col-4">
                    <div class="card-body">
                        <h5 class="card-title">San Cristóbal</h5>
                        <h6 class="card-subtitle mb-2 text-muted"> Pueblo Mágico Sán Cristóbal de las Casas, Chiapas</h6>
                        <p class="card-text">La antigua capital de Chiapas es un destino que siempre depara sorpresas formidables al viajero, aunque se trate de un enésimo viaje. Este maravilloso Pueblo Mágico posee un sinnumero de riquezas arquitectónicas, artesanales y gastronómicas.</p>
                        <a href="#" class="card-link">Link 1</a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card-body">
                        <h5 class="card-title">Comitán</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Pueblo Mágico Comitán de Domínguez, Chiapas</h6>
                        <p class="card-text">En Comitán de Domínguez,también conocido como Comitán de las Flores, no te puedes dejar de disfrutar el sabroso aroma que tiene su café, los encantadores colores que poseen sus lagunas y los increíbles tonos verdes que ofrece su selva.</p>
                        <a href="#" class="card-link">Link 2</a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card-body">
                        <h5 class="card-title">Palenque</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Pueblo Mágico Palenque, Chiapas</h6>
                        <p class="card-text">Al norte del estado de Chiapas se encuentran tanto la antigua ciudad de Palenque, ahora Zona Arqueológica, como el actual Pueblo Mágico.
                        <br> La Zona Arqueológica de Palenque fue una de las ciudades mayas más importantes del periodo Clásico junto con Tikal y Calakmul.</p>
                        <a href="#" class="card-link">Link 3</a>
                    </div>
                </div>
            </div> </center>
        </div>
    </div>
    <!-- PIE DE PAGINA -->
    <footer class="border-top footer text-muted" style=" font-size: 0.8em;">
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
                <a href="Areas/Login/logout.php" style="color: white;">Cerrar Sesion</a>
                <?php
				    }
			    ?>

        </div>
            &copy; 2020 - ReserBus - <a href="#">Privacy</a>
    </footer>
    <!-- Seccion Especial para que funcione el carrousel de Imagenes -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>$( document ).ready(function(){
            $('.carousel').carousel({
            interval: 2000
            })
        });
    </script>
    <!------------------------------------------------------------------>
</body>
</html>
