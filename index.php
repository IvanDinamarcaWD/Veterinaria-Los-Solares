<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Los Solares | Clínica Vererinaria</title>
    <link rel="icon" type="image/png" href="imagenes/Logo Veterinaria Los Solares sin letras Colores.png">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://kit.fontawesome.com/1cb5d2ca1c.js" crossorigin="anonymous"></script>
</head>
<body>

<?php
	

    if(isset($_POST["enviar"])){

        $destino = "veterinarialossolares@gmail.com";
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $telefono = $_POST["telefono"];
        $mensaje = $_POST["mensaje"];
        $contenido = "Nombre: " . $nombre . "\n" . 
                     "Correo: " . $correo . "\n" . 
                     "Telefono: " . $telefono . "\n" .
                     "Mensaje: " . $mensaje;
        
        mail($destino, "Correo Página", $contenido);

        echo("<script>
                alert('Mensaje Enviado');
        </script>");
    
        
    }

?>

    <div class="container" id="inicio">
        <div class="nav">
            <div class="items">
                <div class="item">
                    <a href="#">
                        <div class="divlogonombre">
                            <div class="divlogo"> 
                                <img class="logo" src="imagenes/Logo Veterinaria Los Solares sin letras.png" alt="">
                            </div>
                            <div class="item-text-nombre">
                                Clínica Veterinaria Los Solares
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#plandeaccion">
                        <img class="logocovid" src="imagenes/logo-hero.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="#servicios">
                        <div class="item-text">
                            Servicios
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#peluqueriacanina">
                        <div class="item-text">
                            Peluquería Canina
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#contacto">
                        <div class="item-text">
                            Contacto
                        </div>
                    </a>
                </div>
            </div>
            <div class="menu">
                <input type="checkbox" id="check-menu">
                <label for="check-menu">
                    <div class="icono-menu">
                        <div class="barra-menu"></div>
                        <div class="barra-menu"></div>
                        <div class="barra-menu"></div>
                    </div>
                    <div class="main-content">
                        <div class="main-menu">
                            <div class="item">
                                <a href="#servicios">
                                    <div class="item-text-responsive">
                                        Servicios
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#peluqueriacanina">
                                    <div class="item-text-responsive">
                                        Peluquería Canina
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#contacto">
                                    <div class="item-text-responsive">
                                        Contacto
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </label>
            </div>
        </div>
        <div class="section">
            <img class="logosection" src="imagenes/Logo Los Solares Liviano.png">
        </div>
        <div class="plandeaccion" id="plandeaccion">
            <div class="classpda">
            </div>
            <div class="textopda">
                <h2 class="tituloplandeaccion">Precauciones para cuidarnos entre todos</h2>
                <p>- LLámanos para agendar hora de atención, antes de venir con tu mascota.</p>
                <p>- La mascota debe venir solo con un acompañante.</p>
                <p>- Recuerda el correcto uso de la mascarilla.</p>
            </div>
        </div>
        <div class="servicios" id="servicios">
            <div class="divem4y4">
                <div class="divem2y2">
                    <div class="divsem">
                        <div>
                            <div class="circulo">
                                <i class="far fa-file-alt iconos"></i>
                            </div>
                        </div>
                        <div>
                            <h3>Consulta Veterinaria</h3>
                        </div>
                    </div>
                    <div class="divsem">
                        <div>
                            <div class="circulo">
                                <i class="fas fa-stethoscope iconos"></i>
                            </div>
                        </div>
                        <div>
                            <h3>Medicina Preventiva</h3>
                        </div>
                    </div>
                </div>
                <div class="divem2y2">
                    <div class="divsem">
                        <div>
                            <div class="circulo">
                            <i class="fas fa-sim-card iconos"></i>
                            </div>
                        </div>
                        <div>
                            <h3>Aplicación de Microchip</h3>
                        </div>
                    </div>
                    <div class="divsem">
                        <div>
                            <div class="circulo">
                                <i class="fas fa-tooth iconos"></i>
                            </div>
                        </div>
                        <div>
                            <h3>Destartraje</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divem4y4">
                <div class="divem2y2">
                    <div class="divsem">
                        <div>
                            <div class="circulo">
                                <i class="fas fa-prescription-bottle iconos"></i>
                            </div>
                        </div>
                        <div>
                            <h3>Exámenes</h3>
                        </div>
                    </div>
                    <div class="divsem">
                        <div>
                            <div class="circulo">
                                <i class="fas fa-clinic-medical iconos"></i>
                            </div>
                        </div>
                        <div>
                            <h3>Cirugías de Esterilización</h3>
                        </div>
                    </div>
                </div>
                <div class="divem2y2">
                    <div class="divsem">
                        <div>
                            <div class="circulo">
                                <i class="fas fa-user-nurse iconos"></i>
                            </div>
                        </div>
                        <div>
                            <h3>Interconsultas</h3>
                        </div>
                    </div>
                    <div class="divsem">
                        <div>
                            <div class="circulo">
                                <i class="fas fa-shopping-bag iconos"></i>
                            </div>
                        </div>
                        <div>
                            <h3>Venta de accesorios</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="peluqueriacanina" id="peluqueriacanina">
            <div class="classpc">
            </div>
            <div class="textopc">
                <h2 class="titulopeluqueriacanina">PELUQUERÍA CANINA</h2>
                <p>
                    Incluye:<br>
                    <br>
                    -  Corte de pelo.<br>
                     -  Baño con shampoo  y acondicionador hipoalergénico para perros.<br>
                     -  Corte de uñas.<br>
                     -  Drenaje de sacos anales (previa evaluación).<br>
                     -  Secado.<br>
                     -  Cepillado.<br>
                     <br>
                </p>
                <p>
                    Recuerda:<br>
                    <br>
                    Para no prolongar la espera de su mascota antes de la
                      atención y evitar que se someta a un estrés innecesario,
                       se debe agendar la hora previamente.
                </p>
            </div>
        </div>
        <div class="contacto" id="contacto">
            <div class="infocontacto">
                <p>
                    SE ATIENDE CON HORA AGENDADA
                </p>
                <p>
                    Horarios: Lunes a viernes: 11:00 a 19:00 hrs.
                </p>
                <p>
                    Teléfono: 232172241
                </p>
                <p>
                    <a class="correo" href="#contacto">Correo: veterinarialossolares@gmail.com</a>
                </p>
                <p>
                    Dirección: Mercedes Fontecilla 4497, Estación Central
                </p>
            </div>
            <div class="formulario">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                    <h2>Contacto</h2>
                    <input type="text" name="nombre" placeholder="Nombre" required>
                    <input type="email" name="correo" placeholder="Correo" required>
                    <input type="text" name="telefono" placeholder="Teléfono" required>
                    <textarea name="mensaje" placeholder="Escriba aquí su mensaje" required></textarea>
                    <input type="submit" value="ENVIAR" class="botonenviar" name="enviar">
                </form>
            </div>
        </div>
        <div class="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3328.2376298687695!2d-70.73038878537615!3d-33.46916350585784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c37aace1df51%3A0x9f747902451850d1!2sVeterinaria%20Los%20Solares!5e0!3m2!1ses!2scl!4v1608668463268!5m2!1ses!2scl" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="copyright">
                <p>Copyright Clínica Veterinaria Los Solares | Desarrollado por IvanDinamarcaWD</p>
        </div>
        <div class="botontelefono">
            <a href="tel:+56232172241" target="_blank">
                <i class="fas fa-phone-square-alt iconotelefono"></i>
            </a>
        </div>
    </div>
</body>
</html>