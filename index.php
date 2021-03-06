<?php
include_once './backend/modelo/BD.php';
include_once './backend/modelo/MGaleria.php';
include_once './backend/controlador/CGaleria.php';
include_once './backend/modelo/MNoticia.php';
include_once './backend/controlador/CNoticias.php';
$noticias = new CNoticias();
$noticia = $noticias->mostrarNoticiasPrincipal();
$galeria= new CGaleria();
$fotos= $galeria->mostrarTodo();
?>
<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:600,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Tangerine:700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:300,500,600,700&display=swap" rel="stylesheet">
        <title>La Artesanal</title>
    </head>

    <body data-spy="scroll" data-target="#navbar" data-offset="72">
        <header id="principal" class="fixed-top ">
            <nav id="header" class=" navbar navbar-expand-lg navbar-light bg-light pb-3 pt-3 ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Pasteleria La Artesanal</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link sombreado" href="#main">Inicio <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="#about-us" class="nav-link sombreado">¿Quiénes somos?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link sombreado" href="#noticias">Noticias</a>
                            </li>
                            <li class="nav-item">
                                <a href="#contacto" class="nav-link sombreado">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main id="main"class="">
            <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo $fotos[0]['url']?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item ">
                        <img src="<?php echo $fotos[1]['url']?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item ">
                        <img src="<?php echo $fotos[2]['url']?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo $fotos[3]['url']?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="overlay">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class=" offset-md-6 text-center text-md-right font-weight-bold">
                                    <h1 class="text-light">La pasteleria tradicional con un toque mas moderno</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!--¿Quiénes somos?-->
        <article id="about-us" class="pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center display-5 mb-lg-5">
                        <h2 class="mt-5">¿Quiénes somos?</h2>
                        <hr>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-12 text-center mb-3 mb-lg-5">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="col-lg-6 col-12 text-center mb-lg-5">
                        <img src="img/chefs.jpeg" alt="chefsitos" class="rounded img-fluid">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center display-5 mt-5 ">
                        <h2>El sabor inigualable de nuestros chefs</h2>
                        <hr>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-12 banner banner-aboutUs">
                            <div class=" overlay2">
                                <div class="container">
                                    <div class="row text-center ">
                                        <div class="col-6">
                                            <div class="row justify-content-center">
                                                <div class="col-6">
                                                    <div class=" tarjeta-foto mt-4">
                                                        <img src="img/chaquetillas-de-cocina-joel-blanco.jpg" class="card-img-top img-fluid   " width="25%" alt="...">
                                                        <div class="card-body padding-texto">
                                                            <h5 class="">Erick Montalvo Galicia</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="row justify-content-center">
                                                <div class="col-6 ">
                                                    <div class="tarjeta-foto mt-4">
                                                        <img src="img/images%20(2).jpg" class="card-img-top img-fluid " alt="...">
                                                        <div class="card-body padding-texto">
                                                            <h5 class="">Card title</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </article>
        <!--noticias-->
        <section id="noticias" class="pt-5 ">
            <div class="container ">
                <div class="row">
                    <div class="col-12 text-center text-uppercase ">
                        <h2 class="pt-4">ultimas noticias</h2>
                    </div>
                    <div class="col-12 text-center mb-5 subtitulos-icon mb-5">
                        <i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
                        <i class="fa fa-spoon fa-1x"></i>
                        <i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="row">
                    <?php echo $noticia[0] ?>
                    <div class="col-md-8 mb-4 ">
                        <?php
                        for ($index = 1; $index < count($noticia); $index++) {
                            echo $noticia[$index];
                        }
                        ?>
                     
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="todasnoticias.php" class="btn btn-block
                           btn-primary   size ">Todas las noticias</a>
                    </div>
                </div>
            </div>
        </section>
        <!--contacto-->
        <section class="contacto pt-5" id="contacto">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center display-5 mb-lg-5">
                        <h2 class="mt-5">Contactanos</h2>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="container mb-5 mt-5">
                <div class="row">
                    <div class="col-12">
                        <form >
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Nombres:</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingresa tu nombre completo">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Apellidos</label>
                                        <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Ingresa tus apellidos">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 ">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Cuentanos ¿Cómo te podemos ayudar?:</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary size size1">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container-fluid ">
                <div class="row mt-5 mapas">
                    <div class="col-12 mb-5">
                        <h2 class="text-center mt-5">Visitanos en nuestros disintos establecimientos</h2>
                        <hr>
                    </div>
                    <div class="col-12  col-xl-4 mb-4">
                        <h3 class="text-center mb-3">Matriz</h3>
                        <iframe class="ml-auto mr-auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.460111017843!2d-97.39262478518015!3d18.462806487442624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c5bcda643394cf%3A0x91eee08fa4f25d83!2sPasteler%C3%ADa+La+Artesanal!5e0!3m2!1ses!2smx!4v1562709157894!5m2!1ses!2smx" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="col-12 col-xl-4 mb-4">
                        <h3 class="text-center mb-3">Sucursal 2</h3>
                        <iframe class="ml-auto mr-auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.460111017843!2d-97.39262478518015!3d18.462806487442624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c5bcda643394cf%3A0x91eee08fa4f25d83!2sPasteler%C3%ADa+La+Artesanal!5e0!3m2!1ses!2smx!4v1562709157894!5m2!1ses!2smx" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="col-12 col-xl-4 mb-4">
                        <h3 class="text-center mb-3">Sucursal </h3>
                        <iframe class="ml-auto mr-auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.460111017843!2d-97.39262478518015!3d18.462806487442624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c5bcda643394cf%3A0x91eee08fa4f25d83!2sPasteler%C3%ADa+La+Artesanal!5e0!3m2!1ses!2smx!4v1562709157894!5m2!1ses!2smx" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

        <!--footer-->
        <footer class="mt-5">
            <div class="container pb-2 pt-2">
                <div class="row text-center text-white ">
                    <div class="col-12 mb-4">
                        <p class="slogan pt-2  h4 mt-0">
                            Una expresion de arte y sabor</p>
                    </div>
                    <div class="mb-3 col-lg-4">
                        <span class=" mb-2"><i class="fa fa-facebook-official fa-lg"></i>
                            Pastelería La Artesanal</span>
                    </div>
                    <div class=" mb-3 col-lg-4 ">
                        <span class=" mb-2 "><i class="fa fa-whatsapp fa-lg" aria-hidden="true"></i>
                            2381811768
                        </span>
                    </div>
                    <div class="mb-3 col-lg-4 ">
                        <span class=" mb-2 "><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>
                            INDEPENDENCIA Oriente 75760 Tehuacán</span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

</html>
