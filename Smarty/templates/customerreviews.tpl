<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MusicCorner - Recensioni</title> 

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
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /MAIN HEADER -->
	</header>
	<!-- /HEADER -->
    <br>
	<!-- SHOW SELLER REVIEW -->
	<section id="show-customer-reviews">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					{if count($customer->getReviews())>0}
						<h1 class="text-center"><span style="color: #0037b8;">{$customer->getUsername()}</span> ecco le tue recensioni: </h1>
						<br>
						<ul class="list-unstyled">
							{foreach from=$customer->getReviews() item=review}
							{assign var="article" value=FPersistentManager::getInstance()->retrieveObj(EArticleDescription::class,$review->getArticle())}
							{assign var="seller" value=FPersistentManager::getInstance()->retrieveObj(ESeller::class,$review->getSeller())}
							<li class="review-item mb-4">
								<div class="row">
									<div class="col-md-3">
										<div class="review-heading">
											<div class="seller-valutation">Valutazione {$seller->getShopName()} </div>
											<br>
												<div class="review-rating-wide">
													{for $i=0 to $review->getSellerRating()-1}
														<i class="fa fa-star"></i>
													{/for}
													{for $i=$review->getSellerRating() to 4}
														<i class="fa fa-star-o empty"></i>
													{/for}																	
												</div>																																										
										</div>
										<br>
										<div class="review-heading">
											<div class="product-valutation">Valutazione <br> {$article->getName()}</div>
											<br>
												<div class="review-rating-wide">
													{for $i=0 to $review->getArticleRating()-1}
														<i class="fa fa-star"></i>
													{/for}
													{for $i=$review->getArticleRating() to 4}
														<i class="fa fa-star-o empty"></i>
													{/for}																	
												</div>																																										
										</div>
									</div>
									<div class="col-md-9">
										<div class="review-body">
											<h4 id="center">Recensione di: <span class="album-name"><a href="/Search/article/{$article->getId()}"> {$article->getName()}</a></span> Formato: <span class="album-name">{$article->getFormatString()}</span></h4>
											<p id="justified"><span class="review-text">{$review->getReviewText()}</span></p>	
										</div>
									</div>
								</div>
							</li>
							<br>
							{/foreach}
						</ul>
                    {else}
                        <br>
                        <h1>Non hai ancora lasciato recensioni</h1>
                    {/if}
					<a href="/Customer/dashboard" class="btn btn-outline-primary btn-lg dashboard-button-inverse" ><strong>Torna alla dashboard</strong></a>
				</div>
			</div>
		</div>
	</section>

 
     
	<!-- jQuery Plugins -->
	<script src="../../Smarty/templates/js/jquery.min.js"></script>
	<script src="../../Smarty/templates/js/bootstrap.min.js"></script>
	<script src="../../Smarty/templates/js/slick.min.js"></script>
	<script src="../../Smarty/templates/js/nouislider.min.js"></script>
	<script src="../../Smarty/templates/js/jquery.zoom.min.js"></script>
	<script src="../../Smarty/templates/js/main.js"></script>
</body>
</html>
