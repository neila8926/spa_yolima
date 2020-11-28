<?php 
$resp=FALSE;
if(isset($_POST['enviar'])){
    
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $_POST['correo'];
    $to = "neila8926@hotmail.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    
    $resp=mail($to,$subject,$message, $headers);
    $respuesta= "The email message was sent.";


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
    <title>Yolima Ballesta Spa & Esthetic</title>
    <link rel="icon"   href="img/favi.png" type="image/jpg" />
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/fonts.css">
        <link rel="stylesheet" href="css/style-index.css"/>
        <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
        <!--<link rel="stylesheet" href="css/style.css">-->
        <title>Yolima Ballesta Spa & Esthetic</title>
</head>
<body>
        <header>
        <div class="men fixed-top">
            <ul class="nav justify-content-end " style="background:#171717;height:35px;">
                <li style="color:#fff;">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg>
                <span>+57315 4251382</span></li>
                <li class="nav-item">
                    <a  target="_blank" href="https://api.whatsapp.com/send?phone=573154251382">
                                <img class="img-social" src="img/social/whatsapp.png" alt="whatsapp">
                </li>
                <li class="nav-item">
                    <a  target="_blank" href="https://www.facebook.com/yolimaballestaSpaEsthetic">
                    <img class="img-social" src="img/social/facebook.png" alt="facebook">
                </li>
                <li class="nav-item">
                    <a  target="_blank" href="https://www.facebook.com/yolimaballestaSpaEsthetic">
                    <img class="img-social" src="img/social/instagram.png" alt="instagram">
                </li>
                
            
            </ul>
        
        
            <nav class="navbar navbar-expand-lg ">
                <div class="container">
                    <a class="" href="index.php">
                    <img src="img/logo.png" width="140px" height="70px" alt=""></a>
                                
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <ion-icon class="icono-logo" name="menu-outline"></ion-icon>

                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                        
                                <li class="nav-item">
                                    <a class="nav-link" href="index">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="quienes_somos">Acerca de</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="servicios">Servicios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="promociones">Novedades y Promociones</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="contacto">Contactenos</a>
                                </li>
                        </ul>
                        
                    </div>
                </div>
            </nav>
        </div>
                <div class="jumbotron jumbotron-fluid jumbo-cont" >
                    <div class="container">
                        <h1 class="display-4">Contactanos</h1>
                        <h2><strong> Yolima Ballesta Spa & Esthetic</strong></h2>
                        
                    </div>
                </div>
                
            </header>
            
            <div class="row">
            <div class="col">
                <section class="formu-cont container" >
                        <?php if($resp==TRUE):?>
                            <div class="alert alert-success" role="alert">
                                Mensaje enviado
                            </div>
                        
                        <?php endif;?>
                        
                        <form  action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                        <p class="container">Si tienes alguna petición, queja, reclamo o alguna sugerencia puedes comunicarte a través de este medio y con gusto te responderemos</p>
                        <hr>
                            <div class="form-group row">
                                <label for="correo" class="col-sm-2 col-form-label">Nombre Completo</label>
                                <div class="col-sm-5">
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre completo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Correo Electronico</label>
                                <div class="col-sm-5">
                                <input type="email" class="form-control" name="correo" placeholder="Correo Electronico">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Celular</label>
                                <div class="col-sm-5">
                                <input type="phone" class="form-control" name ="celular"placeholder="Celular">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Mensaje</label>
                                <div class="col-sm-5">
                                <textarea class="form-control" name="mensaje" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-5">
                                <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </section>
            </div>
                <div class="col">
                            <div class="container"  style="width:70%;">
                                <div class="">
                                        <div class="container ubic-cont">
                                            
                                                <h5 class="titulo">Visitanos</h5>
                                                <div>
                                                
                                                    <spam class=""><ion-icon name="location-outline"  style="color:#962196;"></ion-icon>Av Pedro de Heredia, Centro comercial Portal Cuatro Vientos</spam><br>
                                                    <spam class="telefono"><ion-icon name="call-outline" style="color:#962196;"></ion-icon></ion-icon> Celular: 315 - 4251380</spam><br>
                                                    <spam class="correo"><ion-icon name="mail-outline" style="color:#962196;"></ion-icon> yolimaballestaramos@gmail.com</spam>
                                
                                                </div>
                                        </div>
                                        <div class="">
                                            <hr>
                                                <div class="horarios">
                                                <h5 class="titulo">Horarios</h5>
                                                        <spam class="entre-semanas">Lunes a Viernes <br>9:00 am - 6:00pm</spam><br>
                                                        <spam class="fin-semanas">Sabado y Domingos <br>10:00 am - 5:00pm</spam>
                                    
                                                </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
            </div>
        

        
                    <div class="">
                            
                            <div >
                                    <div class="">
                                            <section class="mapa">
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3924.1902154414106!2d-75.50328258484959!3d10.40646219257327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef6259812a0fbdd%3A0xa97bc51bdd000d9b!2sYolima%20Ballesta%20Spa%20%26%20Esthetic!5e0!3m2!1ses!2sco!4v1603738278355!5m2!1ses!2sco" width="90%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                    
                                            </section>
                        
                                    </div>

                        
                            
                            </div>
                                    
                            

                    </div>
        
                    
                    <footer>
                        <section class="ubicacion" id="ubicacion">
                            <div class="contenedor">
                                <div class="row">
                                        <div class="col">
                                            
                                                <h5 class="titulo">Donde Estamos</h5>
                                                <div>
                                                
                                                    <spam class="calle"><img src="img/ubicacion.png" alt="" style="width:30px;">Av Pedro de Heredia, Centro comercial Portal Cuatro Vientos</spam><br>
                                                    <spam class="telefono"><ion-icon name="call-sharp"></ion-icon> Celular: 315 - 4251380</spam><br>
                                                    <spam class="correo"><img src="img/email.png" alt="" style="width:30px;">yolimaballestaramos@gmail.com</spam>
                                
                                                </div>
                                        </div>
                                        <div class="col">
                                                <div class="horarios">
                                                <h5 class="titulo">Horarios</h5>
                                                        <spam class="entre-semanas">Lunes a Viernes <br>9:00 am - 6:00pm</spam><br>
                                                        <spam class="fin-semanas">Sabado y Domingos <br>10:00 am - 5:00pm</spam>
                                    
                                                </div>
                                        </div>
                                        <div class="col-1">
                                                <div class="">
                                                

                                                    <a  target="_blank" href="https://api.whatsapp.com/send?phone=573154251382">
                                                    <img class="img-social" src="img/social/whatsapp.png" alt="whatsapp">
                                                
                                                    <a  target="_blank" href="https://www.facebook.com/yolimaballestaSpaEsthetic">
                                                    <img class="img-social" src="img/social/facebook.png" alt="facebook">
                                                
                                                    <a  target="_blank" href="https://www.facebook.com/yolimaballestaSpaEsthetic">
                                                    <img class="img-social" src="img/social/instagram.png" alt="instagram">
                                                
                                                
                                    
                                                </div>
                                        </div>
                                    </div>
                            </div>
                        </section>
                        <div class="copyrigth">
                        <hr class="my-4" style="margin-bottom: 0.1rem!important">
                            <spam>&copy; 2020 Yolima Ballesta Spa & Esthetic<spam>
            
                        </div>
    
            
                    </footer>
            

        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            
    </body>
</html>