<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include('./pages/head.html') ?>
    <link rel="stylesheet" href="./assets/css/misCompras.css">
</head>
<body>
    <!-- HEADER -->
    <header>
        <?php include('./pages/header.php') ?>
    </header>

    <!-- SECTION -->
    <section class="contenedor-ancho">
        <div class="contenedor margen-t-40">

            <h2 class="margen-b-40">Compras</h2>
            <div class="box-wrapper">

                <div class="box-compra">
                    <div class="box-fecha">
                        <span>4 de Mayo de 2023</span>
                    </div>

                    <div class="box-content">
                        <div class="box-img" style="background-image: url('./assets/img/Audemars-Piguet.jpg');"></div>
                        
                        <div class="box-info">
                            <span style="color: #00a650;">Entregado</span>
                            <span>Reloj Audemars Piguet</span>
                        </div>
                        
                        <div class="box-data">
                            <span>1 unidad/es</span>
                            <span>$600.000</span>
                        </div>

                        <div class="box-btn">
                            <a href="#">Volver a Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="box-compra">
                    <div class="box-fecha">
                        <span>3 de Mayo de 2023</span>
                    </div>

                    <div class="box-content">
                        <div class="box-img" style="background-image: url('./assets/img/Patek-Philippe.jpg');"></div>
                        
                        <div class="box-info">
                            <span style="color: #00a650;">Entregado</span>
                            <span>Reloj Patek Philippe</span>
                        </div>
                        
                        <div class="box-data">
                            <span>1 unidad/es</span>
                            <span>$800.000</span>
                        </div>

                        <div class="box-btn">
                            <a href="#">Volver a Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="box-compra">
                    <div class="box-fecha">
                        <span>3 de Mayo de 2023</span>
                    </div>

                    <div class="box-content">
                        <div class="box-img" style="background-image: url('./assets/img/Rolex.jpg');"></div>
                        
                        <div class="box-info">
                            <span style="color: #00a650;">Entregado</span>
                            <span>Reloj Rolex</span>
                        </div>
                        
                        <div class="box-data">
                            <span>1 unidad/es</span>
                            <span>$1.000.000</span>
                        </div>

                        <div class="box-btn">
                            <a href="#">Volver a Comprar</a>
                        </div>
                    </div>
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