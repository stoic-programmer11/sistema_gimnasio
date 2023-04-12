<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
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
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p style="font-size: 14px"><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Salir</a>
      </header>
      <div class="search">
        <span class="text">Seleccionar entrenador para chatear</span>
        <input type="text" placeholder="Buscar entrenador...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>
