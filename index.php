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
    <section class="form signup">
      <header>Chat Asesoramiento</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nombre</label>
            <input type="text" name="fname" placeholder="Nombre" required>
          </div>
          <div class="field input">
            <label>Apellido</label>
            <input type="text" name="lname" placeholder="Apellido" required>
          </div>
        </div>
        <div class="field input">
          <label>Correo electronico</label>
          <input type="text" name="email" placeholder="Correo electronico" required>
        </div>
        <div class="field input">
          <label>Contranseña</label>
          <input type="password" name="password" placeholder="Contranseña" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Seleccionar imagen</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Ya tienes cuenta? <a href="login.php" style="color: blue;">Iniciar Sesion ahora</a></div>
    </section>
  </div>


  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
