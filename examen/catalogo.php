<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pc Center </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header-area">
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <nav class="classy-navbar justify-content-between" id="alimeNav">
                        <div class="classy-menu">
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <div class="classynav">
                                <ul id="nav">
                                    <li><a href="./index.html">Inicio</a></li>
                                    <li class="active"><a href="./catalogo.php">Catálogo</a></li>
                                    <li><a href="./Compras.php">Compras</a></li>
                                    <li><a href="./empresa.html">Quienes Somos</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">

            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/INICIO.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-lg-8 col-xl-9">
                            <div class="welcome-text">
                                <h2 data-animation="bounceInDown" data-delay="900ms">Bienvanidos a<br>PCENTER</h2>
                                <p data-animation="bounceInDown" data-delay="500ms">Encuentra aquí los mejores componentes para tu PC</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/INICIO2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">

                        <div class="col-12 col-lg-8 col-xl-9">
                            <div class="welcome-text">
                                <h2 data-animation="bounceInUp" data-delay="100ms">Bienvanidos a<br>PCENTER</h2>
                                <p data-animation="bounceInUp" data-delay="500ms">Encuentra aquí los mejores componentes para tu PC</p>
                                <div class="hero-btn-group" data-animation="bounceInUp" data-delay="900ms">
                                    <a href="#" class="btn alime-btn mb-3 mb-sm-0 mr-4">Registrate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
// 
    <div class="alime-portfolio-area section-padding-80 clearfix">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="alime-projects-menu">
                        <div class="portfolio-menu text-center">
                            <button class="btn active" data-filter="*">Todos</button>
                            <button class="btn" data-filter=".human">Procesadores</button>
                            <button class="btn" data-filter=".nature">Placas Base</button>
                            <button class="btn" data-filter=".country">Almacenamiento</button>
                            <button class="btn" data-filter=".video">Memoria Ram</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="conta">
            <?php
                include("php/conexion.php");
                $query = "SELECT * FROM producto";
                $resultado = $conexion->query($query);
                while ($row = $resultado->fetch_assoc()){
                ?>

                <div class="card">
                    <img src="data:image/png;base64, <?php echo base64_encode($row['imagen']); ?>">
                    
                    <p><?php echo $row['Tipo']; ?></p>
                    <h4><?php echo $row['Precio']; ?></h4>
                    <div class="panel-footer">
                        <a href="carrito/index.html" class="btn btn-success btn-block">
                            <span class="glyphicon glyphicon-shopping-car"> 
                               Ver mas
                            </span>
                        </a>
                    </div>

                </div>



            <?php
            }
            ?>
                

            </div>
        </div>
    </div>


    <script src="js/jquery.min.js"></script>

    <script src="js/popper.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/alime.bundle.js"></script>

    <script src="js/default-assets/active.js"></script>
</body>

</html>