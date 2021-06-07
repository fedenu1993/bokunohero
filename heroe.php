<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BokuNoHero</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Coda+Caption:wght@800&display=swap" rel="stylesheet"> 
    <script src="js/jquery.min.js"></script>
    <script src="js/js.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
</head>
<body class="contenido-int scroll-suave">

    <?php
    session_start(); 
    if(isset($_SESSION["elegido"])){
        include "base.php";
        $pj = $_SESSION["elegido"];
    ?>

    <div class="row align-items-center text-center fijar">
        <div class="col-sm-12 col-lg-6">
            <a class="logo" href="index.php">
                <img src="Imagenes/Boku_no_Hero_Academia_Logo.png" class="m-3 img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
            </a>
        </div>
        <div class="col-sm-12 col-lg-6">
            <a class="nombre" href="#he">
                <?php echo $array[$pj]["nombre"]; ?>
            </a>
        </div>    
    </div>
    <header class="text-center flotar">
        <a id="mini-menu" href="#"></a>
        <div class="barra-nav">
            <a class="navegacion" href="#personality">Personalidad</a>
            <a class="navegacion" href="#appearance">Apariencia</a>
            <a class="navegacion" href="#skill">Habilidades</a>
            <a class="navegacion" href="#equipment">Equipo</a>
        </div>  
    </header>
    <main class="container">
        <section class="el" id="he">

            <?php echo $array[$pj]["presentacion"]; ?>

        </section>
        <section class="seccion" id="personality">
      
            <?php echo $array[$pj]["personalidad"]; ?>

        </section>
        <section class="seccion" id="appearance">
         
            <?php echo $array[$pj]["apariencia"]; ?>

        </section>
        <section class="seccion" id="skill">
 
            <?php echo $array[$pj]["habilidades"]; ?>

        </section>
        <section class="seccion" id="equipment">
        
            <?php echo $array[$pj]["equipo"]; ?>
           
        </section>
    </main>
    <?php
    } 
    ?>
    <footer>
        <div class="redes-sociales">
            <a href="https://www.facebook.com/FedeNu/" target="_blank"><i class="icono fab fa-facebook-square"></i></a>
            <a href="https://www.youtube.com/channel/UCnwwjCV7KyHYlNRUCgrpQQQ" target="_blank"><i class="fab fa-youtube-square"></i></a>
            <a href="https://www.instagram.com/fede_nu_/" target="_blank"><i class="fab fa-instagram-square"></i></a>
            <a href="mailto:fedenu1993@gmail.com" target="_blank"><i class="fas fa-envelope-square"></i></a>
            <a href="https://www.linkedin.com/in/federico-nu%C3%B1ez-04130b188/" target="_blank"><i class="fab fa-linkedin"></i></a>
        </div>
        <div class="footer-barra">
            <p>© 2020 Federico Nuñez - Todos los derechos reservados.</p>
            <p>Hecho a mano con mucha dedicación</p>
        </div>
    </footer>
    
</body>
</html>