<?php
    $servidor= "localhost";
    $usuario="id17396697_root";
    $clave="*Erick951222";
    $baseDeDatos="id17396697_spa";

    $enlace=mysqli_connect($servidor,$usuario,$clave,$baseDeDatos);
    if(!$enlace){
        echo "ERROR EN LA CONEXION AL SERVIDOR";
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spa-Sentirse-Bien</title>
    <link rel="shortcut icon" href="./img/iconos/loto.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="fondo fondo-inicio" style="background-repeat: no-repeat;">
    <div >   
        <header>             
            <nav>
                <ul>
                    <li><a href="./index.html">Inicio</a</li>
                    <li><a href="./servicios.html">Servicios</a></li>
                    <li><a href="./turnos.html">Turnos</a></li>
                    <li><a href="./contacto.html">Contacto</a></li>
                    
                </ul>
            </nav>            
        </header>
        <main>
            <div class="contenedor-centrador">
                <div class="contenedor-contacto">
                    <h1 class="titulo-turnos" style="margin-bottom: 10px; text-decoration: underline;">Para pedir un turno por favor <br>complete el siguiente formulario.</h1>
                    <h2 class="subtitulo" style="font-size: 1rem;" >Todos los campos con * son obligatorios</h2>
                    <form action="#" method="POST" class="form-serv-indiv" >
                        
                        <label for="nombre">Nombre*</label>
                        <input id="nombre" name="nombre" type="text" class="form" placeholder="Nombre" required>
                        
                        <label for="apellido" >Apellido*</label>
                        <input id= "apellido" name="apellido" type="text" placeholder="Apellido" required>
                        
                        <label for="dni">DNI*</label>
                        <input id="dni" name="dni" type="number" placeholder="DNI" required>
                        
                        <label for="telefono">Teléfono*</label>
                        <input type="text" name="telefono" id="telefono" placeholder="Telefono" required>
                        
                        <label for="email" >Email*</label>
                        <input type="text" name="email" id="email" placeholder="Email" required>
                        <!--<p>Desea ser parte de nuestro newsletter para recibir informacion acer de nuevos servicios y cupones de descuento</p> -->                        
                        
                         
                        <div class="contenedor-sexos">   
                            <span style="text-decoration: underline;">Sexo*:</span>      
                            <input type="radio" name="sexo" id="masculino" value="masculino" required> <label for="masculino">Hombre</label>
                            <input type="radio" name="sexo" id="femenino" value="femenino" required> <label for="femenino">Mujer</label> 
                        </div>
                        <label for="fecha">Fecha y hora del turno*</label>        
                        <input type="datetime-local" id="fecha" name="fecha" required="required" >   
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>                        
                        <script>
                        $( document ).ready(function() {
                        
                            var now = new Date();
                        
                            var day = ("0" + now.getDate()).slice(-2);
                            var month = ("0" + (now.getMonth() + 1)).slice(-2);
                        
                            var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
                            $("#fecha").val(today);
                            const cale= document.getElementById("fecha");
                            cale.setAttribute("min",today+"T00:00");
                        });

                        </script>
                        <div class="contenedor-btn">
                            <input type="submit" value="Enviar" name="enviar">
                            <input type="reset" value="Resetear">
                        </div>
                          
                    </form>
                </div>
            </div>
                        
        </main>       

        <footer>
            <div class="redes">
                Seguinos en 
                <a href="https://www.facebook.com/Spa-Sentirse-Bien" target="_blank"><i class="fab fa-facebook-f"></i></a>             
                <a href="https://www.twitter.com/Spa-Sentirse-Bien" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/Spa-Sentirse-Bien" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>            
        </footer>        
    </div>            
</body>
</html>

<?php
    if(isset($_POST["enviar"])){
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $dni=intval($_POST["dni"]);
        $telefono=$_POST["telefono"];
        $email=$_POST["email"];
        $sex_aux=$_POST["sexo"];
        if($sex_aux=="femenino"){
            $sexo=1;
        }else{
            $sexo=0;
        }
        $fecha_hora_turno= str_replace("T", " ", $_POST["fecha"] ).":00";

        $insertar_datos= "INSERT INTO Turnos (nombre,apellido,dni,telefono,email,sexo,fecha_hora_turno) VALUES('$nombre','$apellido','$dni','$telefono','$email','$sexo','$fecha_hora_turno')";
        $ejecutar_insertar= mysqli_query($enlace,$insertar_datos);
        
        if(!$ejecutar_insertar){
         echo "ERROR EN CONSULTA";
        }
    }
?>