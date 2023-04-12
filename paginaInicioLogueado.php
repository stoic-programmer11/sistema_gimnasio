<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/styleChat.css">
  <title>Entrenador Personal</title>

  <!-- FUENTES -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <script src="https://kit.fontawesome.com/e342c8a50b.js" crossorigin="anonymous"></script>

  <!-- CSS  -->
  <link rel="stylesheet" href="css/styleHorariosPlanes.css" />
  <!-- <link rel="stylesheet" href="css/style.css" /> -->
</head>

<body>
  <!-- botton acesoramiento -->

  <div class="chatbox-wrapper">
    <div class="chatbox-toggle">
      <img src="images/centro-de-llamadas.png" alt="">
    </div>
    <div class="chatbox-message-wrapper">
      <div class="chatbox-message-header">
        <div class="chatbox-message-profile">
          <img src="apoyo-tecnico.png" alt="" class="chatbox-message-image">
          <div>
            <h4 class="chatbox-message-name">Acesoramiento Online</h4>
            <p class="chatbox-message-status">online</p>
          </div>
        </div>
        <div class="chatbox-message-dropdown">
          <i class='bx bx-dots-vertical-rounded chatbox-message-dropdown-toggle'></i>
          <ul class="chatbox-message-dropdown-menu">
            <li>
              <a href="#">Buscar</a>
            </li>
            <li>
              <a href="#">Reportar</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="chatbox-message-content">
        <h4 class="chatbox-message-no-message">Bienvenido al acesoramiento online!</h4>
        <div class="chatbox-message-item received">
          <span class="chatbox-message-item-text">
            <b>Menu acesoramiento: </b>
            <li><b>1.-</b> para solicitar un acesoramiento personalizado</li>
            <li><b>2.-</b> para reclamos</li>
          </span>
          <span class="chatbox-message-item-time">08:30</span>
        </div>
      </div>
      <div class="chatbox-message-bottom">
        <form action="#" class="chatbox-message-form">
          <textarea rows="1" placeholder=" Respuesta mensaje..." class="chatbox-message-input"></textarea>
          <button type="submit" class="chatbox-message-submit"><i class='bx bx-send'></i></button>
        </form>
      </div>
    </div>
  </div>


  <script src="javascript/scriptChatOnline.js"></script>


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

  <!-- home section starts  -->

  <section class="home" id="home">
    <div class="swiper home-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide slide" style="background: url(images/home-bg-1.jpg) no-repeat">
          <div class="content">
            <span>be strong</span>
            <h3>Hazte más fuerte que tus excusas</h3>
            <a href="#" class="btn">Empezar</a>
          </div>
        </div>

        <div class="swiper-slide slide" style="background: url(images/home-bg-2.jpg) no-repeat">
          <div class="content">
            <span>be strong</span>
            <h3>Hazte más fuerte que tus excusas</h3>
            <a href="#" class="btn">Empezar</a>
          </div>
        </div>

        <div class="swiper-slide slide" style="background: url(images/home-bg-3.jpg) no-repeat">
          <div class="content">
            <span>be strong</span>
            <h3>Hazte más fuerte que tus excusas</h3>
            <a href="#" class="btn">Empezar</a>
          </div>
        </div>
      </div>

      <div class="swiper-pagination"></div>
    </div>
  </section>

  <!-- home section ends -->

  <!-- ABOUT SECCION  -->

  <section class="about" id="about">
    <div class="image">
      <img src="images/about-img.jpg" alt="" />
    </div>

    <div class="content">
      <span>about us</span>
      <h3 class="title">Todos los días son una oportunidad de volverse más fuerte</h3>
      <p>
        quieres hacer un cambio en tu vida, mejor tu salud fisica y mental
        pues que esperas estas en la pagina indicada para hacer ese cambio que buscas
      </p>
      <div class="box-container">
        <div class="box">
          <h3><i class="fas fa-check"></i>Cuerpo y mente</h3>
          <p>
            No solo te ayuda a mejorar tu cuerpo sino tambien tu mente
          </p>
        </div>
        <div class="box">
          <h3><i class="fas fa-check"></i>Vida saludable</h3>
          <p>
            Mejora tu vida y tu salud con nuestro entrenamiento personalizado
          </p>
        </div>
        <div class="box">
          <h3><i class="fas fa-check"></i>Estrategias</h3>
          <p>
            estrategias que te ayudaran a mejorar tu vida y tu salud
          </p>
        </div>
        <div class="box">
          <h3><i class="fas fa-check"></i>Ejercicio</h3>
          <p>
            Ejercicos realizados a tu medida que se adaptan a tus objetivos
          </p>
        </div>
      </div>
      <a href="#" class="btn">Leer más</a>
    </div>
  </section>

  <!-- about section ends -->

  <!-- features section starts  -->

  <section class="features" id="features">
    <h1 class="heading"><span>Beneficios de nuestro entrenamiento</span></h1>

    <div class="box-container">
      <div class="box">
        <div class="image">
          <img src="images/f-img-1.jpg" alt="" />
        </div>
        <div class="content">
          <img src="images/icon-1.png" alt="" />
          <h3>Culturismo</h3>
          <p>
            Convierte tu cuerpo en una máquina de culturismo con nuestro entrenamiento personalizado
          </p>
          <a href="#" class="btn">Leer más</a>
        </div>
      </div>

      <div class="box second">
        <div class="image">
          <img src="images/f-img-2.jpg" alt="" />
        </div>
        <div class="content">
          <img src="images/icon-2.png" alt="" />
          <h3>Entrenamiento para hombres</h3>
          <p>
            Entrenamiento personalizado para hombres que buscan el cambio perfecto
          </p>
          <a href="#" class="btn">Leer más</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="images/f-img-3.jpg" alt="" />
        </div>
        <div class="content">
          <img src="images/icon-3.png" alt="" />
          <h3>Entrenamiento para mujeres</h3>
          <p>
            Entrenamiento personalizado para mujeres que buscan el cambio perfecto
          </p>
          <a href="#" class="btn">Leer más</a>
        </div>
      </div>
    </div>
  </section>

  <!-- features section ends -->

  <!-- SECCION DE PRECIOS  -->

  <section class="pricing" id="pricing">
    <div class="information">
      <span>Planes</span>
      <h3>Crea tu plan y empieza con tus objetivos</h3>
      <p>
        Empieza ya sin perder tiempo crea tu plan y empieza buscando tus objetivos
      </p>
      <p><i class="fas fa-check"></i>Ejercicios de cardio</p>
      <p><i class="fas fa-check"></i> Levantamiento de pesas</p>
      <p><i class="fas fa-check"></i> Planes de dieta</p>
      <p><i class="fas fa-check"></i> Resultados</p>
    </div>

    <div class="plan basic">
      <h3>crear plan nutricional</h3>
      <div class="list">
        <p> La proteína es esencial para la reparación y el crecimiento muscular, y debe ser una parte integral de cualquier dieta para el gimnasio. Las fuentes de proteínas saludables incluyen pollo, pescado, carne magra, huevos y productos lácteos bajos en grasa. Si necesitas ayuda para planificar tus comidas, puedes hablar con un nutricionista o un entrenador personal para obtener consejos y sugerencias.</p>
      </div>
      <!-- <form action="/pagina_pago.html"></form> -->
      <form action="formulariosPlanNutricion.php" method="POST">
        <input type="hidden" name="membresia" value="1">
        <input type="submit" value="Crear!" class="btn">
      </form>

    </div>

    <div class="plan">
      <h3>Crear plan entrenamiento</h3>
      <div class="list">
        <p>La clave para obtener resultados en el gimnasio es la consistencia y el compromiso. Debes hacer ejercicios regularmente,También es importante tener un plan de entrenamiento que esté diseñado para tus objetivos específicos de acondicionamiento físico. Si trabajas duro y te comprometes con tu entrenamiento, verás los resultados que estás buscando.</p>
      </div>
      <form action="formulariosPlanEntrenamiento.php" method="POST">
        <input type="hidden" name="membresia" value="2">
        <input type="submit" value="Crear!" class="btn">
      </form>
    </div>
  </section>

  <!-- pricing section ends -->

  <!-- trainers section starts  -->

  <section class="trainers" id="trainers">
    <h1 class="heading"><span>Entrenadores Expertos</span></h1>

    <div class="box-container">
      <div class="box">
        <img src="images/trainer-1.jpg" alt="" />
        <div class="content">
          <span>Entrenador Experto</span>
          <h3>john deo</h3>
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-pinterest"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
        </div>
      </div>

      <div class="box">
        <img src="images/trainer-2.jpg" alt="" />
        <div class="content">
          <span>Entrenadora Experta</span>
          <h3>john deo</h3>
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-pinterest"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
        </div>
      </div>

      <div class="box">
        <img src="images/trainer-3.jpg" alt="" />
        <div class="content">
          <span>Entrenador Experto</span>
          <h3>john deo</h3>
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-pinterest"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
        </div>
      </div>

      <div class="box">
        <img src="images/trainer-4.jpg" alt="" />
        <div class="content">
          <span>Entrenadora Experta</span>
          <h3>john deo</h3>
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-pinterest"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- trainers section ends -->

  <!-- BANNER SECTION  -->

  <section class="banner">
    <span>Únete</span>
    <h3>OBTEN 50% DE DESCUENTO</h3>
    <p>
      Ins cribete a nuestro plan anual y obtén un 50% de descuento en tu plan
    </p>
    <a href="#" class="btn">get discount</a>
  </section>

  <!-- banner section ends -->

  <!-- TESTIMONIOS SECTION  -->

  <section class="review">
    <div class="information">
      <span>Testimonios</span>
      <h3>Lo que dicen nuestros clientes</h3>
      <p>
        Revisa lo que dicen nuestros clientes sobre nuestros servicios y
        entrenadores expertos de todo el mundo
      </p>
      <a href="#" class="btn">Leer más</a>
    </div>

    <div class="swiper review-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide slide">
          <p>
            Exelente servicio, me encanta el entrenamiento que me brindan, me ha ayudado a bajar de peso y a sentirme mejor conmigo mismo.
          </p>
          <div class="user">
            <img src="images/pic-1.png" alt="" />
            <div class="info">
              <h3>john deo</h3>
              <span>Cliente</span>
            </div>
            <i class="fas fa-quote-left"></i>
          </div>
        </div>

        <div class="swiper-slide slide">
          <p>
            Exelente servicio, me encanta el entrenamiento que me brindan, me ha ayudado a bajar de peso y a sentirme mejor conmigo mismo.
          </p>
          <div class="user">
            <img src="images/pic-2.png" alt="" />
            <div class="info">
              <h3>john deo</h3>
              <span>Cliente</span>
            </div>
            <i class="fas fa-quote-left"></i>
          </div>
        </div>

        <div class="swiper-slide slide">
          <p>
            Exelente servicio, me encanta el entrenamiento que me brindan, me ha ayudado a bajar de peso y a sentirme mejor conmigo mismo.
          </p>
          <div class="user">
            <img src="images/pic-3.png" alt="" />
            <div class="info">
              <h3>john deo</h3>
              <span>Cliente</span>
            </div>
            <i class="fas fa-quote-left"></i>
          </div>
        </div>

        <div class="swiper-slide slide">
          <p>
            Exelente servicio, me encanta el entrenamiento que me brindan, me ha ayudado a bajar de peso y a sentirme mejor conmigo mismo.
          </p>
          <div class="user">
            <img src="images/pic-4.png" alt="" />
            <div class="info">
              <h3>john deo</h3>
              <span>Cliente</span>
            </div>
            <i class="fas fa-quote-left"></i>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- review section ends -->

  <!-- POST/BLOG SECTION  -->

  <section class="blogs" id="blogs">
    <h1 class="heading"><span>Blogs</span></h1>

    <div class="swiper blogs-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide slide">
          <div class="image">
            <img src="images/blog-1.jpg" alt="" />
          </div>
          <div class="content">
            <div class="link">
              <a href="#">by user</a> <span>|</span>
              <a href="#">8 de Agosto, 2023</a>
            </div>
            <h3>El fitness no se trata de ser mejor que otra persona</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Aliquam, tenetur?
            </p>
            <a href="#" class="btn">Leer más</a>
          </div>
        </div>

        <div class="swiper-slide slide">
          <div class="image">
            <img src="images/blog-2.jpg" alt="" />
          </div>
          <div class="content">
            <div class="link">
              <a href="#">by user</a> <span>|</span>
              <a href="#">8 de Agosto, 2023</a>
            </div>
            <h3>el fitness no se trata de ser mejor que otra persona</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Aliquam, tenetur?
            </p>
            <a href="#" class="btn">Leer más</a>
          </div>
        </div>

        <div class="swiper-slide slide">
          <div class="image">
            <img src="images/blog-3.jpg" alt="" />
          </div>
          <div class="content">
            <div class="link">
              <a href="#">by user</a> <span>|</span>
              <a href="#">8 de Agosto, 2023</a>
            </div>
            <h3>el fitness no se trata de ser mejor que otra persona</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Aliquam, tenetur?
            </p>
            <a href="#" class="btn">Leer más</a>
          </div>
        </div>

        <div class="swiper-slide slide">
          <div class="image">
            <img src="images/blog-4.jpg" alt="" />
          </div>
          <div class="content">
            <div class="link">
              <a href="#">by user</a> <span>|</span>
              <a href="#">8 de Agosto, 2023</a>
            </div>
            <h3>el fitness no se trata de ser mejor que otra persona</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Aliquam, tenetur?
            </p>
            <a href="#" class="btn">Leer más</a>
          </div>
        </div>

        <div class="swiper-slide slide">
          <div class="image">
            <img src="images/blog-5.jpg" alt="" />
          </div>
          <div class="content">
            <div class="link">
              <a href="#">by user</a> <span>|</span>
              <a href="#">8 de Agosto, 2023</a>
            </div>
            <h3>el fitness no se trata de ser mejor que otra persona</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Aliquam, tenetur?
            </p>
            <a href="#" class="btn">Leer más</a>
          </div>
        </div>
      </div>

      <div class="swiper-pagination"></div>
    </div>
  </section>

  <!-- blogs section ends -->

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
  <!-- <script src="./js/notificaciones.js"></script> -->
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