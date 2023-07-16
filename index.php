<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include('./pages/head.html') ?>

    <link rel="stylesheet" href="./assets/css/styles.css">

    <!-- Kanit Font -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,500;0,600;0,700;0,800;0,900;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
</head>
<body>
    <!-- HEADER -->
    <header>
        <?php include('./pages/header.php') ?>
    </header>

    <!-- SECTION -->
    <section class="contenedor-ancho">
        <div class="contenedor centrar-orden margen-t-40">

            <div class="slider">

                <div class="slider-items">
                    <img class="slider-item img" src="./assets/img/slider/img-1.jpg" alt="...">
                    <img class="slider-item img" src="./assets/img/slider/img-2.jpg" alt="...">
                    <img class="slider-item img" src="./assets/img/slider/img-3.jpg" alt="...">
                    <img class="slider-item img" src="./assets/img/slider/img-4.jpg" alt="...">
                </div>

                <div class="slider-controls">
                    <span class="bx bxs-chevron-left prev" onclick="changeSlide(-1)"></span>
                    <span class="bx bxs-chevron-right next" onclick="changeSlide(1)"></span>
                </div>

                <div class="slider-indicators">
                    <span onclick="moveTo(1)"></span>
                    <span onclick="moveTo(2)"></span>
                    <span onclick="moveTo(3)"></span>
                    <span onclick="moveTo(4)"></span>
                </div>

                <div class="slider-content">
                    <h3>Diseño</h3>
                    <h3>Elegancia</h3>
                    <h3>Calidad</h3>
                    <h3>Estilo</h3>
                </div>

            </div>

            <div class="contenedor margen-t-40">
                <div class="categorias margen-t-40">
                    <h1>Relojes</h1>
                </div>

                <div class="box-content">

                    <a href="./producto">
                        <div class="box">
                            <div class="upper-part">
                                <div class="upper-part-face">
                                    <img src="./assets/img/Audemars-Piguet.jpg" alt="">
                                </div>
                                <div class="upper-part-back">
                                    <img src="./assets/img/Audemars-Piguet.jpg" alt="">
                                </div>
                            </div>
                            <div class="lower-part">
                                <div class="lower-part-face">Reloj Audemars Piguet</div>
                                <div class="lower-part-back">COP $500.000 <button> <i class="bi bi-cart" style="font-size: 18px;"></i> </button> </div>
                            </div>
                        </div>
                    </a>

                    <a href="./producto">
                        <div class="box">
                            <div class="upper-part">
                                <div class="upper-part-face">
                                    <img src="./assets/img/Patek-Philippe.jpg" alt="">
                                </div>
                                <div class="upper-part-back">
                                    <img src="./assets/img/Patek-Philippe.jpg" alt="">
                                </div>
                            </div>
                            <div class="lower-part">
                                <div class="lower-part-face">Reloj Patek Philippe</div>
                                <div class="lower-part-back">COP $500.000 <button> <i class="bi bi-cart" style="font-size: 18px;"></i> </button> </div>
                            </div>
                        </div>
                    </a>

                    <a href="./producto">
                        <div class="box">
                            <div class="upper-part">
                                <div class="upper-part-face">
                                    <img src="./assets/img/Rolex.jpg" alt="">
                                </div>
                                <div class="upper-part-back">
                                    <img src="./assets/img/Rolex.jpg" alt="">
                                </div>
                            </div>
                            <div class="lower-part">
                                <div class="lower-part-face">Reloj Rolex</div>
                                <div class="lower-part-back">COP $500.000 <button> <i class="bi bi-cart" style="font-size: 18px;"></i> </button> </div>
                            </div>
                        </div>
                    </a>

                </div>

            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <footer>

    </footer>

    <!-- SCRIPT SLIDER -->
    <script src="./assets/js/script.js"></script>
</body>
</html>