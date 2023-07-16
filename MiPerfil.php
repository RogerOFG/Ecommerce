<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>

    <?php include('./pages/head.html') ?>

    <link rel="stylesheet" href="./assets/css/perfil.css">
</head>
<body>
    <header>
        <?php include('./pages/header.php') ?>
    </header>
    <section>

        <div class="box-content">

            <div class="box-data">
                <h2 class="title">Mis datos</h2>
                <h3>Datos de la cuenta</h3>
                <div class="box-labels">
                    <div class="label borde-bajo">
                        <input type="text" placeholder="RogerOFG" readonly>
                        <span>Nombre</span>
                    </div>

                    <div class="label">
                        <input type="text" placeholder="roger@correo.com" readonly>
                        <span>Correo</span>
                    </div>
                </div>
            </div>

            <div class="box-data">
                <h3>Datos Personales</h3>
                <div class="box-labels">
                    <div class="label borde-bajo">
                        <input type="text" placeholder="Cedula de Ciudadania" readonly>
                        <span>Tipo Documento</span>
                    </div>

                    <div class="label borde-bajo">
                        <input type="text" placeholder="100334674" readonly>
                        <span>Documento</span>
                    </div>

                    <div class="label borde-bajo">
                        <input type="text" placeholder="Calle 23 No 43 - 12" readonly>
                        <span>Direccion</span>
                    </div>

                    <div class="label borde-bajo">
                        <input type="text" placeholder="San Isidro" readonly>
                        <span>Barrio</span>
                    </div>

                    <div class="label borde-bajo">
                        <input type="text" placeholder="300 000 0000" readonly>
                        <span>Teléfono</span>
                    </div>

                    <div class="label">
                        <input type="text" placeholder="300 000 2222" readonly>
                        <span>Teléfono alternativo</span>
                    </div>
                </div>
            </div>

        </div>

    </section>
</body>
</html>