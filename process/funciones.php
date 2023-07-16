<?php

require('conexion.php');
session_start();

date_default_timezone_set('America/Bogota');

function setUser($nombre,$correo,$contraseña,$numero_telefono){

    $direccion ="0";
    $ciudad = "0";

    $fecha_actual = date("Y-m-d");
    $cost = 12;

    $hash = password_hash($contraseña, PASSWORD_BCRYPT, ["cost" => $cost]);
    $ip_add = getIp();

	if ($con = conectar()) {
		if (sentencia($con,"INSERT INTO usuario (nombre, correo, pass, cel, direccion, ciudad, fecha_registro, fecha_ultimo_acceso) VALUES ('".$nombre."', '".$correo."', '".$hash."', '".$numero_telefono."', '".$direccion."', '".$ciudad."','".$fecha_actual."' , '".$fecha_actual."' )")) {
		
			echo "Usuario registrado correctamente";
		}else{
			echo "No se registro el usuario";
		}
		desconectar($con);
	}else{
		echo "Error desconocido";
	}
}

function getUser($correo, $contraseña){
    if ($con = conectar()) {
        $consulta = sentencia($con,"SELECT * FROM usuario WHERE correo = '".$correo."'");
        if (contarfilas($consulta)) {
            $datos = traerdatos($consulta);

            $contraseña_hash = $datos['pass'];
            if(password_verify($contraseña, $contraseña_hash)){
                actualizar_fecha_ingreso_usuario($correo);
                $_SESSION['LOGIN'] = "ok";

                $_SESSION['id_usuario'] = $datos['id'];
                $_SESSION['nombre_usuario'] = $datos['nombre'];
                $_SESSION['correo_contacto'] = $datos['correo'];
                $_SESSION['numero_contacto'] = $datos['cel'];

                return true;
            }else{
                $_SESSION['LOGIN'] = "err";
                return false;
            }
        }else{
            echo "Fallo la conexión";
        }
        desconectar($con);
    }

}

function getUserCart($id, $contraseña){
    if ($con = conectar()) {
        $consulta = sentencia($con,"SELECT * FROM carrito WHERE id_user = '".$id."'");
        if (contarfilas($consulta)) {
            $datos = traerdatos($consulta);

            $contraseña_hash = $datos['pass'];
            if(password_verify($contraseña, $contraseña_hash)){
                actualizar_fecha_ingreso_usuario($correo);
                $_SESSION['LOGIN'] = "ok";

                $_SESSION['nombre_usuario'] = $datos['nombre'];
                $_SESSION['correo_contacto'] = $datos['correo'];
                $_SESSION['numero_contacto'] = $datos['cel'];

                return true;
            }else{
                $_SESSION['LOGIN'] = "err";
                return false;
            }
        }else{
            echo "Fallo la conexión";
        }
        desconectar($con);
    }

}

function actualizar_fecha_ingreso_usuario($correo_usuario){
    $fecha_ultimo_acceso = date("Y-m-d"); 

	if ($con = conectar()) {
		sentencia($con,"UPDATE usuario SET fecha_ultimo_acceso = '".$fecha_ultimo_acceso."' WHERE correo = '".$correo_usuario."' ");
		desconectar($con);
	}
}

function getIp() {

    foreach ( [ 'HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR' ] as $key ) {

        // Comprobamos si existe la clave solicitada en el array de la variable $_SERVER 
        if ( array_key_exists( $key, $_SERVER ) ) {

            // Eliminamos los espacios blancos del inicio y final para cada clave que existe en la variable $_SERVER 
            foreach ( array_map( 'trim', explode( ',', $_SERVER[ $key ] ) ) as $ip ) {

                // Filtramos* la variable y retorna el primero que pase el filtro
                if ( filter_var( $ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE ) !== false ) {
                    return $ip;
                }
            }
        }
    }

    return '?'; // Retornamos '?' si no hay ninguna IP o no pase el filtro
} 


?>