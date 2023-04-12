<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Entrenador Personal</title>

    <!-- FUENTES -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />
    <link rel="stylesheet" href="css/styleDiarioCalendario.css" />
    <title>Calendario guardar informacion</title>
    <script src="https://kit.fontawesome.com/e342c8a50b.js" crossorigin="anonymous"></script>

    <!-- CSS  -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>


    <!-- HEADER      -->

    <header class="header">
      <a href="#" class="logo"> <span>SHAPE</span>FIT </a>

      <div id="menu-btn" class="fas fa-bars"></div>

      
      <ul class="navbar menu">
                        <li><a href="paginaInicioLogueado.php">home</a></li>
                        <li><a href="paginaInicioLogueado.php">about</a></li>
                        <li><a href="paginaInicioLogueado.php">Beneficios</a></li>
                        <li><a href="paginaInicioLogueado.php">Planes</a>
                            <ul class="submenu">
                                <li><a href="tabla_plan_entrenamiento.php">Entrenamiento</a></li>
                                <li><a href="tabla_perdidad_de_peso.php">Nutricional</a></li>
                            </ul>
                        </li>
                        <li><a href="paginaInicioLogueado.php">Entrenadores</a></li>
                        <li><a href="paginaInicioLogueado.php">Blogs</a></li></li>
                        <!-- icono cerrar sesion -->

                        <li class="cerrar-sesion"><a href="PaginaInicio.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>  Cerrar Sesión</a></li>
                    </ul> 
                                  
    </header>

    <br><br><br>

    <h1 class="heading"><span>Registro informacion</span></h1>

    <!-- header section ends     -->
    <div class="container">
      <div class="left">
        <div class="calendar">
          <div class="month">
            <i class="fas fa-angle-left prev"></i>
            <div class="date">december 2015</div>
            <i class="fas fa-angle-right next"></i>
          </div>
          <div class="weekdays">
            <div>Domingo</div>
            <div>Lunes</div>
            <div>Martes</div>
            <div>Miercoles</div>
            <div>Jueves</div>
            <div>Viernes</div>
            <div>Sabado</div>
          </div>
          <div class="days"></div>
          <div class="goto-today">
            <div class="goto">
              <input type="text" placeholder="mm/yyyy" class="date-input" />
              <button class="goto-btn">Buscar</button>
            </div>
            <button class="today-btn">Horario Hoy</button>
          </div>
        </div>
      </div>
      <div class="right">
        <div class="today-date">
          <div class="event-day">wed</div>
          <div class="event-date">12th december 2022</div>
        </div>
        <div class="events"></div>
        <div class="add-event-wrapper">
          <div class="add-event-header">
            <div class="title">Agregar informacion</div>
            <i class="fas fa-times close"></i>
          </div>
          <div class="add-event-body">
            <div class="add-event-input">
              <input type="text" placeholder="Nombre Titulo" class="event-name" />
            </div>
            <div class="add-event-input2">
              <input
                type="text"
                placeholder="Descripcion"
                class="event-time-from"
              />
            </div>
          </div>
          <div class="add-event-footer">
            <button class="add-event-btn">Guardar informacion</button>
          </div>
        </div>
      </div>
      <button class="add-event">
        <i class="fas fa-plus"></i>
      </button>
    </div>
    <script src="js/scriptDiarioCalendario.js"></script>

    <!-- footer section starts  -->
    <h1 class="heading"><span>Contactanos</span></h1>
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
            <input
              type="email"
              name=""
              class="email"
              placeholder="Ingresa tu correo"
              id=""
            />
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
    <script src="js/script.js"></script>
  </body>
</html>
