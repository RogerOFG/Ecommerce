<?php
require 'funciones.php';

if(isset($_POST['registro_usuario'])){

    $nombre = $_POST['nombre_usuario'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $verificar_contraseña = $_POST['verificar_contraseña']; 

    if($contraseña === $verificar_contraseña){
        setUser($nombre, $correo, $contraseña, $verificar_contraseña);

    }else{
        //Contraseñas no coinciden
    }
}

if(isset($_POST['ingreso_usuario'])){
    echo "ingreso usuario";
    $correo_usuario = $_POST['correo_usuario'];
    $contraseña_usuario = $_POST['contraseña_usuario'];

    if(!empty($correo_usuario) && !empty($contraseña_usuario)){
        if(getUser($correo_usuario, $contraseña_usuario)){
            header('location:/index');
            
        }else{

            //Usuario no existe
            echo "no existe";
        }
    }

}

?>