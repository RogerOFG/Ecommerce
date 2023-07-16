<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include('./pages/head.html') ?>

    <link rel="stylesheet" href="./assets/css/compra.css">
</head>
<body>
    <!-- HEADER -->
    <header>
        <?php include('./pages/header.php') ?>
    </header>

    <!-- SECTION -->
    <section class="contenedor-ancho">
        <div class="cart-content margen-t-40">

            <div class="cart-title">
                <h2>Dirección de envío</h2>
            </div>

            <div class="box-ubi margen-t-40">
                <div class="box-icono">
                    <i class="bi bi-geo-alt"></i>
                </div>
                <div class="box-direc">
                    <div class="box-respon">
                        <span>Calle 50 #23-42</span> <br>
                        <span>San Isidro - Barranquilla, Atlantico</span>
                    </div>
                </div>
                <div class="box-modi">
                    <a href="#">Modificar dirección</a>
                </div>
            </div>

            <div class="box-productos margen-t-40">
                <h3>Productos pedidos</h3>

                <div class="box-producto margen-t-30">
                    <div class="box-envio">
                        <span>Costo de envio</span>
                        <span style="color: #39b54a;">Gratis</span>
                    </div>
                    <div class="box-info">
                        <div class="picture" style="background-image: url('./assets/img/Audemars-Piguet.jpg');"></div>
                        <div class="box-data">
                            <span>Reloj Audemars Piguet</span>
                            <span>Cantidad: 1</span>
                            <span>$600.000 c/u</span>
                        </div>
                    </div>
                </div>

                <div class="box-producto margen-t-30">
                    <div class="box-envio">
                        <span>Costo de envio</span>
                        <span>$8.000</span>
                    </div>
                    <div class="box-info">
                        <div class="picture" style="background-image: url('./assets/img/Patek-Philippe.jpg');"></div>
                        <div class="box-data">
                            <span>Reloj Patek Philippe</span>
                            <span>Cantidad: 1</span>
                            <span>$800.000 c/u</span>
                        </div>
                    </div>
                </div>

                <div class="box-producto margen-t-30">
                    <div class="box-envio">
                        <span>Costo de envio</span>
                        <span style="color: #39b54a;">Gratis</span>
                    </div>
                    <div class="box-info">
                        <div class="picture" style="background-image: url('./assets/img/Rolex.jpg');"></div>
                        <div class="box-data">
                            <span>Reloj Rolex</span>
                            <span>Cantidad: 1</span>
                            <span>$1.000.000 c/u</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="footer-content">
            <div class="footer-title margen-t-20">
                <span>Resumen de compra</span>
            </div>
            <div class="padding-t-10">
                <span>Producto/s (3)</span>
                <span>$2.400.000</span>
            </div>
            <div class="padding-t-10 padding-b-10">
                <span>Envío</span>
                <span>$8.000</span>
            </div>
            <div class="total">
                <span>Total</span>
                <span>$2.408.000 COP</span>
            </div>
        </div>
        <div class="footer-btn">
            <div class="button">
                <a href="#">Finalizar Compra</a>
            </div>
        </div>
    </footer>
</body>
</html>