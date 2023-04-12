<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Formularios Planes Entrenamiento</title>
      <!-- CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/estiloPlanes.css" rel="stylesheet">
      <!-- FONT -->
      <link href="https://fonts.gstatic.com" rel="preconnect">
      <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
   </head>
   <body>
        <header class="header">
                <a href="#" class="logo"> <span>SHAPE</span>FIT </a>
        
                <div id="menu-btn" class="fas fa-bars"></div>
        
                <nav class="navbar">
                    <ul class="navbar menu">
                        <li><a href="paginaInicioLogueado.php">home</a></li>
                        <li><a href="#about">about</a></li>
                        <li><a href="#features">Beneficios</a></li>
                        <li><a href="#pricing">Planes</a>
                            <ul class="submenu">
                                <li><a href="formulariosPlanEntrenamiento.php">Entrenamiento</a></li>
                                <li><a href="#">Nutricional</a></li>
                            </ul>
                        </li>
                        <li><a href="#trainers">Entrenadores</a></li>
                        <li><a href="#blogs">Blogs</a></li></li>
                    </ul>
                </nav>
	    </header>
        <!-- CONTAINER -->
        <div class="container d-flex align-items-center min-vh-100">
            <div class="row g-0 justify-content-center">
                <!-- TITLE -->
                <div class="col-lg-4 offset-lg-1 mx-0 px-0">
                    <div id="title-container" style="background-color: green">
                        <img class="plan-image" src="images/logoComida.png">
                        <h2 style="font-size: 39px">Plan Nutricion</h2>
                        <h3 style="color: white">Formulario objetivos</h3>
                        <p>Estos formularios usted llenara con el fin de proporcionarle un plan de Nutricion que se acomode asus objetivos y metas.</p>
                    </div>
                </div>
                <!-- FORMS -->
                <div class="col-lg-7 mx-0 px-0 formularioColor">
                    <div class="progress">
                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 0%"></div>
                    </div>
                    <div id="qbox-container">
                    <form class="needs-validation" id="form-wrapper" method="post" name="form-wrapper" novalidate="">
                        <div id="steps-container">
                            <div class="step">
                                <h2 style="color: green">¡Gracias! Ahora vamos con tus objetivos.</h2>
                                <h4 id="segundoTexto">Selecciona hasta 3 que sean importantes para ti, incluyendo un objetivo de peso.</h4>
                                <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-check ps-0 q-box">
                                        <div class="q-box__question">
                                            <input class="form-check-input question__input q-checkbox" id="q_4_uk" name="q_4" type="checkbox" value="uk"> 
                                            <label class="form-check-label question__label" for="q_4_uk">Perder peso</label>
                                        </div>
                                    </div>
                                    <div class="form-check ps-0 q-box">
                                        <div class="q-box__question">
                                            <input class="form-check-input question__input" id="q_4_us" name="q_4" type="checkbox" value="us"> 
                                            <label class="form-check-label question__label" for="q_4_us">Mantener el peso</label>
                                        </div>
                                    </div>
                                    <div class="form-check ps-0 q-box">
                                        <div class="q-box__question">
                                            <input class="form-check-input question__input" id="q_4_br" name="q_3" type="checkbox" value="br"> 
                                            <label class="form-check-label question__label" for="q_4_br">Ganar peso</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-check ps-0 q-box">
                                        <div class="q-box__question">
                                            <input class="form-check-input question__input" id="q_4_de" name="q_4" type="checkbox" value="de"> 
                                            <label class="form-check-label question__label" for="q_4_de">Ganar músculo</label>
                                        </div>
                                    </div>
                                    <div class="form-check ps-0 q-box">
                                        <div class="q-box__question">
                                            <input class="form-check-input question__input" id="q_4_in" name="q_4" type="checkbox" value="in"> 
                                            <label class="form-check-label question__label" for="q_4_in">Modificar mi dieta</label>
                                        </div>
                                    </div>
                                    <div class="form-check ps-0 q-box">
                                        <div class="q-box__question">
                                            <input class="form-check-input question__input" id="q_4_eu" name="q_4" type="checkbox" value="eu">
                                            <label class="form-check-label question__label" for="q_4_eu">Manejar el estres</label> 
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-check ps-0 q-box">
                                        <div class="q-box__question">
                                            <input class="form-check-input question__input" id="q_4_none" name="q_4" type="checkbox" value="none"> 
                                            <label class="form-check-label question__label" for="q_4_none">Aumentar la cantidad de pasos</label>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="step">
                                <h2 style="color: green">¡Genial! Acabas de dar un gran paso en tu recorrido.</h2>
                                <h4 style="font-size: 17px">Si estás buscando maximizar tus resultados en el gimnasio, es importante tener una dieta saludable y equilibrada. La dieta es una parte integral de cualquier programa de entrenamiento, y es esencial para obtener los mejores resultados posibles. Una dieta saludable debe incluir una variedad de alimentos nutritivos, como frutas, verduras, proteínas magras y grasas saludables. También es importante evitar alimentos procesados, azúcares refinados y grasas saturadas. Si necesitas ayuda para diseñar una dieta saludable, puedes hablar con un nutricionista o un entrenador personal.</h4>
                                <h4 style="font-size: 18px">Ahora, hablemos de tu objetivo de perder peso.</h4>
                            </div>
                            <div class="step">
                                <h2 style="color: green">¿Qué resultados quieres lograr perder peso?</h2>
                                <h6>Selecciona todas las opciones que correspondan.</h6>
                                <div class="row">
                               
                                    <div class="col-lg-12">
                                        <div class="form-check ps-0 q-box">
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input" id="Tonificar" name="Tonificar" type="checkbox" value="none"> 
                                                <label class="form-check-label question__label" for="Tonificar">Tonificar: quieres músculos visibles con la menor masa posible</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-check ps-0 q-box">
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input" id="Aumentar" name="Aumentar" type="checkbox" value="none"> 
                                                <label class="form-check-label question__label" for="Aumentar">Aumentar volumen: quieres músculos grandes y bien definidos, con un bajo porcentaje de grasa corporal</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-check ps-0 q-box">
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input" id="Ponerte" name="Ponerte" type="checkbox" value="none"> 
                                                <label class="form-check-label question__label" for="Ponerte">Ponerte fuerte: quieres levantar la máxima cantidad de peso y no te preocupa la grasa corporal o la definición muscular</label>
                                            </div>
                                        </div>
                                    </div>
                
                                </div>
                            </div>
                            <div class="step">
                                <h2 style="color: green">Genial, podemos ayudarte a conseguir el físico que deseas.</h2>
                                <h4 style="font-size: 17px">Comer antes y después de un entrenamiento es esencial para maximizar los resultados de tu entrenamiento. Antes de hacer ejercicios, es importante comer una comida ligera que contenga carbohidratos complejos y proteínas magras para proporcionar energía y ayudar a mantener el nivel de glucosa en la sangre. Después del entrenamiento, es importante comer una comida que contenga proteínas para ayudar a reparar los músculos y carbohidratos para reponer las reservas de energía.</h4>
                                <h4 style="font-size: 18px">Entremos en detalles para que podamos elaborar tu plan Nutrional personalizado.</h4>
                            </div>
                            <div class="step">
                                <h2 style="font-size: 30px; color:green;">¿Cuantas veces al dias comes?</h2>
                                <h4 style="font-size: 18px">Sin incluir las dietas, que se contabilizan por separado</h4>
                                <div class="row">
                
                                    <div class="col-lg-12">
                                        <div class="form-check ps-0 q-box">
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input" id="No_muy_activo" name="No_muy_activo" type="checkbox" value="none"> 
                                                <label class="form-check-label question__label" for="No_muy_activo" style="font-size: 14px"><h5 style="font-size: 16px">2 veces al dia</h5>Pasas la mayor parte del día sentado (p.ej. profesional de oficina o banco)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-check ps-0 q-box">
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input" id="Ligeramente_activo" name="Ligeramente_activo" type="checkbox" value="none"> 
                                                <label class="form-check-label question__label" for="Ligeramente_activo" style="font-size: 14px"><h5 style="font-size: 16px">3 veces al dia</h5>Pasas buena parte del día de pie (p. ej. docente o comercial)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-check ps-0 q-box">
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input" id="Activo" name="Activo" type="checkbox" value="none"> 
                                                <label class="form-check-label question__label" for="Activo" style="font-size: 14px"><h5 style="font-size: 16px">4 veces al dia</h5>Pasas buena parte del día haciendo alguna actividad física (p. ej. atendiendo mesas o haciendo reparto)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-check ps-0 q-box">
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input" id="Muy_Activo" name="Muy_Activo" type="checkbox" value="none"> 
                                                <label class="form-check-label question__label" for="Muy_Activo" style="font-size: 14px"><h5 style="font-size: 16px">mas de 5 veces</h5>Pasas buena parte del día haciendo actividad física intensa (p. ej., mensajería en bici o actividad de albañil)</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="step">
                                <h2 style="font-size: 27px; color:green">Selecciona ¿Qué tipo de alimentos te gustan y cuáles prefieres evitar?</h2>
                                <div class="col-lg-8">
                                    <div id="input-container">
                                        <input class="form-check-input" name="Dieta" type="radio" value="Vegetariana"> 
                                        <label class="form-check-label radio-lb">Dieta Vegetariana</label> 
                                        <input class="form-check-input" name="Dieta" type="radio" value="Proteica"> 
                                        <label class="form-check-label radio-lb">Dieta Proteica</label> 
                                        <input class="form-check-input" name="Dieta" type="radio" value="Hipercalórica"> 
                                        <label class="form-check-label radio-lb">Dieta Hipercalórica</label>
                                    </div>
                                </div>
                                <div class="mt-1">
                                <label class="form-label">¿Qué tipo de trabajo tienes y cuánto tiempo puedes dedicar a la preparación de alimentos?</label> 
                                <input class="form-control" id="naciste" name="alimentos" type="text">
                                </div>
                                <div class="mt-2">
                                <label class="form-label">¿Tienes un presupuesto específico que deba ser considerado?</label> 
                                <input class="form-control" id="address" name="resides" type="text" placeholder="100bs">
                                </div>
                            
                                
                            </div>
                            <div class="step">
                                <h2 style="font-size: 20px; color:green">!Por favor llena correctamente para proporcinar una dieta que se acomode a tus objetivos</h2>
                                <div class="mt-2">
                                <label class="form-label">¿Te gustaría seguir un plan de dieta específico, como la dieta mediterránea o la dieta cetogénica?</label> 
                                <input class="form-control" id="medir" name="medir" type="text" placeholder="si/no">
                                </div>
                                <div class="mt-2">
                                <label class="form-label">¿Tienes alguna preocupación específica sobre tu salud o alimentación que debamos tener en cuenta al crear tu plan de dieta?</label> 
                                <input class="form-control" id="pesas" name="pesas" type="text" placeholder="descripcion">
                                </div>
                                <div class="mt-2">
                                    <label class="form-label">¿Tienes alguna preferencia por la hora del día en que comes ciertos tipos de alimentos, como carbohidratos o proteínas?</label> 
                                    <input class="form-control" id="deseado" name="deseado" type="text" placeholder="descripcion">
                                </div>
                            </div>
                            <div class="step">
                                <div class="mt-1">
                                <div class="closing-text">
                                    <h4>Gracias por llenar!</h4>
                                    <p>Esto nos sirve como informacion para darle el mejor plan que se acomode a sus caracteristicas y objetivos</p>
                                    <p>Haga click en el boton enviar para comenzar</p>
                                </div>
                                </div>
                            </div>
                            <div id="success">
                                <div class="mt-5">
                                <h4>Registro de informacion <h4 style="color:green;">correctamente!</h4></h4>
                                <p>Por favor si desea volver a llenar con nueva informacion realize click en el boton volver</p>
                                <div class="links">
                                    <a class="back-link" href="">&#129144 Volver</a>
                                    <a class="back-link" href="tabla_perdidad_de_peso.php">Comenzar plan &#129146</a>
                                </div>
                               
                                <!-- icono con icon flecha ala derecha -->



                                </div>
                            </div>
                        </div>
                        <div id="q-box__buttons">
                            <button id="prev-btn" type="button">atras</button> 
                            <button id="next-btn" type="button">siguiente</button> 
                            <button id="submit-btn" type="submit">enviar</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="preloader-wrapper">
            <div id="preloader"></div>
            <div class="preloader-section section-left"></div>
            <div class="preloader-section section-right"></div>
         </div>
      <script src="js/scriptPlanes.js"></script>
   </body>
</html>