<?php

session_start();

// if(isset($_SESSION['usuario'])) { // $_SESSION es una variable superglobal que nos permite acceder a las variables de sesión, en este caso si existe la variable de sesión usuario, redirigimos a contenidoMostrar.php
//     header('Location: verificarSesion.php');
// }

if($_SERVER['REQUEST_METHOD'] == 'POST') {// $_SERVER['REQUEST_METHOD'] es una variable superglobal que nos permite saber si el usuario esta enviando datos por el metodo POST o GET
    $nombre = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);// filter_var() es una función que nos permite filtrar datos, en este caso el nombre de usuario, y strtolower() es una función que nos permite convertir el nombre de usuario a minúsculas.y filter_SANITIZE_STRING es una constante que nos permite filtrar el nombre de usuario para que no tenga caracteres especiales.
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $edad = $_POST['edad'];
    $nombreContacto = "Alfonso";
    $telefonoContacto = "1234567890";
    $idMembresia = $_SESSION['membresia'];
    $contraseña = $_POST['password'];
    $matricula = "2023-7";


    $errores = '';

    if(empty($nombre)  or empty($contraseña)){
        $errores .=  '<li>Por favor rellena todos los datos correctamente</li>';
    }
    else {
        try {
            $conexion = new PDO('mysql:host=localhost; dbname=sistema_gimnasio', 'root', '');// PDO es una clase que nos permite conectarnos a la base de datos
            
            
        } catch (Exception $e) {// exception es una clase que nos permite manejar errores $e es una variable que nos permite acceder a la clase exception
            echo "Error: " . $e->getMessage();
        }

        // $statement = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1");// :usuario es un marcador de posición que nos permite pasarle el nombre de usuario a la consulta

        // $statement->execute(array(':usuario' => $usuario));//array es una función que nos permite crear un arreglo con los datos que le pasemos como parámetro
            
        // $resultado = $statement->fetch();// fetch es un método de la clase PDOStatement que nos permite obtener el resultado de la consulta

        // if($resultado != false) {
        //     $errores .= '<li>El usuario ya existe !porfavor escriba otro usuario!</li>';
        // }

        // $contraseña = hash('sha512', $contraseña);// hash es una función que nos permite encriptar la contraseña

        // $Rcontraseña = hash('sha512', $Rcontraseña);

        // if($contraseña != $Rcontraseña) {
        //     $errores .= '<li>Las contraseñas no son iguales</li>';
        // }
    }


    if ($errores == '') {
        if($idMembresia == "1"){
            echo "entrado para insertar";
            $statement = $conexion->prepare("INSERT INTO miembros (id, matricula, nombre, telefono, direccion, edad, sufreEnfermedad, tieneSeguro, enfermedad, institucion, nombreContacto, telefonoContacto, imagen, estado, fechaRegistro, fechaInicio, fechaFin, idMembresia) VALUES (null, :matricula,:nombre, :telefono, :direccion, :edad, 0, 0,'no','no','eusebio','7323288','/imagenes/usuario.png','ACTIVO', NOW(), NOW(), DATE_ADD(NOW(), INTERVAL 1 MONTH), :idMembresia)");// null es un valor que se le pasa al id para que se autoincremente
    
            
            // metemos en un arreglo los datos que le pasaremos a la consulta para que no se puedan inyectar datos
            $statement->execute(array(
                ':matricula' => $matricula,
                ':nombre' => $nombre,
                ':telefono' => $telefono,
                ':direccion' => $direccion,
                ':edad' => $edad,
                ':idMembresia' => $idMembresia,
            ));
    
            $statement = $conexion->prepare("INSERT INTO usariosclientes (id, usuario, passwordd) VALUES (null, :usuario, :passwordd)");// null es un valor que se le pasa al id para que se autoincremente
    
            $statement->execute(array(
                ':usuario' => $nombre,
                ':passwordd' => $contraseña,
            ));
    
            header('Location: registro_usuario_mostrar.php');
        }
        else{
            echo "entrado para insertar";
            $statement = $conexion->prepare("INSERT INTO miembros (id, matricula, nombre, telefono, direccion, edad, sufreEnfermedad, tieneSeguro, enfermedad, institucion, nombreContacto, telefonoContacto, imagen, estado, fechaRegistro, fechaInicio, fechaFin, idMembresia) VALUES (null, :matricula,:nombre, :telefono, :direccion, :edad, 0, 0,'no','no','eusebio','7323288','/imagenes/usuario.png','ACTIVO', NOW(), NOW(), DATE_ADD(NOW(), INTERVAL 1 YEAR), :idMembresia)");// null es un valor que se le pasa al id para que se autoincremente
    
            
            // metemos en un arreglo los datos que le pasaremos a la consulta para que no se puedan inyectar datos
            $statement->execute(array(
                ':matricula' => $matricula,
                ':nombre' => $nombre,
                ':telefono' => $telefono,
                ':direccion' => $direccion,
                ':edad' => $edad,
                ':idMembresia' => $idMembresia,
            ));
    
            $statement = $conexion->prepare("INSERT INTO usariosclientes (id, usuario, passwordd) VALUES (null, :usuario, :passwordd)");// null es un valor que se le pasa al id para que se autoincremente
    
            $statement->execute(array(
                ':usuario' => $nombre,
                ':passwordd' => $contraseña,
            ));
    
            header('Location: registro_usuario_mostrar.php');
        }



    }
}

    // require 'registro_usuario_mostrar.php';


?>