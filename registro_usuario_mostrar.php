<?php
session_start();
if (isset($_POST['membresia'])) {
  $mi_membresia = $_POST['membresia'];
  $_SESSION['membresia'] = $mi_membresia;
  echo $_SESSION['membresia'];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pagina De Pago</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link rel="stylesheet" href="css/estilo.css" />
    
  </head>
  <body>
    <header class="header">
      <a href="#" class="logo"> <span>SHAPE</span>FIT </a>
    
      <div id="menu-btn" class="fas fa-bars"></div>
    
      <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#features">Beneficios</a>
        <a href="#pricing">Precios</a>
        <a href="#trainers">Entrenadores</a>
        <a href="#blogs">Blogs</a>
      </nav>
    </header>
    <div class="container">
      <div class="signin-signup">
        <form action="inicio_sesion.php" class="sign-in-form" method="post">
          <h2 class="title">Inicir Sesion</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="usuario"  required/>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password"  required/>
          </div>
          <input type="submit" value="Login" class="btn" />
          <p class="social-text">O Iniciar sesión con plataformas sociales</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
          <br>  
          <h2 class="textoError"> 
          <?php
          if(!empty($_SESSION['error_login'])){
            echo $_SESSION['error_login'];
          }
          ?>
          </h2>
          <p class="account-text">Ya tienes una cuenta?<a href="#" id="sign-up-btn2">Inscribirse</a></p>

        </form>
        <form action="registro_usuario.php" class="sign-up-form" method="post" >
          <h2 class="title">Registrarse</h2>
          <!-- nombre -->
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Nombre usuario" name="usuario" id="nombre" required/>
          </div>
          <!-- telefono -->
          <div class="input-field">
            <i class="fas fa-phone"></i>
            <input type="number" placeholder="Telefono" name="telefono" id="telefono" required/>
          </div>
          <!-- direccion -->
          <div class="input-field">
            <i class="fas fa-map-marker-alt"></i>
            <input type="text" placeholder="Direccion" name="direccion" id="direccion" required/>
          </div>
          <!-- edad -->
          <div class="input-field">
            <i class="fas fa-calendar-alt"></i>
            <input type="text" placeholder="Edad" name="edad" id="edad" required/>
          </div>

          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" required/>
          </div>
          <input type="submit" class="btn" value="Sign up" />
          <p class="social-text">O Iniciar sesión con plataformas sociales</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
          
          <p class="account-text">no tengo una cuenta?<a href="#" id="sign-up-btn2">Registrarse</a></p>
        </form>
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Ya tienes cuenta?</h3>
            <p>
              Inicia sesion para poder comprar nuestras membresias
              aqui en el boton de abajo
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign up
            </button>
          </div>
          <img src="images/signin.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>No tienes cuenta aun?</h3>
            <p>
              Registrate para poder comprar nuestras membresias
              aqui en el boton de abajo
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign in
            </button>
          </div>
          <img src="images/signup.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    <script src="js/app.js"></script>
  </body>
</html>
