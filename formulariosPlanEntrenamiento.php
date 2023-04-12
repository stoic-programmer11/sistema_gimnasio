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
                                <li><a href="#">Entrenamiento</a></li>
                                <li><a href="formulariosPlanNutricion.php">Nutricional</a></li>
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
                    <div id="title-container">
                        <img class="plan-image" src="images/gymModeloLogo.png">
                        <h2 style="font-size: 33px">Plan Entrenamiento</h2>
                        <h3>Formulario objetivos</h3>
                        <p>Estos formularios usted llenara con el fin de proporcionarle un plan de entrenaniento que se acomode asus objetivos y metas.</p>
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
                                <h2>¡Gracias! Ahora vamos con tus objetivos.</h2>
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
                                <h2>¡Genial! Acabas de dar un gran paso en tu recorrido.</h2>
                                <h4 style="font-size: 20px">"Sólo el 1% de la población es lo suficientemente loco como para amar el dolor y la incomodidad del entrenamiento, ¿eres parte de ese 1%?" .</h4>
                                <h4 style="font-size: 20px">Ahora, hablemos de tu objetivo de ganar músculo.</h4>
                            </div>
                            <div class="step">
                                <h2>¿Qué resultados quieres lograr al ganar músculo?</h2>
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
                                <h2>Genial, podemos ayudarte a conseguir el físico que deseas.</h2>
                                <h4 style="font-size: 20px">Te recomendamos que pruebes algunas de nuestras rutinas de entrenamiento HIIT de peso corporal y bajo. También te recomendamos que hagas un seguimiento de tus macronutrientes para asegurarte de que estás consumiendo suficiente proteína.</h4>
                                <h4 style="font-size: 20px">Entremos en detalles para que podamos elaborar tu plan personalizado.</h4>
                            </div>
                            <div class="step">
                                <h2 style="font-size: 30px">¿Cuál es tu nivel de actividad base?</h2>
                                <h4 style="font-size: 18px">Sin incluir las rutinas, que se contabilizan por separado</h4>
                                <div class="row">
                
                                    <div class="col-lg-12">
                                        <div class="form-check ps-0 q-box">
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input" id="No_muy_activo" name="No_muy_activo" type="checkbox" value="none"> 
                                                <label class="form-check-label question__label" for="No_muy_activo" style="font-size: 14px"><h5 style="font-size: 16px">No muy activo</h5>Pasas la mayor parte del día sentado (p.ej. profesional de oficina o banco)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-check ps-0 q-box">
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input" id="Ligeramente_activo" name="Ligeramente_activo" type="checkbox" value="none"> 
                                                <label class="form-check-label question__label" for="Ligeramente_activo" style="font-size: 14px"><h5 style="font-size: 16px">Ligeramente activo</h5>Pasas buena parte del día de pie (p. ej. docente o comercial)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-check ps-0 q-box">
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input" id="Activo" name="Activo" type="checkbox" value="none"> 
                                                <label class="form-check-label question__label" for="Activo" style="font-size: 14px"><h5 style="font-size: 16px">Activo</h5>Pasas buena parte del día haciendo alguna actividad física (p. ej. atendiendo mesas o haciendo reparto)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-check ps-0 q-box">
                                            <div class="q-box__question">
                                                <input class="form-check-input question__input" id="Muy_Activo" name="Muy_Activo" type="checkbox" value="none"> 
                                                <label class="form-check-label question__label" for="Muy_Activo" style="font-size: 14px"><h5 style="font-size: 16px">Muy Activo</h5>Pasas buena parte del día haciendo actividad física intensa (p. ej., mensajería en bici o actividad de albañil)</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="step">
                                <h2>Selecciona el sexo en el que debemos basar el cálculo de tus necesidades calóricas.</h2>
                                <div class="col-lg-8">
                                    <div id="input-container">
                                        <input class="form-check-input" name="genero" type="radio" value="Hombre"> 
                                        <label class="form-check-label radio-lb">Hombre</label> 
                                        <input class="form-check-input" name="genero" type="radio" value="Mujer"> 
                                        <label class="form-check-label radio-lb">Mujer</label> 
                                        <input class="form-check-input" name="genero" type="radio" value="Nose"> 
                                        <label class="form-check-label radio-lb">Nose</label>
                                    </div>
                                </div>
                                <br>
                                <div class="mt-1">
                                <label class="form-label">¿Cuando naciste?</label> 
                                <input class="form-control" id="naciste" name="naciste" type="date">
                                </div>
                                <div class="mt-2">
                                <label class="form-label">¿Dónde resides?</label> 
                                <input class="form-control" id="address" name="resides" type="text" placeholder="Pais">
                                </div>
                            
                                
                            </div>
                            <div class="step">
                                <h2>Selecciona el sexo en el que debemos basar el cálculo de tus necesidades calóricas.</h2>
                                <div class="mt-2">
                                <label class="form-label">¿Cuánto mides?</label> 
                                <input class="form-control" id="medir" name="medir" type="text" placeholder="0cm">
                                </div>
                                <div class="mt-2">
                                <label class="form-label">¿Cuánto pesas?</label> 
                                <input class="form-control" id="pesas" name="pesas" type="text" placeholder="Peso actual kg">
                                </div>
                                <div class="mt-2">
                                    <label class="form-label">¿Cuál es tu peso deseado?</label> 
                                    <input class="form-control" id="deseado" name="deseado" type="text" placeholder="Peso deseado kg">
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
                                <h4>Registro de informacion exitoso!</h4>
                                <p>Por favor si desea volver a llenar con nueva informacion realize click en el boton volver</p>
                                <div class="links">
                                    <a class="back-link" href="">&#129144 Volver</a>
                                    <a class="back-link" href="tabla_plan_entrenamiento.php">Comenzar plan &#129146</a>
                                </div>
                               
                                <!-- icono con icon flecha ala derecha -->



                                </div>
                            </div>
                        </div>
                        <div id="q-box__buttons">
                            <button id="prev-btn" type="button">Previous</button> 
                            <button id="next-btn" type="button">Next</button> 
                            <button id="submit-btn" type="submit">Submit</button>
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