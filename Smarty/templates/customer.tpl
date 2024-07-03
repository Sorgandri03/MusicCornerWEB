<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>{$username} dashboard</title> 

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
		</header>
		
		<!-- MAIN HEADER -->
		<div id="header">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- LOGO -->
							<a href="/" class="logo">
								<img src="../../Smarty/templates/img/biglogo.png" alt="" class="center">
							</a>
					<!-- /LOGO -->																						
				</div>
				<!-- row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /MAIN HEADER -->
	</header>
	<!-- /HEADER -->
	 <!-- CUSTOMER DASHBOARD -->
	<div class="customer-dashboard section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Benvenuto {$username} </h1>
					<ul>
						<li><a href="/Customer/orders" class="btn btn-outline-primary btn-lg dashboard-button" ><strong>Lista Ordini</strong></a></li>
						<li><a href="/Customer/customerReviews" class="btn btn-outline-primary btn-lg dashboard-button" ><strong>Lista Recensioni</strong></a></li>
						<li><a href="/" class="btn btn-outline-primary btn-lg dashboard-button-inverse" ><strong>Torna alla home</strong></a></li>
						<li><a href="/User/logout" class="btn btn-outline-primary btn-lg dashboard-button-inverse-red" ><strong>Logout</strong></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- /CUSTOMER DASHBOARD -->

</body>
</html>