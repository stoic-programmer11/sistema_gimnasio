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


    <!-- CSS  -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>


    <!-- HEADER      -->

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

    <!-- header section ends     -->

    <!-- home section starts  -->

    <section class="home" id="home">
      <div class="swiper home-slider">
        <div class="swiper-wrapper">
          <div
            class="swiper-slide slide"
            style="background: url(images/home-bg-1.jpg) no-repeat"
          >
            <div class="content">
              <span>be strong</span>
              <h3>Hazte más fuerte que tus excusas</h3>
              <a href="#" class="btn">Empezar</a>
            </div>
          </div>

          <div
            class="swiper-slide slide"
            style="background: url(images/home-bg-2.jpg) no-repeat"
          >
            <div class="content">
              <span>be strong</span>
              <h3>Hazte más fuerte que tus excusas</h3>
              <a href="#" class="btn">Empezar</a>
            </div>
          </div>

          <div
            class="swiper-slide slide"
            style="background: url(images/home-bg-3.jpg) no-repeat"
          >
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
        <span>Precios</span>
        <h3>Planes de Precios Accesibles para Usted</h3>
        <p>
          Elige el plan que mejor se adapte a tus necesidades y comienza a
          entrenar hoy mismo
        </p>
        <p><i class="fas fa-check"></i>Ejercicios de cardio</p>
        <p><i class="fas fa-check"></i> Levantamiento de pesas</p>
        <p><i class="fas fa-check"></i> Planes de dieta</p>
        <p><i class="fas fa-check"></i> Resultados</p>
      </div>

      <div class="plan basic">
        <h3>Plan Mensual</h3>
        <div class="price"><span>bs</span>30<span>/Mes</span></div>
        <div class="list">
          <p><i class="fas fa-check"></i> Entrendor Personal</p>
          <p><i class="fas fa-check"></i>Ejercicios de cardio</p>
          <p><i class="fas fa-check"></i> Levantamiento de pesas</p>
          <p><i class="fas fa-check"></i> Planes de dieta</p>
          <p><i class="fas fa-check"></i> Resultados</p>
        </div>
        <!-- <form action="/pagina_pago.html"></form> -->
        <form action="registro_usuario_mostrar.php" method="POST">
          <input type="hidden" name="membresia" value="1">
          <input type="submit" value="Empieza!" class="btn">
        </form>
        
      </div>

      <div class="plan">
        <h3>Plan Anual</h3>
        <div class="price"><span>bs</span>100<span>/Mes</span></div>
        <div class="list">
          <p><i class="fas fa-check"></i> Entrendor Personal</p>
          <p><i class="fas fa-check"></i>Ejercicios de cardio</p>
          <p><i class="fas fa-check"></i> Levantamiento de pesas</p>
          <p><i class="fas fa-check"></i> Planes de dieta</p>
          <p><i class="fas fa-check"></i> Resultados</p>
        </div>
        <form action="registro_usuario_mostrar.php" method="POST">
          <input type="hidden" name="membresia" value="2">
          <input type="submit" value="Empieza!" class="btn">
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
