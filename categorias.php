<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include('./pages/head.html') ?>

    <link rel="stylesheet" href="./assets/css/categoria.css">
</head>
<body>
    <!-- HEADER -->
    <header>
        <?php include('./pages/header.php') ?>
    </header>

    <!-- SECTION -->
    <section class="contenedor-ancho">
        <aside>
            <li>
                <button class="button active">
                    Todos los productos
                </button>
            </li>
            <li>
                <button class="button">
                    Relojes
                </button>
            </li>
            <li>
                <button class="button">
                    Ropa
                </button>
            </li>
        </aside>

        <div class="contenedor">

            <div class="grupo">
                <div class="categorias">
                    <h2 id="escogido">Todos los Productos</h2>
                </div>

                <div class="box-content margen-t-40">

                    <a href="./producto.html">
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

                    <a href="./producto.html">
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

                    <a href="./producto.html">
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

                    <a href="./producto.html">
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

                    <a href="./producto.html">
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

                    <a href="./producto.html">
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
    <script src="./assets/js/categoria.js"></script>
</body>
</html>