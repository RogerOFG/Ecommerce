<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include('./pages/head.html') ?>

    <link rel="stylesheet" href="./assets/css/producto.css">

</head>
<body>
    <!-- HEADER -->
    <header>
        <?php include('./pages/header.php') ?>
    </header>

    <!-- SECTION -->
    <section class="contenedor-ancho">
        <div class="centrar-orden margen-t-40">

            <div class="contenedor-ancho margen-t-40 centrar">

                <div class="box-articulo">

                    <div class="box-carousel">
                        <div class="carousel-container">
                            <div class="thumbnails-container">
                                <div class="thumbnails"></div>
                            </div>
                            <div class="image-container">
                                <img id="main-image" src="">
                            </div>
                        </div>

                        <img class="thumbnail-img ocultar" src="./assets/img/Audemars-Piguet.jpg">
                        <img class="thumbnail-img ocultar" src="./assets/img/Patek-Philippe.jpg">
                        <img class="thumbnail-img ocultar" src="./assets/img/Rolex.jpg">
                        <img class="thumbnail-img ocultar" src="./assets/img/Audemars-Piguet.jpg">
                        <img class="thumbnail-img ocultar" src="./assets/img/logo.svg">
                    </div>

                    <div class="box-info">
                        <h2 class="box-title">NOMBRE ARTICULO SELECCIONADO</h2>
                        <strong>$Precio_del_Articulo</strong> <br>
                        <div class="margen-t-40">
                            <span> <i class="bi bi-truck"></i>  Los productos normalmente te llegaran de 2 a 5 días hábiles. </span> <br> <br>
                            <span class="op"> 
                                <i class="bi bi-truck"></i>  Pagos CONTRA ENTREGA. <i class="bi bi-patch-question-fill"></i>
                                <div class="quest">
                                    Pagas cuando tengas el producto en tus manos.
                                </div>
                                <div class="cantidad margen-t-20">
                                    Cantidad: 
                                    <select>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                    <span>(5 disponibles)</span>
                                </div>
                                <div>
                                    <button class="button">Agregar al carrito</button>
                                    <button class="button">Comprar Ahora</button>
                                </div>
                            </span>

                            <div class="margen-t-40">
                                <strong>Lo que tienes que saber de este producto</strong> <br><br>
                                <li> <strong>Marca:</strong> Audemars Piguet</li>
                                <li> <strong>(Reloj) Modelo:</strong> Royal Oak Selfwinding</li>
                                <li> <strong>Material de la pulsera:</strong> Acero</li>
                                <li> <strong>Año de fabricación:</strong> 2022</li>
                                <li> <strong>Estado:</strong> Nuevo (De fabrica)</li>
                                <li> <strong>Precio:</strong> $58 800 COP</li>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <footer>

    </footer>

    <!-- CARRUSEL IMG PRODUCTO -->
    <script src="./assets/js/carousel-producto.js"></script>
</body>
</html>