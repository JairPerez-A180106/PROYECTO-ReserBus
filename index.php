<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=divice-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        
        <!-- 
        <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" type="text/css" href="boostrap/bootstrap.min.css"></script>
        -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>ReserBus</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
            <div class="container">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse d-sm-inline-flex flex-sm-row-reverse">
                <ul class="navbar-nav flex-row  ml-auto">
                        <li class="nav-item ">
                                <button class="btn btn-primary btn-lg" type="button" style="color: #fff; background-color: #1b6ec2; border-color: #1861ac;">Registrarse</button>
                            </li>
                        <li class="nav-item">
                                <button class="btn btn-primary btn-lg" type="button" style="color: #fff; background-color: #1b6ec2; border-color: #1861ac; POSITION: absolute; ">Iniciar Sesión</button>
                        </li>
                    </ul>
                    
                    <a class="navbar-brand" href="index.php" style="margin:0; padding-right: 0px; margin-right: 0px; width: 15%;"><img src="img/logo.png" style="width: 100%; height: 10%; margin:0; padding:0;" /></a>
                    
                    <ul class="navbar-nav flex-row mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="font-size: 1.3em" >Reservación</a>
                        </li>
                        <li class="nav-item" style="font-size: 1.3em">
                            <a class="nav-link" href="#">Terminales</a>
                        </li>
                        <li class="nav-item" style="font-size: 1.3em">
                            <a class="nav-link"  style="POSITION: absolute;" href="#">Acerca de</a>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </nav>
    </header>
  
        
    
    <div class="container">
        <!-- 
        <main role="main" class="pb-3">
            @RenderBody()

        </main>
        -->
        <?php
        require('pagina_main.php');
        ?>
    </div>
    


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper)
    
    -->
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
   
    <footer class="border-top footer text-muted">
        <div style="color: white; background-color:blue; width:100%;">
             <div class="navbar-collapse collapse d-sm-inline-flex flex-sm-row-reverse">
                    <ul class="navbar-nav flex-row w-100">
                        <li class="nav-item px-2 mr-auto">
                             <button class="btn btn-outline-success" type="button" asp-area="" asp-controller="" asp-action="" style="color: #fff; background-color: #0e8a15; border-color: #076614;">Contactanos</button>
                        </li>
                    </ul>
                </div>
        </div>
        
            &copy; 2020 - ReserBus - <a asp-area="" asp-controller="Home" asp-action="Privacy">Privacy</a>       
        
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>$( document ).ready(function(){
    $('.carousel').carousel({
      interval: 2000
    })
});</script>

</body>
</html>
