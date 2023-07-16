
<?php

    session_start();

    if(isset($_SESSION['LOGIN'])){
        if($_SESSION['LOGIN'] == "ok"){
            $user = $_SESSION['nombre_usuario'];
        }
    }

?>
        
        <div class="menu">
            <div class="logo">
                <a href="./">
                    <img src="./assets/img/logo.svg" alt="">
                </a>
            </div>
            <div class="menu-content">
                <nav>
                    <ul>

                        <li><a href="./categorias"> Categorias </a></li>
                        <?php 
                            if(isset($_SESSION['LOGIN']) && $_SESSION['LOGIN'] == "ok"){
                                echo '<li class="mi-cuenta">
                                        <a href="#">
                                            Mi Cuenta
                                            <div class="opciones-login">
                                                <br>
                                                <span style="color:#000;">Hola, <br> '.$user.'</span>
                                                <div class="sep" style="margin-top: 10px;"></div>
                                                <a style="color: #000;" href="../MiPerfil">Perfil</a>
                                                <a style="color: #000;" href="../MisCompras">Mis Compras</a>
                                                <div class="sep"></div>
                                                <a style="color: #000;" href="../pages/logout">Cerrar Sesión</a>
                                            </div>
                                        </a>
                                    </li>';
                            } else{
                                echo '<li><a href="../login"> Ingresar </a></li>
                                    <li><a href="../MisCompras"> Mis compras </a></li>';
                            }
                        ?>

                        <?php 
                            if(isset($_SESSION['LOGIN']) && $_SESSION['LOGIN'] == "ok"){
                                if($user == 'RogerOFG' || $user == 'Jaime'){ 
                                    echo '<li><a href="../panel/panel"> Panel </a></li>';
                                }
                            }
                        ?>
                        <li>
                            <a href="./cart"> 
                                <i class="bi bi-cart" style="font-size: 18px;">
                                    <div class="carrito">

                                        <div class="carrito-centro">
                                            <div class="cart-img">
                                                <img src="./assets/img/Audemars-Piguet.jpg" alt="">
                                            </div>
                                            <span class="cart-name">Reloj Audemars Piguet</span>
                                            <span class="cart-precio">COP500.000</span>
                                        </div>

                                        <div class="carrito-centro">
                                            <div class="cart-img">
                                                <img src="./assets/img/Patek-Philippe.jpg" alt="">
                                            </div>
                                            <span class="cart-name">Reloj Patek Philippe</span>
                                            <span class="cart-precio">COP600.000</span>
                                        </div>

                                        <div class="carrito-centro">
                                            <div class="cart-img">
                                                <img src="./assets/img/Rolex.jpg" alt="">
                                            </div>
                                            <span class="cart-name">Reloj Rolex</span>
                                            <span class="cart-precio">COP1.000.000</span>
                                        </div>

                                    </div>
                                    <div class="num">3</div>
                                </i> 
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
