<?php
    require "database.php";

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro al Spa "Sentirse Bien"</title>
    <link rel="shortcut icon" href="./img/iconos/loto.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="fondo fondo-contacto" style="height: 100vh;">
    <div >
        <header>
            <nav>
                <ul>
                    <li><a href="./index.html">Inicio</a></li>
                    <li><a href="./servicios.html">Servicios</a></li>
                    <li><a href="./turnos.php">Turnos</a></li>
                    <li><a href="./contacto.html">Contacto</a></li>
                    <li><a href="./nosotros.html">Nosotros</a></li>  
                </ul>
            </nav>
        </header>
        <main>
            
            <div class="contenedor-centrador">
                <div class="contenedor-contacto" style="width: 800px;">
                    <div class="form-serv-indiv" style="width: 70%;">
                       
                    <?php
                        $codigo_mensaje=$_REQUEST['msj'];
                        switch ($codigo_mensaje) {
                            case '1':
                                $mensaje="¡Te logueaste exitosamente!<br>Ahora podes reservar un turno -><a href='./turnos.php'>aquí</a><-";
                                $error=0;
                                break;
                            case '2':
                                $mensaje="No puede pedir un turno sin haberse logueado, lo puede hacer -><a href='./login.php'>aquí</a><-
                                <br>En caso de no tener una cuenta puede registrarse -><a href='./signup.php'>aquí</a><-";
                                $error=1;
                                break;    
                            case '3':
                                $mensaje="Ya está logueado con una cuenta, si no esta logueado en su cuenta y desea salir de ella haga click -><a href='./logout.php'>aquí</a><-";
                                $error=1;
                                break;                         
                            default:
                                $msj_error="ERROR";
                                $error=1;
                                break;
                        }
                        if($error==0) print "<div class='mensaje_exito_grande'> $mensaje </div>";
                        else print "<div class='mensaje_error_grande'> $mensaje </div>";
                    ?>                       

                    </div>

                    <div class="redes">
                        Seguinos en
                        <a href="https://www.facebook.com/Spa-Sentirse-Bien" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/Spa-Sentirse-Bien" target="_blank"><i
                                class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/Spa-Sentirse-Bien" target="_blank"><i
                                class="fab fa-instagram"></i></a>                                
                    </div>
                </div>
            </div>            
        </main>
        
    </div>
    
</body>
</html>