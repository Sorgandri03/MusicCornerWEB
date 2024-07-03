<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Registrazione Venditore</title> 

        <!-- favicon -->
		<link rel="icon" href="Smarty/templates/img/favicon.ico" type="image/x-icon">

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="../../Smarty/templates/css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="../../Smarty/templates/css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="../../Smarty/templates/css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="../../Smarty/templates/css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="../../Smarty/templates/css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="../../Smarty/templates/css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
		    <!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
								<a href="/" class="logo">
									<img src="../../Smarty/templates/img/biglogo.png" alt="" class="center"  >
								</a>
						<!-- /LOGO -->																						
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Registration Form -->
					<div class="container-small">
						<div class="section-title-center">
							<h1 class="title">Registrati al nostro sito!</h1>
						</div>
						<form class="registration-form" action="/User/registrationSeller" method="post">
							<div class="form-group">
								<input class="input" type="text" name="shopname" placeholder="Il nome del tuo negozio" maxlength="20" required>
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="La tua mail" required>
							</div>
							<div class="form-group">
								<input class="input" type="password" name="password" placeholder="La tua Password" minlength="8" required>
							</div>
							<div class="form-group">
								<input class="input" type="password" name="confirm-password" placeholder="Conferma la Password" minlength="8" required>
							</div>
							<div class="form-group">
								<button type="submit" class="submit-btn-custom">Registrati</button>
								<a href="/User/login" class="centered-link">Torna alla pagina di Login</a>
							</div>
						</form>
						<!-- /Registration Form -->
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
						
		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	

</body></html>