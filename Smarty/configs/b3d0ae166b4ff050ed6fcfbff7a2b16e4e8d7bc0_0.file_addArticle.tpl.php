<?php
/* Smarty version 5.1.0, created on 2024-06-27 17:12:58
  from 'file:addArticle.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_667d817abeef13_98724427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3d0ae166b4ff050ed6fcfbff7a2b16e4e8d7bc0' => 
    array (
      0 => 'addArticle.tpl',
      1 => 1719501172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_667d817abeef13_98724427 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\MusicCorner\\Smarty\\templates';
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>MusicCorner - Music for you</title>

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
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
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
					<!-- Inserisci Prodotto -->
					<div class="col-md-12">
						<!-- Verifica EAN - Sempre visibile -->
						<?php if ($_smarty_tpl->getValue('success') == "true") {?>
							<div class="section-title">
								<h3 class="title" style="color: green;">Articolo inserito con successo!</h3>
								<p>Il tuo articolo è stato aggiunto con successo.</p>
								<a href="/MusicCorner/Seller/addArticle" class="primary-btn order-submit">Aggiungi un altro articolo</a>
								<a href="/MusicCorner/Seller/dashboard" class="primary-btn order-submit">Torna alla dashboard</a>
							</div>
						<?php } else { ?>
							<?php if ($_smarty_tpl->getValue('found') == '') {?>
								<div class="col-md-12">
									<div class="billing-details">
										<div class="section-title">
											<h3 class="title">Inserisci Prodotto</h3>
										</div>
										<form action="/MusicCorner/Seller/addArticle" method="post" class="text-center">
											<div class="form-group">
												<input class="input form-control" type="text" name="EAN" placeholder="Inserisci qui l'EAN del tuo prodotto" required pattern="[0-9]*" minlength="13" maxlength="13" title="EAN deve essere un numero di 13 cifre">
											</div>
											<button class="primary-btn order-submit" type="submit">Verifica Esistenza</button>
										</form>
								</div>
							<?php }?>
							<!-- Form Inserimento Prodotto -->
							<?php if ($_smarty_tpl->getValue('found') == "true") {?>
							<p style="color: green;">EAN già utilizzato alcuni campi sono stati riempiti!</p>
							<form action="/MusicCorner/Seller/pullArticle" method="post">
								<div class="form-group">
									<input class="input" type="text" name="EAN" value="<?php echo $_smarty_tpl->getValue('EAN');?>
" required readonly>
								</div>
								<div class="form-group">
									<input class="input" type="text" name="product-name" value="<?php echo $_smarty_tpl->getValue('productName');?>
" required readonly>
								</div>
								<div class="form-group">
									<input class="input" type="text" name="artist-name" value="<?php echo $_smarty_tpl->getValue('artistName');?>
" required readonly>
								</div>
								<div class="form-group">
									<input class="input" type="text" name="format" value="<?php echo $_smarty_tpl->getValue('format');?>
" required readonly>
								</div>
								<div class="form-group price-group">
									<input class="input" type="number" name="price" placeholder="Inserisci prezzo articolo" step="0.01" required>
									<span class="euro-input-symbol">€</span>
								</div>
								<div class="form-group">
									<input class="input" type="number" name="quantity" placeholder="Inserisci numero articoli in vendita" required pattern="[0-9]" maxlenght="11" required>
								</div>
								<button class="primary-btn order-submit" type="submit">Aggiungi Articolo</button>
							</form>
							<br>
						<?php }?>
						
						<?php if ($_smarty_tpl->getValue('found') == "false") {?>
							<p style="color: red;">Questo EAN non è mai stato usato!</p>
							<form action="/MusicCorner/Seller/pullArticle" method="post">
								<div class="form-group">
									<input class="input form-control" type="text" name="EAN" placeholder="Inserisci qui l'EAN del tuo prodotto" required pattern="[0-9]*" minlength="0" maxlength="13" title="EAN deve essere un numero di 13 cifre">
								</div>
								<div class="form-group">
									<input class="input" type="text" name="product-name" placeholder="Inserisci nome prodotto" required>
								</div>
								<div class="form-group">
									<input class="input" type="text" name="artist-name" placeholder="Inserisci nome/i artista/i" required>
								</div>
								<div class="form-group">
									<select class="input form-control" name="format" required>
										<option value="" disabled selected>Seleziona formato</option>
										<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('formats'), 'format');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('format')->value) {
$foreach0DoElse = false;
?>
										<option value="<?php echo $_smarty_tpl->getValue('format');?>
"><?php echo $_smarty_tpl->getValue('format');?>
</option>
										<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
									</select>
								</div>
								<div class="form-group price-group">
									<input class="input" type="number" name="price" placeholder="Inserisci prezzo articolo" step="0.01" required>
									<span class="euro-input-symbol">€</span>
								</div>
								<div class="form-group">
									<input class="input" type="number" name="quantity" placeholder="Inserisci numero articoli in vendita" required pattern="[0-9]" maxlenght="11" required>
								</div>
								<button class="primary-btn order-submit" type="submit">Aggiungi Articolo</button>
							</form>
							<br>
						<?php }?>
						<?php }?>
						<a href="/MusicCorner/Seller/dashboard" class="btn btn-outline-primary btn-lg dashboard-button-inverse" ><strong>Torna alla dashboard</strong></a>
					</div>
						
						<!-- /Form Inserimento Prodotto -->					
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

	

		<!-- jQuery Plugins -->
		<?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/slick.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/nouislider.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/jquery.zoom.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>

	</body>
</html>
<?php }
}
