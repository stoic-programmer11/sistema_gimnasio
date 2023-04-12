<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Formulario de Tarjeta de Crédito Dinámico</title>
	<link href="https://fonts.googleapis.com/css?family=Lato|Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/estilosModal.css">

</head>
<body>
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

			
			<input type="checkbox" id="btn-modal">
				<div class="container-modal">
					<div class="content-modal">
						<!-- imagen de registro exitoso -->
						<div class="container-imagen">
							<img src="images/simboloCorrecto.png" alt="">
						</div>
					
						<h2 class="pago_exitoso">Resgistro Exitoso.</h2>
						<p class="parrafo-modal">El proceso se ha realizado correctamente. le hemos enviado un correo electronico
							con los datos de su cuenta.
						</p>
						<div class="btn-cerrar">
							<!-- href ala paginaInicio -->
							<a href="paginaInicioLogueado.php">Cerrar</a>

							<!-- <label for="btn-modal">Cerrar</label> -->
						</div>
					</div>
					<label for="btn-modal" class="cerrar-modal"></label>
				</div>



	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
	<script src="js/popup.js"></script>
</body>
</html>