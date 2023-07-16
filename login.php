<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./assets/css/general.css">
    <link rel="stylesheet" href="./assets/css/login.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <main>
        <div class="wrapper">

            <div class="login" id="login">
                <h2 class="login-title">Iniciar Sesión</h2>
                <form action="/process/user.php" method="POST">
                    <div class="login-email">
                        <i class="bi bi-envelope"></i>
                        <input type="email" placeholder="Digite su correo" required name="correo_usuario">
                    </div>

                    <div class="login-password">
                        <i class="bi bi-key"></i>
                        <input type="password" placeholder="Digite su contraseña" required name="contraseña_usuario">
                    </div>

                    <div class="login-button">
                        <input type="submit" value="Continuar" name = "ingreso_usuario">
                    </div>

                    <div class="sep"><span>o</span></div>

                    <div class="register-page">
                        <span class="centrar-orden">¿Aun no tienes una cuenta? <strong id="btn-register">¡Registrate gratis!</strong></span>
                    </div>
                </form>
            </div>

            <div class="design"></div>

            <div class="register ocultar" id="register">
                <h2 class="login-title">Registrate</h2>
                <form action="/process/user.php" method="POST">
                    <div class="login-email">
                        <i class="bi bi-person"></i>
                        <input type="text" placeholder="Digite su nombre" required name="nombre_usuario">
                    </div>

                    <div class="login-email">
                        <i class="bi bi-envelope"></i>
                        <input type="email" placeholder="Digite su correo" required name="correo" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">
                    </div>

                    <div class="login-password">
                        <i class="bi bi-key"></i>
                        <input type="password" placeholder="Digite su contraseña" required name="contraseña" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\da-zA-Z]).{8,}$">
                        <i class="bi-patch-question-fill quest">
                            <div class="questMsj">
                                <span>La contraseña debe tener minimo 8 digitos una mayuscula una minuscula y un numero</span>
                            </div>
                        </i>
                    </div>

                    <div class="login-password">
                        <i class="bi bi-key-fill"></i>
                        <input type="password" placeholder="Confirme su contraseña" required name="verificar_contraseña" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\da-zA-Z]).{8,}$">
                    </div>

                    <div class="login-password">
                        <i class="bi bi-telephone"></i>
                        <input type="number" placeholder="Numero de Telefono" required name="numero_telefono">
                    </div>

                    <div class="login-button">
                        <input type="submit" value="Continuar" name="registro_usuario">
                    </div>

                    <div class="sep"><span>o</span></div>

                    <div class="register-page">
                        <span class="centrar-orden">¿Ya tienes una cuenta? <strong id="btn-login">¡Inicia Sesión!</strong></span>
                    </div>
                </form>
            </div>
        </div>
    </main>


    <script src="./assets/js/login.js"></script>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>