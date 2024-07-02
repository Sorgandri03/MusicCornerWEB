<?php
/* Smarty version 5.1.0, created on 2024-06-29 16:28:55
  from 'file:recentorders.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_66801a276299e3_08289002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1866ca7814dea4ec8ac767067b049ef2e8bc57e8' => 
    array (
      0 => 'recentorders.tpl',
      1 => 1719671333,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66801a276299e3_08289002 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\MusicCorner\\Smarty\\templates';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>MusicCorner - Prodotti Venduti</title>

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
    <style>
        .dashboard-button {
            margin-top: 20px;
        }
        .product-details p {
            margin: 0;
        }
        .product-img img {
            width: 100%;
        }
    </style>
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
		<!-- /container -->
	</div>
	<!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->

    <!-- RECENT ORDERS -->
    <section id="modify-stock">
        <div class="container">
            <div class="row">
                <!-- Recent Orders -->
                <div class="col-md-12">
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('seller')->getRecentOrders()) == 0) {?>
						<br>
						<h2>Non hai nessun articolo da spedire</h2>
					<?php } else { ?>
                        <br>
                        <h2>Ordini recenti</h2>
                        <br>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('seller')->getRecentOrders(), 'orderItem');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('orderItem')->value) {
$foreach0DoElse = false;
?>
                        <?php $_smarty_tpl->assign('article', FPersistentManager::getInstance()->retrieveObj(EArticleDescription::class,$_smarty_tpl->getValue('orderItem')->getArticle()), false, NULL);?>
                        <?php $_smarty_tpl->assign('order', FPersistentManager::getInstance()->retrieveObj(EOrder::class,$_smarty_tpl->getValue('orderItem')->getOrderId()), false, NULL);?>
                        <?php $_smarty_tpl->assign('customer', FPersistentManager::getInstance()->retrieveObj(ECustomer::class,$_smarty_tpl->getValue('order')->getCustomer()), false, NULL);?>
                        <?php $_smarty_tpl->assign('shippingAddress', FPersistentManager::getInstance()->retrieveObj(EAddress::class,$_smarty_tpl->getValue('order')->getShippingAddress()), false, NULL);?>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="product">
                                    <div class="product-img">
                                        <img src="https://www.ibs.it/images/<?php echo $_smarty_tpl->getValue('article')->getId();?>
_0_536_0_75.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <br><br>
                                <div class="product-details">
                                    <p class="product-category"><?php echo $_smarty_tpl->getValue('article')->getArtist();?>
</p>
                                    <smallbr></smallbr>
                                    <h3 class="product-name"><a href="https://localhost/musiccorner/Search/article/<?php echo $_smarty_tpl->getValue('article')->getId();?>
"><?php echo $_smarty_tpl->getValue('article')->getName();?>
</a></h3>
                                    <h3 class="product-name"><?php echo $_smarty_tpl->getValue('article')->getId();?>
</h3>
                                    <?php if ($_smarty_tpl->getValue('article')->getFormat() == 1) {?>
                                        <p class="product-category">LP</p>
                                    <?php } else { ?>
                                        <p class="product-category">CD</p>
                                    <?php }?>
                                    <smallbr></smallbr>
                                    <p class="product-category">Prezzo: €<?php echo $_smarty_tpl->getValue('orderItem')->getPrice();?>
</p>
                                    <smallbr></smallbr>
                                    <p class="product-category">Quantità: <?php echo $_smarty_tpl->getValue('orderItem')->getQuantity();?>
</p>
                                    <smallbr></smallbr>
                                    <p class="product-category">Username: <?php echo $_smarty_tpl->getValue('customer')->getUsername();?>
</p>
                                    <br>
                                    <h4 class="product-category">Indirizzo di spedizione: <?php echo $_smarty_tpl->getValue('shippingAddress')->getStreet();?>
, <?php echo $_smarty_tpl->getValue('shippingAddress')->getCity();?>
, <?php echo $_smarty_tpl->getValue('shippingAddress')->getCap();?>
</h4>
                                    <form action="" method="post">
                                        <input type="hidden" name="orderItem" value="<?php echo $_smarty_tpl->getValue('orderItem')->getId();?>
">
                                        <button class="btn btn-outline-primary btn-lg dashboard-button"><strong>Segna come spedito</strong></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <br>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    <?php }?>
                    <a href="/MusicCorner/Seller/dashboard" class="btn btn-outline-primary btn-lg dashboard-button-inverse" ><strong>Torna alla dashboard</strong></a>               
                <!-- /Recent Orders -->

                
            </div>
        </div>
    </section>
    <!-- /MODIFY STOCK -->    
</body>
</html>
<?php }
}
