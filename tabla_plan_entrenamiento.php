<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Entrenador Personal</title>

  <!-- FUENTES -->
  <!-- // necesario -->
  <script src="https://kit.fontawesome.com/4607825de5.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


  <!-- CSS  -->
  <link rel="stylesheet" href="./css/styleHorariosPlanes.css" />
</head>

<body>


  <!-- HEADER      -->

  <header class="header">
    <a href="#" class="logo"> <span>BE</span>FIT </a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
      <a href="#home">home</a>
      <a href="#about">about</a>
      <a href="#features">Beneficios</a>
      <a href="#pricing">Precios</a>
      <a href="#trainers">Entrenadores</a>
      <a href="#blogs">Blogs</a>
    </nav>

    <div class="navbar_right">
      <div class="notifications not-campana">
        <div class="icon_wrap boton-notificaciones"><i class="far fa-bell"></i></div>

        <div class="notification_dd">
          <ul class="notification_ul">
            <li class="starbucks success notificacion-individual">
              <div class="notify_icon">
                <img class="icon icon-a" src="./notification_images/icono-alimentacion.png"></img>
              </div>
              <div class="notify_data">
                <div class="title">
                  Lorem, ipsum dolor.
                </div>
                <div class="sub_title">
                  Lorem ipsum dolor sit amet
                </div>
              </div>
              <div class="notify_status">
                <img src="./notification_images/success-icon.png" alt="" class="check-icon">
                <img src="./notification_images/failed-icon.png" alt="" class="check-icon">
              </div>
            </li>
            <li class="baskin_robbins failed notificacion-individual">
              <div class="notify_icon">
                <img class="icon icon-e" src="./notification_images/icono-ejercicio.png"></img>
              </div>
              <div class="notify_data">
                <div class="title">
                  Lorem, ipsum dolor.
                </div>
                <div class="sub_title">
                  Lorem ipsum dolor sit amet
                </div>
              </div>
              <div class="notify_status">
                <img src="./notification_images/success-icon.png" alt="" class="check-icon">
                <img src="./notification_images/failed-icon.png" alt="" class="check-icon">
              </div>
            </li>
            <li class="mcd success notificacion-individual">
              <div class="notify_icon">
                <img class="icon icon-a" src="./notification_images/icono-alimentacion.png"></img>
              </div>
              <div class="notify_data">
                <div class="title">
                  Lorem, ipsum dolor.
                </div>
                <div class="sub_title">
                  Lorem ipsum dolor sit amet
                </div>
              </div>
              <div class="notify_status">
                <img src="./notification_images/success-icon.png" alt="" class="check-icon">
                <img src="./notification_images/failed-icon.png" alt="" class="check-icon">
              </div>
            </li>
            <li class="pizzahut failed notificacion-individual">
              <div class="notify_icon">
                <img class="icon icon-e" src="./notification_images/icono-ejercicio.png"></img>

              </div>
              <div class="notify_data">
                <div class="title">
                  Lorem, ipsum dolor.
                </div>
                <div class="sub_title">
                  Lorem ipsum dolor sit amet
                </div>
              </div>
              <div class="notify_status">
                <img src="./notification_images/success-icon.png" alt="" class="check-icon">
                <img src="./notification_images/failed-icon.png" alt="" class="check-icon">
              </div>
            </li>
            <li class="kfc success notificacion-individual">
              <div class="notify_icon">
                <img class="icon icon-a" src="./notification_images/icono-alimentacion.png"></img>

              </div>
              <div class="notify_data">
                <div class="title">
                  Lorem, ipsum dolor.
                </div>
                <div class="sub_title">
                  Lorem ipsum dolor sit amet
                </div>
              </div>
              <div class="notify_status">
                <img src="./notification_images/success-icon.png" alt="" class="check-icon">
                <img src="./notification_images/failed-icon.png" alt="" class="check-icon">
              </div>
            </li>
            <!-- <li class="show_all notificacion-individual">
              <p class="link">Show All Activities</p>
            </li> -->
          </ul>
        </div>

      </div>
      <div class="profile perfil-derecho">
        <div class="icon_wrap barra-perfil">
          <img src="./notification_images/profile_pic.png" alt="profile_pic">
          <span class="name">Simon</span>
          <i class="fas fa-chevron-down"></i>
        </div>

        <div class="profile_dd">
          <ul class="profile_ul">
            <li class="profile_li"><a class="profile" href="#"><span class="picon icono-menu-flotante"><i class="fas fa-user-alt"></i>
                </span>Profile</a>
              <div class="btn">My Account</div>
            </li>
            <li><a class="address" href="#"><span class="picon icono-menu-flotante"><i class="fas fa-map-marker"></i></span>Address</a></li>
            <li><a class="settings" href="#"><span class="picon icono-menu-flotante"><i class="fas fa-cog"></i></span>Settings</a></li>
            <li><a class="logout" href="./PaginaInicio.php"><span class="picon icono-menu-flotante"><i class="fas fa-sign-out-alt"></i></span>Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <!-- header section ends     -->

  <!-- PARTE DEL VIDEO -->
  <div class="contenedor-video">
    <div class="texto-video">
      <h2>Plan de entrenamiento</h2>
    </div>
    <video autoplay loop muted>
      <source src="videos/production ID_4065388.mp4">
    </video>
  </div>
  <!-- TABLAS DIETA -->
  <h1>Dias de entrenamiento</h1>
  <div class="contenedor-tabla">
    <div class="tabla-entrenamiento">
      <table>
        <thead>
          <tr>
            <th class="dias-entrenamiento">Región muscular/músculo</th>
            <th class="dias-entrenamiento">Lunes</th>
            <th class="dias-entrenamiento">Martes</th>
            <th class="dias-entrenamiento">Miércoles</th>
            <th class="dias-entrenamiento">Jueves</th>
            <th class="dias-entrenamiento">Viernes</th>
            <th class="dias-entrenamiento">Sábado</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Pectorales</td>
            <td>Press de banca</td>
            <td>Fondos</td>
            <td>Aperturas con mancuernas</td>
            <td>Press inclinado</td>
            <td>Cruce de cables</td>
            <td>Flexiones con agarre cerrado</td>
          </tr>
          <tr>
            <td>Espalda</td>
            <td>Dominadas</td>
            <td>Remo con mancuernas</td>
            <td>Remo con barra</td>
            <td>Pull-ups</td>
            <td>Remo invertido</td>
            <td>Jalones al pecho</td>
          </tr>
          <tr>
            <td>Hombros</td>
            <td>Press militar</td>
            <td>Elevaciones laterales</td>
            <td>Elevaciones frontales</td>
            <td>Pájaros</td>
            <td>Press arnold</td>
            <td>Press con mancuernas</td>
          </tr>
          <tr>
            <td>Bíceps</td>
            <td>Curl con mancuernas</td>
            <td>Curl con barra</td>
            <td>Martillo con mancuernas</td>
            <td>Curl con cable</td>
            <td>Curl con barra Z</td>
            <td>Curl concentrado con mancuernas</td>
          </tr>
          <tr>
            <td>Tríceps</td>
            <td>Extensiones de tríceps con mancuernas</td>
            <td>Fondos en paralelas</td>
            <td>Press francés con mancuernas</td>
            <td>Extensiones de tríceps en polea alta</td>
            <td>Patada de burro con mancuernas</td>
            <td>Press de banca cerrado</td>
          </tr>
          <tr>
            <td>Piernas</td>
            <td>Sentadillas con barra</td>
            <td>Prensa de piernas</td>
            <td>Curl de piernas acostado</td>
            <td>Zancadas con mancuernas</td>
            <td>Extensión de piernas en máquina</td>
            <td>Elevación de talones con mancuernas</td>
          </tr>
          <tr>
            <td>Abdominales</td>
            <td>Abdominales en bicicleta</td>
            <td>Crunches</td>
            <td>Plancha lateral</td>
            <td>Levantamiento de piernas colgado</td>
            <td>Abdominales con rueda de abdominales</td>
            <<td>Plancha abdominal con elevación de piernas</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>


  <!-- GALERIA DE VIDEOS -->
  <h1>Rutinas de entrenamiento</h1>

  <div class="barra-botones">

    <button class="filter-button" data-filter="all">Todos</button>
    <button class="filter-button" data-filter="lunes">Lunes</button>
    <button class="filter-button" data-filter="martes">Martes</button>
    <button class="filter-button" data-filter="miercoles">Miércoles</button>
    <button class="filter-button" data-filter="jueves">Jueves</button>
    <button class="filter-button" data-filter="viernes">Viernes</button>
    <button class="filter-button" data-filter="sabado">Sábado</button>
  </div>

  <div class="gallery">

    <div class="gallery-item all lunes video-rutina">
      <h3 class="txt-video">Rutina Pectorales</h3>
      <video controls>
        <source src="videos/pectorales.mp4">
      </video>
    </div>

    <div class="gallery-item all martes video-rutina">
      <h3 class="txt-video">Rutina Espalda</h3>
      <video controls>
        <source src="videos/espalda.mp4">
      </video>
    </div>

    <div class="gallery-item all miercoles video-rutina">
      <h3 class="txt-video">Rutina Hombros</h3>
      <video controls>
        <source src="videos/hombros.mp4">
      </video>
    </div>

    <div class="gallery-item all jueves video-rutina">
      <h3 class="txt-video">Rutina Bíceps</h3>
      <video controls>
        <source src="videos/biceps.mp4">
      </video>
    </div>


    <div class="gallery-item all viernes video-rutina">
      <h3 class="txt-video">Rutina Tríceps</h3>
      <video controls>
        <source src="videos/triceps.mp4">
      </video>
    </div>

    <div class="gallery-item all sabado video-rutina">
      <h3 class="txt-video">Rutina Piernas</h3>
      <video controls>
        <source src="videos/piernas.mp4">
      </video>
    </div>

    <div class="gallery-item all domingo video-rutina">
      <h3 class="txt-video">Rutina Abdominales</h3>
      <video controls>
        <source src="videos/abdominales.mp4">
      </video>

    </div>
  </div>

  <section class="footer">
    <div class="box-container">
      <div class="box">
        <h3>Enlaces</h3>
        <a class="links" href="#home">home</a>
        <a class="links" href="#about">about</a>
        <a class="links" href="#features">Beneficios</a>
        <a class="links" href="#pricing">Precios</a>
        <a class="links" href="#trainers">Entrenadores</a>
        <a class="links" href="#blogs">blogs</a>
      </div>

      <div class="box">
        <h3>Horarios</h3>
        <p>Lunes : <i> 7:00am - 10:30pm </i></p>
        <p>Martes : <i> 7:00am - 10:30pm </i></p>
        <p>Miércoles : <i> 7:00am - 10:30pm </i></p>
        <p>Jueves : <i> 7:00am - 10:30pm </i></p>
        <p>Viernes : <i> 7:00am - 10:30pm </i></p>
        <p>Sábado : <i> 7:00am - 10:30pm </i></p>
        <p>Domingo : <i> Cerrado </i></p>
      </div>

      <div class="box">
        <h3>Contáctanos</h3>
        <p><i class="fas fa-phone"></i> +591-69692192</p>
        <p><i class="fas fa-envelope"></i> simonchumacero26@gmail.com</p>
        <p><i class="fas fa-map"></i> Sucre-Bolivia</p>
        <div class="share">
          <a href="#" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-linkedin"></a>
          <a href="#" class="fab fa-pinterest"></a>
        </div>
      </div>

      <div class="box">
        <h3>newsletter</h3>
        <p>Suscribete para recibir las últimas novedades</p>
        <form action="">
          <input type="email" name="" class="email" placeholder="Ingresa tu correo" id="" />
          <input type="submit" value="Suscríbete" class="btn" />
        </form>
      </div>
    </div>
  </section>

  <div class="credit">
    Creado por <span>Grupo 2</span> | Derechos Reservados!
  </div>

  <!-- footer section ends -->
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <!-- custom js file link  -->
  <script src="js/scriptPlanesO.js"></script>
  <script src="./js/jquery.js"></script>
  <script src="./js/notificaciones.js"></script>
  <script>
    $(document).ready(function() {
      $(".barra-perfil").click(function() {
        $(".profile_dd").toggle();
      });

      $(".boton-notificaciones").click(function() {
        $(".notification_dd").toggle();
      });

      $(".check-icon").click(function() {
        $(this).closest(".notificacion-individual").remove();
      });
    });
  </script>

  <!-- <script>
  $(document).ready(function() {
    $(".boton-notificaciones").click(function() {
      $(".notification_dd").toggle();
    });
  });
</script> -->

</body>

</html>