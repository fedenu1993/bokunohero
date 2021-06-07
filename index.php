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

</head>
<body class="container-fluid">
    <nav class="row fondo cubrir">
        <form method="post" action="index.php" class="col-md-12 text-center pant-celu inmovilizar">
            <h2 class="letras texto-vertical">BOKU NO HERO</h2>
            <button type="submit" name="elegido" value="shoto" class="btn btn-link"><img class="img-prota img" src="Imagenes/a.png" alt="shoto"></button>
            <button type="submit" name="elegido" value="deku" class="btn btn-link"><img class="img-prota img" src="Imagenes/b.png" alt="deku"></button>
            <button type="submit" name="elegido" value="allmight" class="btn btn-link"><img class="img-prota img" src="Imagenes/c.png" alt="allmight"></button>
            <button type="submit" name="elegido" value="bakugo" class="btn btn-link"><img class="img-prota img" src="Imagenes/d.png" alt="bakugo"></button>
            <button type="submit" name="elegido" value="redriot" class="btn btn-link"><img class="img-prota img" src="Imagenes/e.png" alt="redriot"></button>
            <h2 class="letras texto-vertical">BOKU NO HERO</h2>
        </form>
    </nav>

<?php  
    if(isset($_POST['elegido'])){
      session_start();
      if($_POST['elegido'] == "deku"){
        $_SESSION["elegido"] = "deku";
        sleep(2);
        header("Location: heroe.php");
      }elseif($_POST['elegido'] == "bakugo"){
        $_SESSION["elegido"] = "bakugo";
        sleep(2);
        header("Location: heroe.php");
      }elseif($_POST['elegido'] == "shoto"){
        $_SESSION["elegido"] = "shoto";
        sleep(2);
        header("Location: heroe.php");
      }elseif($_POST['elegido'] == "redriot"){
        $_SESSION["elegido"] = "redriot";
        sleep(2);
        header("Location: heroe.php");
      }elseif($_POST['elegido'] == "allmight"){
        $_SESSION["elegido"] = "allmight";
        sleep(2);
        header("Location: heroe.php");
      }
    }
    ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/js.js"></script>

</body>
</html>