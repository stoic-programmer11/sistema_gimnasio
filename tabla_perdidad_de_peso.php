<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Entrenador Personal</title>

  <!-- FUENTES -->
  <script src="https://kit.fontawesome.com/4607825de5.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


  <!-- CSS  -->
  <link rel="stylesheet" href="./css/styleHorariosPlanes.css">
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
                  Alimentacion Dia Lunes
                </div>
                <div class="sub_title">
                  10-04-2023
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
                  Rutina de Entrenamiento Lunes
                </div>
                <div class="sub_title">
                  10-04-2023
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
                  Alimentacion Dia Martes
                </div>
                <div class="sub_title">
                  11-04-2023
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
                  Rutina de Entrenamiento Martes
                </div>
                <div class="sub_title">
                  11-04-2023
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
                  Alimentacion Dia Miercoles
                </div>
                <div class="sub_title">
                  12-04-2023
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
      <h2>Plan de Alimentación</h2>
    </div>
    <video autoplay loop muted class="video-principal">
      <source src="videos/pexels-vanessa-loring-5866268.mp4">
    </video>
  </div>
  <!-- TABLAS DIETA -->
  <h1 class="titulo-horario">Horario de Alimentación</h1>
  <div class="contenedor-tabla">
    <div class="tabla-comidas">
      <table>
        <tr>
          <th class="dias-dieta">Hora del día</th>
          <th class="dias-dieta">Lunes</th>
          <th class="dias-dieta">Martes</th>
          <th class="dias-dieta">Miércoles</th>
          <th class="dias-dieta">Jueves</th>
          <th class="dias-dieta">Viernes</th>
          <th class="dias-dieta">Sábado</th>
          <th class="dias-dieta">Domingo</th>
        </tr>
        <tr>
          <td>7:00 am</td>
          <td>Batido de proteína con espinacas y frutas</td>
          <td>Huevos revueltos con verduras</td>
          <td>Tostada de pan integral con aguacate y tomate</td>
          <td>Batido de proteína con espinacas y frutas</td>
          <td>Huevos revueltos con verduras</td>
          <td>Tostada de pan integral con aguacate y tomate</td>
          <td>Batido de proteína con espinacas y frutas</td>
        </tr>
        <tr>
          <td>10:00 am</td>
          <td>Yogurt griego con nueces y frutas frescas</td>
          <td>Batido de proteína con frutas y espinacas</td>
          <td>Frutas frescas con queso cottage</td>
          <td>Yogurt griego con nueces y frutas frescas</td>
          <td>Batido de proteína con frutas y espinacas</td>
          <td>Frutas frescas con queso cottage</td>
          <td>Yogurt griego con nueces y frutas frescas</td>
        </tr>
        <tr>
          <td>1:00 pm</td>
          <td>Ensalada de pollo a la parrilla con vinagreta balsámica</td>
          <td>Ensalada de atún con aguacate y aceitunas</td>
          <td>Pechuga de pavo asada con ensalada verde</td>
          <td>Ensalada de pollo a la parrilla con vinagreta balsámica</td>
          <td>Ensalada de atún con aguacate y aceitunas</td>
          <td>Pechuga de pavo asada con ensalada verde</td>
          <td>Ensalada de pollo a la parrilla con vinagreta balsámica</td>
        </tr>
        <tr>
          <td>4:00 pm</td>
          <td>Batido de proteína con espinacas y frutas</td>
          <td>Palitos de zanahoria con hummus</td>
          <td>Manzana con mantequilla de almendras</td>
          <td>Batido de proteína con espinacas y frutas</td>
          <td>Palitos de zanahoria con hummus</td>
          <td>Manzana con mantequilla de almendras</td>
          <td>Batido de proteína con espinacas y frutas</td>
        </tr>
        <tr>
          <td>7:00 pm</td>
          <td>Salmón al orno con espárragos</td>
          <td>Pechuga de pollo a la parrilla con brócoli al vapor</td>
          <td>Chuletas de cerdo asadas con ensalada verde</td>
          <td>Tilapia al horno con verduras al vapor</td>
          <td>Ensalada de salmón con espinacas y tomate</td>
          <td>Pechuga de pavo asada con ensalada verde</td>
          <td>Salmón al horno con espárragos</td>

        </tr>
        <tr>
          <td>10:00 pm</td>
          <td>Batido de proteína con leche de almendras y frutas</td>
          <td>Yogurt griego con frutas y nueces</td>
          <td>Té de hierbas o agua con limón</td>
          <td>Batido de proteína con leche de almendras y frutas</td>
          <td>Yogurt griego con frutas y nueces</td>
          <td>Té de hierbas o agua con limón</td>
          <td>Batido de proteína con leche de almendras y frutas</td>
        </tr>
      </table>
    </div>
  </div>


  <!-- GALERIA DE IMAGENES -->
  <h1>Menú de la Semana</h1>

  <div class="barra-botones">

    <button class="filter-button" data-filter="all">Todos</button>
    <button class="filter-button" data-filter="lunes">Lunes</button>
    <button class="filter-button" data-filter="martes">Martes</button>
    <button class="filter-button" data-filter="miercoles">Miércoles</button>
    <button class="filter-button" data-filter="jueves">Jueves</button>
    <button class="filter-button" data-filter="viernes">Viernes</button>
    <button class="filter-button" data-filter="sabado">Sábado</button>
    <button class="filter-button" data-filter="domingo">Domingo</button>
  </div>

  <div class="gallery">
    <div class="gallery-item-img all lunes">
      <img src="images/batido_espinaca.jpg">
      <p class="text-image">Batido de espinaca</p>
    </div>
    <div class="gallery-item-img all lunes">
      <img src="images/yogur_griego.jpg">
      <p class="text-image">Yogurt Griego con Nueces</p>
    </div>
    <div class="gallery-item-img all lunes">
      <img src="images/ensalada_de_pollo.png">
      <p class="text-image">Ensalada de Pollo a la parrilla</p>
    </div>

    <div class="gallery-item-img all martes">
      <img src="images/huevos_revueltos_con_vereduras.jpg">
      <p class="text-image">Huevos Revueltos con Verduras</p>
    </div>
    <div class="gallery-item-img all martes">
      <img src="images/palitos_de_zanahoria_con_humus.jpg">
      <p class="text-image">Palitos de Zanahoria con Humus</p>
    </div>
    <div class="gallery-item-img all martes">
      <img src="images/pechuga_de_pollo_a_la_parrilla_brocoli_al_vapor.webp">
      <p class="text-image">Pechuga De Pollo A La Parrilla Con Brócoli Al Vapor</p>
    </div>

    <div class="gallery-item-img all miercoles">
      <img src="images/tostada_con_palta.jpg">
      <p class="text-image">Tostada De Pan Integral Con Aguacate Y Tomate</p>
    </div>
    <div class="gallery-item-img all miercoles">
      <img src="images/manzana_con_crema_de_almendras.jpeg">
      <p class="text-image">Manzana Con Mantequilla De Almendras</p>
    </div>
    <div class="gallery-item-img all miercoles">
      <img src="images/te_de_hierbas.jpg">
      <p class="text-image">Té De Hierbas</p>
    </div>

    <div class="gallery-item-img all jueves">
      <img src="images/Batido De Proteína Con Espinacas Y Frutas.avif">
      <p class="text-image">Batido De Proteína Con Espinacas Y Frutas</p>
    </div>
    <div class="gallery-item-img all jueves">
      <img src="images/tolapia_al_horno.jpg">
      <p class="text-image">Tilapia Al Horno Con Verduras Al Vapor</p>
    </div>
    <div class="gallery-item-img all jueves">
      <img src="images/ensalada_de_pollo_a_la_parrilla.png">
      <p class="text-image">Ensalada De Pollo A La Parrilla Con Vinagreta Balsámica</p>
    </div>

    <div class="gallery-item-img all viernes">
      <img src="images/huevos_revueltos_con_vereduras.jpg">
      <p class="text-image">Huevos Revueltos Con Verduras</p>
    </div>
    <div class="gallery-item-img all viernes">
      <img src="images/Ensalada De Atún Con Aguacate Y Aceitunas.jpg">
      <p class="text-image">Ensalada De Atún Con Aguacate Y Aceitunas</p>
    </div>
    <div class="gallery-item-img all viernes">
      <img src="images/Yogurt Griego Con Frutas Y Nueces.jpeg">
      <p class="text-image">Yogurt Griego Con Frutas Y Nueces</p>
    </div>

    <div class="gallery-item-img all sabado">
      <img src="images/Frutas Frescas Con Queso Cottage.jpg">
      <p class="text-image">Frutas Frescas Con Queso Cottage</p>
    </div>
    <div class="gallery-item-img all sabado">
      <img src="images/Pechuga De Pavo Asada Con Ensalada Verde.avif">
      <p class="text-image">Pechuga De Pavo Asada Con Ensalada Verde</p>
    </div>
    <div class="gallery-item-img all sabado">
      <img src="images/Yogurt Griego Con Frutas Y Nueces.jpeg">
      <p class="text-image">Yogurt Griego Con Frutas Y Nueces</p>
    </div>

    <div class="gallery-item-img all domingo">
      <img src="images/Batido De Proteína Con Espinacas Y Frutas.avif">
      <p class="text-image">Batido De Proteína Con Espinacas Y Frutas</p>
    </div>
    <div class="gallery-item-img all domingo">
      <img src="images/ensalada_de_pollo_a_la_parrilla.png">
      <p class="text-image">Ensalada De Pollo A La Parrilla Con Vinagreta Balsámica</p>
    </div>
    <div class="gallery-item-img all domingo">
      <img src="images/Salmón Al Horno Con Espárragos.jpg">
      <p class="text-image">Salmón Al Horno Con Espárragos</p>
    </div>

  </div>




  <!-- footer section starts  -->

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
</body>

</html>