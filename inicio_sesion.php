<?php

session_start();//session_start() es una función que nos permite iniciar una sesión en PHP.

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);//filter_var() es una función que nos permite filtrar datos, en este caso el nombre de usuario, y strtolower() es una función que nos permite convertir el nombre de usuario a minúsculas.y filter_SANITIZE_STRING es una constante que nos permite filtrar el nombre de usuario para que no tenga caracteres especiales.
    $contraseña = $_POST['password'];
    // $contraseña = hash('sha512', $contraseña);// hash es una función que nos permite encriptar la contraseña


    try{
        $conexion = new PDO('mysql:host=localhost; dbname=sistema_gimnasio', 'root', ''); 

    } catch (Exception $e) {// exception es una clase que nos permite manejar errores $e es una variable que nos permite acceder a la clase exception
        echo "Error: " . $e->getMessage();
    }

    $statement = $conexion->prepare('SELECT * FROM usariosclientes WHERE usuario = :usuario AND passwordd = :passwordd');//prepare es un método de la clase PDO que nos permite preparar una consulta SQL y devuelve un objeto PDOStatement.
    $statement->execute(array(':usuario' => $usuario, ':passwordd' => $contraseña));//execute es un método de la clase PDOStatement que nos permite ejecutar una consulta SQL y devuelve un booleano.

    $resultado = $statement->fetch();//fetch es un método de la clase PDOStatement que nos permite obtener una fila de un conjunto de resultados asociado al objeto PDOStatement.

    if($resultado !== false){ 
        // $_SESSION['usuario'] = $usuario;
        
        header('Location: registroTargeta_mostrar.php');
    }else{
        
        $_SESSION['error_login'] = 'Usuario o contraseña incorrectos';
        header('Location: registro_usuario_mostrar.php');
    }
}





?>