<?php
/* Smarty version 5.1.0, created on 2024-06-29 11:19:58
  from 'file:allreviews.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_667fd1be9e9335_67813359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b6b8f66e90cd9e38abc85f0766c3dfc8f9102d3' => 
    array (
      0 => 'allreviews.tpl',
      1 => 1719652539,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_667fd1be9e9335_67813359 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\MusicCorner\\Smarty\\templates';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MusicCorner</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="/MusicCorner/Smarty/templates/css/bootstrap.min.css"/>

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="/MusicCorner/Smarty/templates/css/slick.css"/>
	<link type="text/css" rel="stylesheet" href="/MusicCorner/Smarty/templates/css/slick-theme.css"/>

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="/MusicCorner/Smarty/templates/css/nouislider.min.css"/>

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="/MusicCorner/Smarty/templates/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="/MusicCorner/Smarty/templates/css/style.css"/>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
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
				<a href="/MusicCorner/" class="logo">
					<img src="/MusicCorner/Smarty/templates/img/biglogo.png" alt="" class="center">
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
	<!-- SHOW SELLER AND CUSTOMER REVIEW -->
	<section id="show-all-reviews">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('reviews')) > 0) {?>
						<h1 class="text-center">Tutte le recensioni: </h1>
						<br>
						<ul class="list-unstyled">
							<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('reviews'), 'review');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('review')->value) {
$foreach0DoElse = false;
?>
							<?php $_smarty_tpl->assign('sellershopname', FPersistentManager::getInstance()->retrieveObj(ESeller::class,$_smarty_tpl->getValue('review')->getSeller()), false, NULL);?>
							<?php $_smarty_tpl->assign('customerusername', FPersistentManager::getInstance()->retrieveObj(ECustomer::class,$_smarty_tpl->getValue('review')->getCustomer()), false, NULL);?>

							<li class="review-item mb-4">
								<div class="row">
									<div class="col-md-4">
										<div class="review-heading">
											<p id="justified">Venditore: <span class="seller-valutation"><?php echo $_smarty_tpl->getValue('review')->getSeller();?>
</span></p>	
											<p id="justified">Cliente: <span class="product-valutation"><?php echo $_smarty_tpl->getValue('review')->getCustomer();?>
</span></p>																																										
										</div>
									</div>
									<div class="col-md-8">
										<div class="review-body">
											<p id="justified"><span class="review-text"><?php echo $_smarty_tpl->getValue('review')->getReviewText();?>
</span></p>	
										</div>
									</div>
								</div>
								<br>
								<form action="/MusicCorner/Admin/deleteReview" method="post">			
								<button class="btn btn-outline-primary btn-lg dashboard-button" name="review" value=<?php echo $_smarty_tpl->getValue('review')->getId();?>
><strong>Cancella review e sospendi utente</strong></button>
								</form>
							</li>
							<br>
							<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
						</ul>
                    <?php } else { ?>
                        <br>
                        <h1>Non ci sono recensioni</h1>
                    <?php }?>
					<a href="/MusicCorner/Admin/dashboard" class="btn btn-outline-primary btn-lg dashboard-button-inverse" ><strong>Torna alla dashboard</strong></a>
				</div>
			</div>
		</div>
	</section>


	
 
     
	<!-- jQuery Plugins -->
	<?php echo '<script'; ?>
 src="/MusicCorner/Smarty/templates/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/MusicCorner/Smarty/templates/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/MusicCorner/Smarty/templates/js/slick.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/MusicCorner/Smarty/templates/js/nouislider.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/MusicCorner/Smarty/templates/js/jquery.zoom.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/MusicCorner/Smarty/templates/js/main.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
