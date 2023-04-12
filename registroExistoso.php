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
	<div class="contenedor">

		<!-- Tarjeta -->
		<section class="tarjeta" id="tarjeta">
			<div class="delantera">
				
				<div class="logo-marca logotipo" id="logo-marca">
					<div class="banco"><h1>.CLASSIC</h1></div>
					<img class="imagenLogo" src="images/logos/logoBancoNacionalBolvia.png" alt="">
				</div>
				
				<img src="images/chip-tarjeta.png" class="chip" alt="">
				<div class="datos">
					<div class="grupo" id="numero">
						<p class="label">Número Tarjeta</p>
						<p class="numero">#### #### #### ####</p>
					</div>
					<div class="flexbox">
						<div class="grupo" id="nombre">
							<p class="label">Nombre Tarjeta</p>
							<p class="nombre">Rodrigo Rosario</p>
						</div>

						<div class="grupo" id="expiracion">
							<p class="label">Expiracion</p>
							<p class="expiracion"><span class="mes">MM</span> / <span class="year">AA</span></p>
						</div>
					</div>
				</div>
			</div>

			<div class="trasera">
				<div class="barra-magnetica"></div>
				<div class="datos">
					<div class="grupo" id="firma">
						<p class="label">Firma</p>
						<div class="firma"><p></p></div>
					</div>
					<div class="grupo" id="ccv">
						<p class="label">CCV</p>
						<p class="ccv"></p>
					</div>
				</div>
				<p class="leyenda">Paga en cualquier hora y momento tu servicio favorito y no realices mas filas innecesarias</p>
				<a href="#" class="link-banco">www.Visa.com</a>
			</div>
		</section>

		<!-- Contenedor Boton Abrir Formulario -->
		<div class="contenedor-btn">
			<button class="btn-abrir-formulario" id="btn-abrir-formulario">
				<i class="fas fa-plus"></i>
			</button>
		</div>

		<!-- Formulario -->
		<form action="phpmailer.php" enctype="multipart/form-data" id="formulario-tarjeta" class="formulario-tarjeta" method="post">
			<div class="grupo">
				<label for="inputNumero">Número Tarjeta</label>
				<input type="text" id="inputNumero"  maxlength="19" autocomplete="off" required>
			</div>
			<div class="grupo">
				<label for="inputNombre">Nombre</label>
 				<input type="text" id="inputNombre" name="nombre" maxlength="20" autocomplete="off" required>
			</div>
			<!-- gmail -->
			<div class="grupo">
				<label for="inputCorreo">Correo</label>
				<input type="email" id="inputCorreo" name="email" maxlength="20" autocomplete="off" required>
			</div>
			<div class="flexbox">
				<div class="grupo expira">
					<label for="selectMes">Expiracion</label>
					<div class="flexbox">
						<div class="grupo-select">
							<select name="mes" id="selectMes">
								<option disabled selected>Mes</option>
							</select>
							<i class="fas fa-angle-down"></i>
						</div>
						<div class="grupo-select">
							<select name="year" id="selectYear">
								<option disabled selected>Año</option>
							</select>
							<i class="fas fa-angle-down"></i>
						</div>
					</div>
				</div>

				<div class="grupo ccv">
					<label for="inputCCV">CCV</label>
					<input type="text" id="inputCCV" maxlength="3" required>
				</div>
			</div>
			<!-- <button type="submit" class="btn-enviar">
				codigo php


			</button> -->
			<div class="boton-modal ">
				<!-- input submit value -->
				<input class="btn-enviar" type="submit" value="<?php
					session_start();
					if ($_SESSION['membresia'] == "1") {
						echo "Pagar bs50/mes";
					} else {
						echo "Pagar bs200/anual";
					} 
					
				?>">
				

			</div>
			
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
							<a href="PaginaInicio.php">Cerrar</a>

							<!-- <label for="btn-modal">Cerrar</label> -->
						</div>
						</div>
					<label for="btn-modal" class="cerrar-modal"></label>
					</div>
				</div>
		</form>
		
	</div>



	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
	<script src="js/popup.js"></script>
</body>
</html>