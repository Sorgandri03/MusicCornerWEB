<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Page not found</title>

		<!-- favicon -->
		<link rel="icon" href="../../Smarty/templates/img/favicon.ico" type="image/x-icon">
		
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
						<div class="col-md-3">
							<div class="header-logo">
								<a href="/" class="logo">
									<img src="../../Smarty/templates/img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form id='search' action="/Search/search" method="post">
									<input class="input" placeholder="Cerca qui" name="query">
									<button class="search-btn">Cerca</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								{if $customer}
								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Carrello</span>
										<div class="qty">{$cart->getCartQuantity()}</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											{foreach from=$cart->getCartItems() item=quantity key=stock}
											{assign var="article" value=FPersistentManager::getInstance()->retrieveObj(EArticleDescription::class,FPersistentManager::getInstance()->retrieveObj(EStock::class,$stock)->getArticle())}
											{assign var="stock" value=FPersistentManager::getInstance()->retrieveObj(EStock::class,$stock)}	
												<div class="product-widget">
													<div class="product-img">
														<img src="https://www.ibs.it/images/{$article->getId()}_0_536_0_75.jpg" alt="">
													</div>
													<div class="product-body">
														<h3 class="product-name"><a href="Search/article/{$article->getId()}">{$article->getName()}</a></h3>
														<h4 class="product-price"><span class="qty">{$quantity}x</span>€{$stock->getPrice()}</h4>
													</div>
												</div>
											{/foreach}
										</div>
										<div class="cart-summary">
											<small>{$cart->getCartQuantity()} Oggetti nel carrello</small>
											<h5>SUBTOTALE: €{$cart->getTotalPrice()}</h5>
										</div>
										<div class="cart-btns">
											<a href="/Orders/cart">Carrello</a>
											<a href="/Orders/checkout">Ordina<i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								{/if}
								<!-- /Cart -->

								<!-- Wishlist -->
								<div>
									<a href="/User/login">
										<i class="fa fa-user-o"></i>
										<span>{$username}</span>
									</a>
								</div>
								<!-- /Wishlist -->

							</div>
							<div>
								<br><br>
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

        
        <!-- 404 MESSAGE -->
		<div class="customer-dashboard section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>ERRORE 404</h1>
						<h2>La pagina che stai cercando non esiste</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- /404 MESSAGE -->

		<!-- jQuery Plugins -->
		<script src="../../Smarty/templates/js/jquery.min.js"></script>
		<script src="../../Smarty/templates/js/bootstrap.min.js"></script>
		<script src="../../Smarty/templates/js/slick.min.js"></script>
		<script src="../../Smarty/templates/js/nouislider.min.js"></script>
		<script src="../../Smarty/templates/js/jquery.zoom.min.js"></script>
		<script src="../../Smarty/templates/js/main.js"></script>

	</body>
</html>
