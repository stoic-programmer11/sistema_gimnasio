<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
<header class="header">
      <a href="#" class="logo"> <span>SHAPE</span>FIT </a>

      <div id="menu-btn" class="fas fa-bars"></div>

      
      <ul class="navbar menu">
                        <li><a href="paginaInicioLogueado.php">home</a></li>
                        <li><a href="paginaInicioLogueado.php">about</a></li>
                        <li><a href="paginaInicioLogueado.php">Beneficios</a></li>
                        <li><a href="paginaInicioLogueado.php">Planes</a>
                            <ul class="submenu">
                                <li><a href="tabla_perdidad_de_peso.php">Entrenamiento</a></li>
                                <li><a href="tabla_perdidad_de_peso.php">Nutricional</a></li>
                            </ul>
                        </li>
                        <li><a href="paginaInicioLogueado.php">Entrenadores</a></li>
                        <li><a href="paginaInicioLogueado.php">Blogs</a></li></li>
                        <!-- icono cerrar sesion -->

                        <li class="cerrar-sesion"><a href="PaginaInicio.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>  Cerrar Sesión</a></li>
                    </ul> 
                                  
    </header>
  <div class="wrapper">
    <section class="form login">
      <header>Chat Asesoramiento</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Correo electronico</label>
          <input type="text" name="email" placeholder="Correo electronico" required>
        </div>
        <div class="field input">
          <label>Contraseña</label>
          <input type="password" name="password" placeholder="Contraseña" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Iniciar Chat">
        </div>
      </form>
      <div class="link">No tienes una cuenta? <a href="index.php" style="color: blue;">Registrate ahora</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
