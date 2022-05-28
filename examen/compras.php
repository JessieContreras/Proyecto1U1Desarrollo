<?php

session_start();
    if(isset($_GET['id_producto']) && is_numeric($_GET['id_producto'])){
        $id_producto = $_GET['id_producto'];
        require 'vendor/autoload.php';
        $productos = new exa\Producto;
        $resultado = $producto->mostrarPorId($id_producto);

        if(!$resultado)
            header('Location: catalogo.php');

        $_SESSION['carrito'] = array(
            'id_producto' => $resultado['id_producto'],
            'imagen' => $resultado['imagen'],
            'Precio' => $resultado['Precio'],
            'cantidad' => 1


        );

        print '<pre>';
        print_r($_SESSION['carrito']);
    }    

?>



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
                                    <li><a href="./catalogo.html">Catálogo</a></li>
                                    <li class="active"><a href="./compras.html">Compras</a></li>
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

    <div class="alime-portfolio-area section-padding-80 clearfix">
        <div class="container-fluid">

          <div class="global">
              <div class="header">
                  <FONT SIZE=5 COLOR=#000000>Nueva venta</FONT>
                  <div class="espacio">
                      <hr>
                      </hr>
                  </div>
              </div>
              <!--Formulario Escríbenos-->
              <div class="cont_izq1">
                  <strong>
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="40" height="40"
                          viewBox="0 0 24 24" stroke-width="1.5" stroke="#009988" fill="none" stroke-linecap="round"
                          stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <rect x="3" y="5" width="18" height="14" rx="2" />
                          <polyline points="3 7 12 13 21 7" />
                      </svg>
                      <FONT SIZE=4 COLOR=#000000>|Datos de Cliente|</FONT>
                  </strong>
                  <div class="container">
                      <div class="row mt-3">
                          <div class="col">
                              <form action="">
                                  <div class="form-group">
                                      <label for="nombre">Nombres</label>
                                      <input type="text" class="form-control" placeholder="Nombres" name="nombres" id="name">
                                  </div>
                                  <div class="form-group">
                                      <label for="nombre">Apellidos</label>
                                      <input type="text" class="form-control" placeholder="Apellidos" name="apellidos" id="apellidos">
                                  </div>
                                  <div class="form-group">
                                      <label for="pass">Cédula</label>
                                      <input type="text" class="form-control" placeholder="Cédula" name="cédula" id="cédula">
                                  </div>
                                  <div class="form-group">
                                      <label for="pass">Dirección</label>
                                      <input type="text" class="form-control" placeholder="Dirección" name="dirección"
                                          id="dirección">
                                  </div>
                                  <div class="form-group">
                                      <label for="pass">Email</label>
                                      <input type="text" class="form-control" placeholder="@correo.com" name="email"
                                          id="email">
                                  </div>
                                  <div class="form-group">
                                      <label for="pais">País</label>
                                      <select name="pais" id="pais" class="form-control">
                                          <option value="alemania">Alemania</option>
                                          <option value="colombia">Colombia</option>
                                          <option value="dinamarca">Dinamarca</option>
                                          <option value="ecuador">Ecuador</option>
                                      </select>
                                  </div>
                                  <div class="form-check">
                                      <label class="form-check-label">
                                          <input type="radio" name="sexo" id="hombre" class="form-check-input mr-2">
                                          <FONT SIZE=3 COLOR="#597e8d">Hombre</FONT>
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <label class="form-check-label">
                                          <input type="radio" name="sexo" id="mujer" class="form-check-input mr-2">
                                          <FONT SIZE=3 COLOR="#597e8d">Mujer</FONT>
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <label class="form-check-label">
                                          <input type="checkbox" name="terminos" id="terminos" class="form-check-input mr-2">
                                          <FONT SIZE=3 COLOR="#597e8d">Acepto términos y condiciones</FONT>
                                      </label>
                                  </div>
                                  <center>
                                      <button type="submit" class="btn btn-primary mt-5">Enviar</button>
                                  </center>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>

        </div>
    </div>






</body>
<script src="js/jquery.min.js"></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/alime.bundle.js"></script>

<script src="js/default-assets/active.js"></script>

</html>
