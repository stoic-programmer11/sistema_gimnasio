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
    <section class="chat-area">
      <header>
        <?php 
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }
        ?>
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="php/images/<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
          <p style="font-size: 14px;"><?php echo $row['status']; ?></p>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Escriba un mensaje aquí..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="javascript/chat.js"></script>

</body>
</html>
