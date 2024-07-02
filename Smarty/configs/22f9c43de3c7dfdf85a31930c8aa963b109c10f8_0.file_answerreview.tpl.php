<?php
/* Smarty version 5.1.0, created on 2024-06-28 17:34:41
  from 'file:answerreview.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_667ed811ed8542_05220575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22f9c43de3c7dfdf85a31930c8aa963b109c10f8' => 
    array (
      0 => 'answerreview.tpl',
      1 => 1719588730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_667ed811ed8542_05220575 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\MusicCorner\\Smarty\\templates';
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>MusicCorner - Risposta Recensione</title>

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
				<!-- row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /MAIN HEADER -->
	</header>
	<!-- /HEADER -->

    <?php if ($_smarty_tpl->getValue('success') == false) {?>
    <!-- REVIEW FORM -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="review-form">
                        <h2>Rispondi recensione per</h2>
                        <?php $_smarty_tpl->assign('article', FPersistentManager::getInstance()->retrieveObj(EArticleDescription::class,$_smarty_tpl->getValue('review')->getArticle()), false, NULL);?>    
                        <?php $_smarty_tpl->assign('seller', FPersistentManager::getInstance()->retrieveObj(ESeller::class,$_smarty_tpl->getValue('review')->getSeller()), false, NULL);?>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="product">
                                    <div class="product-img">
                                        <img src="https://www.ibs.it/images/<?php echo $_smarty_tpl->getValue('article')->getId();?>
_0_536_0_75.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <p></p>
                                <br>
                                <h4 class="product-category"><?php echo $_smarty_tpl->getValue('article')->getArtist();?>
</h4>
                                <h3 class="product-name"><a href="https://localhost/musiccorner/Search/article/<?php echo $_smarty_tpl->getValue('article')->getId();?>
"><?php echo $_smarty_tpl->getValue('article')->getName();?>
</a></h3>
                                <?php if ($_smarty_tpl->getValue('article')->getFormat() == 1) {?>
                                    <h4 class="product-category">LP</h4>
                                <?php } elseif ($_smarty_tpl->getValue('article')->getFormat() == 2) {?>
                                    <h4 class="product-category">Cassetta</h4>
                                <?php } else { ?>
                                    <h4 class="product-category">CD</h4>
                                <?php }?>
                                <h3>Comprato da: <?php echo $_smarty_tpl->getValue('customer')->getUsername();?>
</h3>
                            </div>
                        </div>
                        <br>
                        <h3>Nella sua recensione, <?php echo $_smarty_tpl->getValue('customer')->getUsername();?>
 ha scritto:</h3>
                        <div class="review-rating-wide">
                            <?php
$_smarty_tpl->assign('i', null);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->getValue('review')->getSellerRating()-1+1 - (0) : 0-($_smarty_tpl->getValue('review')->getSellerRating()-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                <i class="fa fa-star"></i>
                            <?php }
}
?>
                            <?php
$_smarty_tpl->assign('i', null);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 4+1 - ($_smarty_tpl->getValue('review')->getSellerRating()) : $_smarty_tpl->getValue('review')->getSellerRating()-(4)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->getValue('review')->getSellerRating(), $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                <i class="fa fa-star-o empty"></i>
                            <?php }
}
?>																	
                        </div>
                        <h4><?php echo $_smarty_tpl->getValue('review')->getReviewText();?>
</h4>
                        <br>
                        <h3>La tua risposta sarà pubblicata a nome: <?php echo $_smarty_tpl->getValue('seller')->getShopName();?>
</h3>
                        <form class="review-form" action="" method="post">
                            <input type="hidden" name="reviewId" value="<?php echo $_smarty_tpl->getValue('review')->getId();?>
">
                            <textarea class="input" placeholder="Scrivi qui la recensione" name="text" required></textarea>
                            <button class="primary-btn">Invia risposta</button>
                        </form>
                    </div>
                    <br><br>
                    <a href="/MusicCorner/Seller/showReviews/" class="btn btn-outline-primary btn-lg dashboard-button-inverse" ><strong>Torna alle recensioni</strong></a>
                </div>
            </div>
        </div>
    </div>
    <!-- /REVIEW FORM -->
    <?php } else { ?>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>La risposta è stata inviata con successo!</h1>
                        <br><br>
                        <a href="/MusicCorner/Seller/showReviews/" class="btn btn-outline-primary btn-lg dashboard-button-inverse" ><strong>Torna alle recensioni</strong></a>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>    
</body>
</html><?php }
}
