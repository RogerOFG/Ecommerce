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

    <!-- Boxicons Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Linkeado CSS -->
    <link rel="stylesheet" href="./css/producto.css">
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
        <h3 class="title-dash">Registrar Productos <br> <i class='bx bxs-watch'></i> <i class='bx bx-closet'></i> </h3> 

        <form class="form">

            <label>
                <input required="required" type="text" class="input">
                <span>Nombre Producto *</span>
            </label>

            <div class="flex">
                <label>
                    <select name="" id="categoria" class="inputSelected">
                        <option>Seleccione una...</option>
                        <option value="Reloj">Reloj</option>
                        <option value="Ropa">Ropa</option>
                    </select>
                    <span class="categoria">Categoria</span>
                </label>

                <label>
                    <input required="required" type="number" class="input">
                    <span>Stock *</span>
                </label>
            </div>

            <label>
                <input required="required" type="text" class="input">
                <span>Precio *</span>
            </label>

            <!-- FORMULARIO RELOJ -->
            <div class="cat-reloj ocultar">
                <label>
                    <input type="text" placeholder="Audemars Piguet" class="input">
                    <span>Marca</span>
                </label>

                <label>
                    <input type="text" placeholder="Royal Oak Selfwinding" class="input">
                    <span>Modelo</span>
                </label>

                <label>
                    <input type="text" placeholder="Acero inoxidable 316L" class="input">
                    <span>Material Reloj</span>
                </label>

                <label>
                    <input type="text" placeholder="Acero inoxidable" class="input">
                    <span>Material Pulsera</span>
                </label>

                <label>
                    <input type="text" placeholder="Zafiro" class="input">
                    <span>Cristal</span>
                </label>

                <label>
                    <input type="text" placeholder="Suizos: ETA, Ronda, Selita" class="input">
                    <span>Mecanismos de Movimiento</span>
                </label>

                <label>
                    <input type="text" placeholder="dd-mm-yyyy" class="input">
                    <span>Año Fabricación</span>
                </label>
            </div>

            <!-- FORMULARIO ROPA -->
            <div class="cat-ropa ocultar">
                <label>
                    <input type="text" placeholder="Channel" class="input">
                    <span>Marca</span>
                </label>

                <label>
                    <input type="text" placeholder="Algodon" class="input">
                    <span>Tipo de Tela</span>
                </label>

                <label>
                    <input type="text" placeholder="XS, S, M, L, XL" class="input">
                    <span>Disponibilidad de talla/s</span>
                </label>

                <label>
                    <select name="" id="" class="input">
                        <option value="Unisex">Unisex</option>
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                    </select>
                    <span>Genero</span>
                </label>
            </div>

            <input class="upgrade-img" type="file" name="imagenes[]" multiple required>

            <!-- <label>
                <textarea required="required" rows="3" class="input01"></textarea>
                <span>Modelo</span>
            </label> -->

            <!-- <label>
                <select name="" id="" class="inputSelected">
                    <option value="Barranquilla">Barranquilla</option>
                    <option value="Bogota">Bogotá</option>
                    <option value="Medellín">Medellín</option>
                    <option value="Cali">Cali</option>
                    <option value="Cartagena">Cartagena</option>
                    <option value="Santa Marta">Santa Marta</option>
                    <option value="Cúcuta">Cúcuta</option>
                    <option value="Bucaramanga">Bucaramanga</option>
                    <option value="Pereira">Pereira</option>
                    <option value="Villavicencio">Villavicencio</option>
                    <option value="Ibagué">Ibagué</option>
                    <option value="Pasto">Pasto</option>
                    <option value="Montería">Montería</option>
                    <option value="Manizales">Manizales</option>
                    <option value="Valledupar">Valledupar</option>
                    <option value="Riohacha">Riohacha</option>
                    <option value="Popayán">Popayán</option>
                    <option value="Tunja">Tunja</option>
                    <option value="Neiva">Neiva</option>
                    <option value="Sincelejo">Sincelejo</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Buenaaventura">Buenaaventura</option>
                    <option value="Florencia">Florencia</option>
                    <option value="Yopal">Yopal</option>
                    <option value="Tumaco">Tumaco</option>
                    <option value="Quibdó">Quibdó</option>
                    <option value="Leticia">Leticia</option>
                    <option value="Zipaquirá">Zipaquirá</option>
                    <option value="Palmira">Palmira</option>
                    <option value="Barrancabermeja">Barrancabermeja</option>
                    <option value="San José Del Guaviare">San José Del Guaviare</option>
                    <option value="Ipiales">Ipiales</option>
                    <option value="Mocoa">Mocoa</option>
                    <option value="Duitama">Duitama</option>
                    <option value="Soacha">Soacha</option>
                    <option value="Buga">Buga</option>
                    <option value="Arauca">Arauca</option>
                    <option value="Puerto Carreño">Puerto Carreño</option>
                    <option value="Inirída">Inirída</option>
                    <option value="Mitú">Mitú</option>
                    <option value="Tuluá">Tuluá</option>
                    <option value="Turbo">Turbo</option>
                    <option value="San Gil">San Gil</option>
                    <option value="Soledad">Soledad</option>
                    <option value="Floridablanca">Floridablanca</option>
                    <option value="Maicao">Maicao</option>
                    <option value="Envigado">Envigado</option>
                    <option value="Pamplona">Pamplona</option>
                    <option value="Girardot">Girardot</option>
                    <option value="Fusagasugá">Fusagasugá</option>
                    <option value="Apartadó">Apartadó</option>
                </select>
            </label> -->

            <button class="fancy" href="#">
                <span class="top-key"></span>
                <span class="text">Registrar</span>
                <span class="bottom-key-1"></span>
                <span class="bottom-key-2"></span>
            </button>
        </form>

    </section>

    <script>
        var select = document.getElementById("categoria");
        var divReloj = document.querySelector(".cat-reloj");
        var divRopa = document.querySelector(".cat-ropa");

        select.addEventListener("change", function () {
            var valorSeleccionado = select.options[select.selectedIndex].value;

            if (valorSeleccionado == "Reloj") {
                divReloj.classList.remove("ocultar");
                divRopa.classList.add("ocultar");
            } else if (valorSeleccionado === "Ropa") {
                divReloj.classList.add("ocultar");
                divRopa.classList.remove("ocultar");
            } else{
                divRopa.classList.add("ocultar");
                divReloj.classList.add("ocultar");
            }
        });
    </script>
</body>
</html>