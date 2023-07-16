<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include('./pages/head.html') ?>

    <link rel="stylesheet" href="./assets/css/cart.css">
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
                <h2>Tu carrito</h2>
            </div>

            <div>
                <div class="cart-article">
                    <picture class="cart-img" style="background-image: url('./assets/img/Audemars-Piguet.jpg');"></picture>
                    <div class="cart-prods">
                        <span class="cart-prod">Reloj Audemars Piguet</span>
                    </div>
                    <div class="cantidad-content">
                        <div class="cantidad">
                            <button class="incremento">+</button>
                            <input type="text" class="numero" value="1">
                            <button class="decremento">-</button>
                            <input type="hidden" class="cant-max" value="5">
                        </div>
                        <span>5 disponibles</span>
                    </div>
                    <div>
                        <span>$600.000</span>
                    </div>
                </div>
                <div class="cart-acciones">
                    <a href="#">Eliminar</a>
                    <a href="#">Comprar ahora</a>
                </div>
            </div>

            <div>
                <div class="cart-article">
                    <picture class="cart-img" style="background-image: url('./assets/img/Patek-Philippe.jpg');"></picture>
                    <div class="cart-prods">
                        <span class="cart-prod">Reloj Patek Philippe</span>
                    </div>
                    <div class="cantidad-content">
                        <div class="cantidad">
                            <button class="incremento">+</button>
                            <input type="text" class="numero" value="1">
                            <button class="decremento">-</button>
                            <input type="hidden" class="cant-max" value="4">
                        </div>
                        <span>4 disponibles</span>
                    </div>
                    <div>
                        <span>$800.000</span>
                    </div>
                </div>
                <div class="cart-acciones">
                    <a href="#">Eliminar</a>
                    <a href="#">Comprar ahora</a>
                </div>
            </div>

            <div>
                <div class="cart-article">
                    <picture class="cart-img" style="background-image: url('./assets/img/Rolex.jpg');"></picture>
                    <div class="cart-prods">
                        <span class="cart-prod">Reloj Rolex</span>
                    </div>
                    <div class="cantidad-content">
                        <div class="cantidad">
                            <button class="incremento">+</button>
                            <input type="text" class="numero" value="1">
                            <button class="decremento">-</button>
                            <input type="hidden" class="cant-max" value="7">
                        </div>
                        <span>7 disponibles</span>
                    </div>
                    <div>
                        <span>$1.000.000</span>
                    </div>
                </div>
                <div class="cart-acciones">
                    <a href="#">Eliminar</a>
                    <a href="#">Comprar ahora</a>
                </div>
            </div>

            <div class="cart-btn">
                <a href="./compra">Continuar compra</a>
            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <footer>

    </footer>

    <!-- INCREMENTO DE CATINDAD -->
    <script>
        // Seleccionar todos los elementos "cantidad"
        const cantidades = document.querySelectorAll('.cantidad');

        cantidades.forEach(cantidad => {
            // Encontrar el botón de restar correspondiente
            const botonRestar = cantidad.querySelector('.decremento');

            // Agregar evento de clic al botón de restar
            botonRestar.addEventListener('click', () => {
                // Encontrar el input correspondiente
                const input = cantidad.querySelector('.numero');

                // Obtener el valor actual del input
                let valor = parseInt(input.value);

                if (valor > 1) {
                    valor--;
                    input.value = valor;
                }
            });

            // Encontrar el botón de sumar correspondiente
            const botonSumar = cantidad.querySelector('.incremento');

            // Agregar evento de clic al botón de sumar
            botonSumar.addEventListener('click', () => {
                // Encontrar el input correspondiente
                const input = cantidad.querySelector('.numero');
                
                // Encontrar el elemento cant-max correspondiente
                const cantMax = cantidad.querySelector('.cant-max');
                
                // Obtener el valor actual del input
                let valor = parseInt(input.value);
                
                // Obtener el valor máximo permitido
                let maximo = parseInt(cantMax.value);

                if (valor < maximo) {
                    valor++;
                    input.value = valor;
                }
            });
        });

    </script>
</body>
</html>