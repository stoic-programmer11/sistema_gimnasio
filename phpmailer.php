<?php
// if($_SERVER['REQUEST_METHOD'] != 'POST' ){
//     header("Location: index.html" );
// }

// require 'phpmailer/PHPMailer.php';
// require 'phpmailer/Exception.php';

// use PHPMailer\PHPMailer\PHPMailer;

// $nombre = $_POST['nombre'];
// $email = $_POST['email']; //array assoc - $foto['tmp_name']; $foto['size'] - $foto['name']

// if( empty(trim($nombre)) ) $nombre = 'anonimo';
// // if( empty(trim($apellido)) ) $apellido = '';

// $body = <<<HTML
//     <h1>Contacto desde la web</h1>
//     <p>De: $nombre / $email</p>
//     <h2>Mensaje</h2>
//     $mensaje
// HTML;

// $mailer = new PHPMailer();//objeto de la clase PHPMailer
// $mailer->setFrom( $email, "$nombre " );
// $mailer->addAddress('rodrigorosariocruz765@gmail.com','Sitio web');
// $mailer->Subject = "Mensaje web: $asunto";
// $mailer->msgHTML($body);//cuerpo del mensaje
// $mailer->AltBody = strip_tags($body);//cuerpo del mensaje en texto plano (para clientes de correo que no soportan html) strip_tags - quita las etiquetas html
// $mailer->CharSet = 'UTF-8';

// // if( $foto['size'] > 0 ){
// //     $mailer->addAttachment( $foto['tmp_name'], $foto['name'] );
// // }

// $rta = $mailer->send( );

//var_dump($rta);


// Recupera los datos del formulario
session_start();

$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$producto = $_SESSION['membresia'];

// Configuración del correo electrónico
$para = $correo;
$asunto = 'Confirmación de compra';
$mensaje = "Hola $nombre,\n\nGracias por comprar $producto. Su compra ha sido procesada correctamente.";
$de = 'From: bustamantecarlos323b@gmail.com';

// Envía el correo electrónico


if(mail($para, $asunto, $mensaje, $de)){
    header("Location: registroTargeta.php" );
}else{
    header("Location: registroTargeta.php" );

}



// Recupera los datos del formulari
?>