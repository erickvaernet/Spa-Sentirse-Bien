<?php
require "database.php";
session_start();
if (!isset($_SESSION['activa'])) header('Location: mensaje.php?msj=2');

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
    <div>
        <header>
            <nav>
                <ul>
                    <li><a href="./index.html">Inicio</a< /li>
                    <li><a href="./servicios.html">Servicios</a></li>
                    <li><a href="./turnos.php">Turnos</a></li>
                    <li><a href="./contacto.html">Contacto</a></li>
                    <li><a href="./nosotros.html">Nosotros</a></li>

                </ul>
            </nav>
        </header>
        <main>
            <div class="contenedor-centrador">
                <div class="contenedor-contacto">
                    <h1 class="titulo-turnos" style="margin-bottom: 10px; text-decoration: underline;">Para pedir un turno por favor <br>complete el siguiente formulario.</h1>
                    <h2 class="subtitulo" style="font-size: 1rem;">Todos los campos con * son obligatorios</h2>
                    <form action="#" method="POST" class="form-serv-indiv">
                        <!--<div id="errores"></div>-->
                        <?php
                        if (!empty($_POST['nombre-tarjeta'])) {
                            $id_cliente = $_SESSION['id_cliente'];
                            $servicios = $_POST['servicios'];
                            $fechas = $_POST['fechas'];
                            //$fecha_hora_turno = str_replace("T", " ", $_POST["fecha"]) . ":00";
                            $metodo_pago = $_POST['metodo-pago'];
                            $nombre_tarjeta = $_POST['nombre-tarjeta'];
                            $numero_tarjeta = $_POST['numero-tarjeta'];
                            $vencimiento_tarjeta = $_POST['vencimiento-tarjeta'];
                            $codigo_tarjeta = $_POST['codigo-tarjeta'];

                            $array_errores = array();

                            empty($nombre_tarjeta) ? array_push($array_errores, "El campo Nombre de la tarjeta no pude estar vacío") : "";
                            preg_match("/^[A-Z]*\s[A-Z]*$/i", $nombre_tarjeta) == 0 ? array_push($array_errores, "El campo Nombre de la tarjeta solo puede contener letras") : "";

                            empty($numero_tarjeta) ? array_push($array_errores, "El campo numero de tarjeta no pude estar vacío") : "";
                            preg_match("/^[0-9]*$/i", $numero_tarjeta) == 0 ? array_push($array_errores, "El campo numero de tarjeta solo puede contener numeros") : "";

                            empty($vencimiento_tarjeta) ? array_push($array_errores, "El campo vencimiento de la tarjeta de tarjeta no pude estar vacío") : "";
                            preg_match("/^[0-9]*\/[0-9]*$/i", $vencimiento_tarjeta) == 0 ? array_push($array_errores, "El campo vencimiento de la tarjeta solo puede contener numeros y un / ") : "";

                            empty($codigo_tarjeta) ? array_push($array_errores, "El campo del codigo de la tarjeta no pude estar vacío") : "";
                            preg_match("/^[0-9]*$/i", $codigo_tarjeta) == 0 ? array_push($array_errores, "El campo del codigo de la tarjeta solo puede contener numeros") : "";

                            if ($array_errores) {
                                echo "<div class='lista-errores'>";
                                foreach ($array_errores as $value) {
                                    print "<div class='error'>$value</div>";
                                }
                                echo "</div>";
                            } else {
                                $cuit = $_SESSION['cuit'];
                                $direccion = $_SESSION['direccion'];

                                $error=0;
                                $contador=0;
                                /*
                                foreach($servicios as $servicio){
                                    $fecha=$fechas[$contador];
                                    $sql_turno = "INSERT INTO turnos (id_cliente, id_servicio, fecha_hora_turno) VALUES ($id_cliente, $servicio, '$fecha')";                                
                                    if (mysqli_query($enlace, $sql_turno)) {    
                                        print "<div class='lista-errores'><div class='error'>Todo bien</div></div>";                                        
                                    } else {
                                        $error=1;
                                        print "<div class='lista-errores'><div class='error'>Lo siento hubo algun problema en la Base de Datos, contacte con el administrador</div></div>";
                                    }
                                    $contador++;
                                }*/ 
                                
                                if(count($servicios)==1){
                                    $s=$servicios[0];
                                    $f=$fechas[0];
                                    header("Location: mensaje.php?msj=5&direccion=" . $direccion . "&cuit=" . $cuit . "&fecha=" . $f . "&servicio=" . $s);
                                    //header('Location: mensaje.php?msj=5');
                                }else{
                                    $s1=$servicios[0];
                                    $f1=$fechas[0];                                    
                                    $s2=$servicios[1];
                                    $f2=$fechas[1];
                                    header("Location: mensaje.php?msj=5&direccion=" . $direccion . "&cuit=" . $cuit . "&fecha1=" . $f1 . "&servicio1=" . $s1 . "&fecha2=" . $f2 . "&servicio2=" . $s2);
                                }

                                

                                
                                /*
                                if (mysqli_query($enlace, $sql_turno)) {
                                    //$sql_factura
                                    //if(mysqli_query($enlace,$sql_factura))
                                    header("Location: facturar.php/?provincia=" . $provincia . "&ciudad=" . $ciudad . "&cod_postal=" . $cod_postal . "&direccion=" . $direccion . "&cuit=" . $cuit . "&fecha_hora_turno=" . $fecha_hora_turno . "&servicio=" . $servicio);
                                } else {
                                    print "<div class='lista-errores'><div class='error'>Lo siento hubo algun problema en la Base de Datos, contacte con el administrador</div></div>";
                                }*/

                                //header('Location: mensaje.php?msj=5&fecha_turno='.$fecha_hora_turno);                                       

                            }
                        }
                        ?>

                        <div id="container-servicios" style="display: flex; flex-direction:column; align-items: center; align-content: center;">
                            <div>
                                <label for="servicio" style="margin-top: 20px; max-width: 95%; width: 90%">Servicio*:</label>
                                <select name="servicios[]" id="serv1">
                                    <option value="1">Masajes Anti-stress</option>
                                    <option value="2">Masajes Descontracturantes</option>
                                    <option value="3">Masajes con piedras calientes</option>
                                    <option value="4">Masajes Circulatorios</option>
                                    <option value="5">Lifting de pestaña</option>
                                    <option value="6">Depilación Facial</option>
                                    <option value="7">Belleza de manos y pies</option>
                                    <option value="8">Micro exfoliación facial con punta de diamante</option>
                                    <option value="9">Limpieza facial profunda + Hidratación</option>
                                    <option value="10">Crio frecuencia facial con efecto lifting</option>
                                    <option value="11">VelaSlim</option>
                                    <option value="12">DermoHealth</option>
                                    <option value="13">Crio frecuencia corporal con efecto lifting</option>
                                    <option value="14">Ultracavitación</option>
                                </select>

                                <label for="fecha">Fecha y hora del turno*</label>
                                <input type="datetime-local" id="fecha1" name="fechas[]" required="required" style="max-width: 100%; width: 100%">
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                                <script>
                                    $(document).ready(function() {

                                        var now = new Date();

                                        var day = ("0" + now.getDate()).slice(-2);
                                        var month = ("0" + (now.getMonth() + 1)).slice(-2);

                                        var today = now.getFullYear() + "-" + (month) + "-" + (day);
                                        $("#fecha1").val(today);
                                        const cale = document.getElementById("fecha1");
                                        cale.setAttribute("min", today + "T00:00");
                                    });
                                </script>
                            </div>

                            <input type="button" value="+   " name="agregar" id="agregarBton" style="display:block;color: red; width: 50px; height:50px; border-radius: 50%;"></input>
                        </div>

                        <!--
                        <label for="cuit">CUIT para la facturación:*</label>
                        <input id="cuit" name="cuit" type="number" placeholder="Cuit sin guiones ni puntos" required>
                        -->

                        <div class="contenedor-sexos" style="margin:20px 0 0 0">
                            <span style="text-decoration: underline;">Método de págo*:</span>
                            <input type="radio" name="metodo-pago" id="credito" value="credito" required> <label for="credito">Credito</label>
                            <input type="radio" name="metodo-pago" id="debito" value="debito" required> <label for="debito">Debito</label>
                        </div>

                        <fieldset class="form-serv-indiv" style="width: 100%; padding: 0  10px 10px 10px">
                            <legend style="text-decoration:underline">Datos de Tarjeta</legend>
                            <label for="nombre-tarjeta">Nombre indicado en la tarjeta*</label>
                            <input id="nombre-tarjeta" name="nombre-tarjeta" type="text" placeholder="Nombre como se indica en la tarjeta" required>

                            <label for="numero-tarjeta">Número de la tarjeta*</label>
                            <input id="numero-tarjeta" name="numero-tarjeta" type="number" placeholder="número de tarjeta" required>

                            <label for="vencimiento-tarjeta">Vencimiento de la tarjeta*</label>
                            <input id="vencimiento-tarjeta" name="vencimiento-tarjeta" type="text" placeholder="MM/AA" required>

                            <label for="codigo-tarjeta">Código de seguridad*</label>
                            <input id="codigo-tarjeta" name="codigo-tarjeta" type="number" placeholder="código" required>
                        </fieldset>

                        <div class="contenedor-btn">
                            <input id="enviar" type="submit" value="Enviar" name="enviar">
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
        <p style="color: white; text-decoration: underline; font-size: 1rem; margin-top: 10px;">Desarrollado por Dev-Team. Contacto: 3624-284819</p>
    </div>
    <script src="./js/agregar-servicios.js"></script>
    <script src="./js/redirigir.js"></script>
    <!--<script src="./js/ingreso-datos-tarjeta.js"></script>-->
</body>

</html>

<?php
/*
if (isset($_POST["enviar"])) {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $dni = intval($_POST["dni"]);
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $servicio= $_POST["servicio"];
    $sex_aux = $_POST["sexo"];    
    if ($sex_aux == "femenino") {
        $sexo = 1;
    } else {
        $sexo = 0;
    }
    $fecha_hora_turno = str_replace("T", " ", $_POST["fecha"]) . ":00";

    $insertar_datos = "INSERT INTO Turnos (nombre,apellido,dni,telefono,email,sexo,id_servicio,fecha_hora_turno) VALUES('$nombre','$apellido','$dni','$telefono','$email','$sexo','$servicio','$fecha_hora_turno')";
    $ejecutar_insertar = mysqli_query($enlace, $insertar_datos);

    if (!$ejecutar_insertar) {
        echo "ERROR EN CONSULTA";
    }
}*/
?>