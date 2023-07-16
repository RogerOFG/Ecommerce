<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Linkeado CSS -->
    <link rel="stylesheet" href="./css/panel.css">
</head>
<body>
    <!-- HEADER -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="./panel">Panel Admin</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./producto">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Notificaciones (PROXIMAMENTE)</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- SECTION -->
    <section>
        <h3 class="title-dash">Dashboard <i class="bi bi-ui-checks-grid"></i> </h3>

        <div class="box">

            <div class="item item--1" id="tUsu">
                <i class="bi bi-bookmark-check-fill ocultar" id="iconU" style="color: #9595ff; font-size: 20px;"></i>
                <i class="bi bi-people-fill" style="color: #9595ff;"></i>
                <span class="quantity"> 90+ </span>
                <span class="text text--1"> Usuarios </span>
            </div>

            <div class="item item--2" id="tProd">
                <i class="bi bi-bookmark-check-fill ocultar" id="iconP" style="color: #fca147; font-size: 20px;"></i>
                <i class="bi bi-basket" style="color: #fca147;"></i>
                <span class="quantity"> 70+ </span>
                <span class="text text--2"> Productos <br> Registrados </span>
            </div>

            <div class="item item--3" id="tSoli">
                <i class="bi bi-bookmark-check-fill ocultar" id="iconS" style="color: #42c16e; font-size: 20px;"></i>
                <i class="bi bi-bag-heart-fill" style="color: #42c16e;"></i>
                <span class="quantity"> 150+ </span>
                <span class="text text--3"> Solicitudes de <br> Compra </span>
            </div>

            <!-- <div class="item item--4">
                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0h24v24H0z" fill="none"></path>
                    <path fill="rgba(220,91,183,1)"
                        d="M12 20h8v2h-8C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10a9.956 9.956 0 0 1-2 6h-2.708A8 8 0 1 0 12 20zm0-10a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm-4 4a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm8 0a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm-4 4a2 2 0 1 1 0-4 2 2 0 0 1 0 4z">
                    </path>
                </svg>
                <span class="quantity"> 30+ </span>
                <span class="text text--4"> Animations </span>
            </div> -->

        </div>

        <div class="ocultar" id="box-tablaUser">
            <h3 class="tabla-title">Tabla de Usuarios</h3>

            <table class="table table-dark table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"> <i class="bi bi-people-fill"> Usuario</i> </th>
                        <th scope="col"> <i class="bi bi-envelope-at-fill"> Correo </i> </th>
                        <th scope="col"> <i class="bi bi-phone-fill"> Celular </i> </th>
                        <th scope="col"> <i class="bi bi-geo-alt-fill"> Ciudad </i> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>RogerOFG</td>
                        <td>roger@correo.com</td>
                        <td>300 536 9591</td>
                        <td>Barranquilla</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>thornton@correo.com</td>
                        <td>300 528 4572</td>
                        <td>Barranquilla</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry the Bird</td>
                        <td>twitter@correo.com</td>
                        <td>301 933 8583</td>
                        <td>Bogota</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="ocultar" id="box-tablaProductos">
            <h3 class="tabla-title">Tabla de Productos</h3>

            <table class="table table-dark table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"> <i class="bi bi-watch"> Nombre</i> </th>
                        <th scope="col"> <i class="bi bi-basket2-fill"> Stock </i> </th>
                        <th scope="col"> <i class="bi bi-tag-fill"> Categoria </i> </th>
                        <th scope="col"> <i class="bi bi-cash-stack"> Precio </i> </th>
                        <th scope="col" style="text-align: center;"> <i class="bi bi-images"> Imagen/es </i> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Reloj Audemars Piguet</td>
                        <td>5</td>
                        <td>Reloj</td>
                        <td>600.000</td>
                        <td class="i-icon"> <a href="#"> <i class="bi bi-file-earmark-image i-icon"></i> </a> </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Reloj Patek Philippe</td>
                        <td>3</td>
                        <td>Reloj</td>
                        <td>800.000</td>
                        <td class="i-icon"> <a href="#"> <i class="bi bi-file-earmark-image i-icon"></i> </a> </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Reloj Rolex</td>
                        <td>4</td>
                        <td>Reloj</td>
                        <td>1.000.000</td>
                        <td class="i-icon"> <a href="#"> <i class="bi bi-file-earmark-image i-icon"></i> </a> </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="ocultar" id="box-tablaCompras">
            <h3 class="tabla-title">Tabla de Solicitudes de Compra</h3>

            <table class="table table-dark table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"> <i class="bi bi-person-fill"> Usuario (ID)</i> </th>
                        <th scope="col"> <i class="bi bi-watch"> Producto (ID) </i> </th>
                        <th scope="col"> <i class="bi bi-geo-alt-fill"> Ciudad </i> </th>
                        <th scope="col"> <i class="bi bi-0-circle-fill"> Estado </i> </th>
                        <th scope="col"> <i class="bi bi-clock-history"> fecha </i> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>RogerOFG</td>
                        <td>Reloj Audemars Piguet</td>
                        <td>Barranquilla</td>
                        <td>Entregado</td>
                        <td>4/05/2023</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Reloj Rolex</td>
                        <td>Barranquilla</td>
                        <td>En camino</td>
                        <td>24/04/2023</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry the Bird</td>
                        <td>Reloj Patek Philippe</td>
                        <td>Barranquilla</td>
                        <td>En espera</td>
                        <td>2/05/2023</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </section>

    <script src="./js/main.js"></script>
</body>
</html>