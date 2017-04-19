<!DOCTYPE html>
<html>
    <head>
        <title>Contacto | IPS Arcasalud</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link rel="shortcut icon" href="images/favicon.png"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="css/jquery-ui.css" />
        <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="js/numscroller-1.0.js"></script>
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <script src="js/responsiveslides.min.js"></script>
    </head>
    <body>
        <div class="header wow zoomIn">
            <div class="container">
                <div class="header_left" data-wow-duration="2s" data-wow-delay="0.5s">
                    <ul>
                        <!--<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+123 456 7890</li>-->
                        <li><a href="mailto:info@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>contacto@clinicaarcangeles.com.co</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="header-bottom ">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo grid">
                            <div class="grid__item color-3">
                                <h1><a class="link link--nukun" href="index.php"><img src="images/logo.png" width="180"/></a></h1>
                            </div>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                        <nav class="menu menu--horatio">
                            <ul class="nav navbar-nav menu__list">
                                <li class="menu__item"><a href="index.php" class="menu__link">Inicio</a></li>
                                <li class="menu__item"><a href="#" class="menu__link">Acerca</a></li> 
                                <li class="menu__item"><a href="#" class="menu__link">Servicios</a></li> 
                                <li class="menu__item"><a href="normatividad.php" class="menu__link">Normatividad</a></li> 
                                <li class="menu__item menu__item--current"><a href="contacto.php" class="menu__link">Contacto</a></li>
                            </ul>
                        </nav>
                    </div>
                </nav>
            </div>
        </div>

        <div class="banner page_head">
        </div>
        <div class="map_contact">
            <div class="container">
                <h3 class="tittle">Contáctanos</h3>
                <div class="contact-grids">
                    <div class="col-md-6 contact-grid ">
                        <form action="#" method="post">
                            <input type="text" name="Nombre" value="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = 'Nombre';
                                    }" required="">
                            <input type="email" name="Email" value="Correo electrónico" onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = 'Correo electrónico';
                                    }" required="">
                            <textarea name="Mensaje" onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = 'Mensaje...';
                                    }" required="">Mensaje...</textarea>
                            <input type="submit" value="Enviar" >
                        </form>
                    </div>
                    <div class="col-md-6 contact-left-map ">
                        <p>
                            Somos un instituto prestador de salud, prestamos servicios médicos de consulta,
                            hospitalarios y clínicos, y de cuidados intensivos. Para más información envíanos un mensaje y nosotros
                            te contactaremos.
                        </p>
                        <ul class="contact-list">
                            <li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Calle 5 No. 10A-28 Zipaquira – Cundinamarca</li>
                            <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:contacto@clinicaarcangeles.com.co">contacto@clinicaarcangeles.com.co</a></li>
                            <!--<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+123 2222 222</li>-->
                        </ul>
                    </div>						
                    <div class="clearfix"> </div>
                </div>
                <h3 class="tittle">Ubícate en el mapa</h3>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed/v1/place?q=Calle%205%20No.%2010A-28%20Zipaquira%20%E2%80%93%20Cundinamarca&key=AIzaSyA55xq7agFGuQ2OwBE9ddx8nbc7IMCWWaQ" style="border:0"></iframe>
                </div>
            </div>
        </div>
        <div class="contact">
            <div class="container">
                <div class="col-md-6 contact-right wow fadeInLeft animated animated" data-wow-delay="0.4s">
                    <h3>Contáctanos</h3>
                    <div class="strip"></div>
                    <ul class="con-icons">
                        <!--<li><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>+123 456 7890</li>-->
                        <li><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Calle 5 No. 10A-28 Zipaquira – Cundinamarca</li>
                        <li><a href="mailto:contacto@clinicaarcangeles.com.co"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>contacto@clinicaarcangeles.com.co</a></li>
                    </ul>
                    <!--                    <ul class="fb_icons">
                                            <li class="hvr-rectangle-out"><a class="fb" href="#"></a></li>
                                            <li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
                                            <li class="hvr-rectangle-out"><a class="goog" href="#"></a></li>
                                            <li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
                                            <li class="hvr-rectangle-out"><a class="drib" href="#"></a></li>
                                        </ul>-->
                </div>
                <div class="col-md-6 contact-left wow fadeInRight animated animated" data-wow-delay="0.4s">
                    <h2>Información</h2>
                    <div class="strip"></div>
                    <p class="para">
                        Somos un instituto prestador de salud, prestamos servicios médicos de consulta,
                        hospitalarios y clínicos, y de cuidados intensivos.
                    </p>
                    <p class="copy-right">© 2017 . Todos los derechos reservados | IPS Arcasalud</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </body>
</html>

