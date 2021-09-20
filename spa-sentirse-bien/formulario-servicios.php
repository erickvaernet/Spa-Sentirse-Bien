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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="fondo fondo-contacto">
    <div >
        <header>
            <nav>
                <ul>
                    <li><a href="./index.html">Inicio</a></li>
                    <li><a href="./servicios.html">Servicios</a></li>
                    <li><a href="./turnos.php">Turnos</a></li>
                    <li><a href="./contacto.html">Contacto</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="contenedor-centrador">
                <div class="contenedor-contacto">
                    <form action="#" method="POST" class="form-serv-indiv">
                        <label for="nombre">Nombre Completo:</label>
                        <input type="text" name="nombre" id="nombre" placeholder="Ej: Juan Perez">

                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" placeholder="Ej: ejemplo@gmail.com">

                        <label for="tema_consulta">Tema de Consulta:</label>
                        <input type="text" name="tema_consulta" id="tema_consulta" placeholder="Ej: Horarios de tratamientos coroporales">

                        <label for="texto_consulta">Deje su consulta:</label>
                        <textarea name="texto_consulta" id="texto_consulta"></textarea>

                        <div class="contenedor-btn">
                            <input type="submit" value="Enviar" name="enviar">
                            <input type="reset" value="Resetear">
                        </div>

                    </form>

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

<?php
    if(isset($_POST["enviar"])){
        $nombre=$_POST["nombre"];
        $email=$_POST["email"];
        $tema=$_POST["tema_consulta"];
        $texto_consulta=$_POST["texto_consulta"];

        $insertar_datos= "INSERT INTO Consultas (nombre,email,tema_consulta,texto_consulta) VALUES('$nombre','$email','$tema','$texto_consulta')";
        $ejecutar_insertar= mysqli_query($enlace,$insertar_datos);
        
        if(!$ejecutar_insertar){
         echo "ERROR EN CONSULTA";
         echo "ERROR EN CONSULTA";
         echo "ERROR EN CONSULTA";
        }
    }
    
?>