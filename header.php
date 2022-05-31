<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
	<title><?php echo bloginfo('name'); echo " | "; bloginfo('description'); ?></title>

	<?php
		wp_head();
	?>
</head>
<body>
	<header class="header">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-12">
						<a href="/" class="navbar-brand"><?php echo bloginfo('name'); ?></a>
					</div>
					<div class="col-lg-3 col-md-3 col-12">
						<form method="get" action="<?php print site_url(); ?>" class="searchForm">
							<input type="text" id="searchInput" class="searchInput" placeholder="Хочу найти..." />
					</form>
					</div>
					<div id="navbar-menu" class="navbar-nav col-lg-6 col-md-6 col-12">
						<!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false">
							<span class="navbar-toggler-icon"></span>
						</button> -->
						<?php wp_nav_menu(); ?>
					</div>
				</div>
				<div class="row">
					<div class="col navbar__scroll-menu">
						<!-- <div class="navbar__scroll-menu"> -->
							<ul class="navbar-nav">	
								<?php
								// $cat_id = get_cat_ID( "Ингредиенты" );
								// echo $cat_id;
									$args_cat = array(
										'taxonomy'    => 'product_cat',
										'orderby'      => 'name',
										'order'			=> 'ASC',
										'exclude'		=> '1',
										'hide_empty'  	=> 1,
										'title_li'     	=> '',
										'current_category'   => '',
									);
									//$categories = get_categories( $args_cat );
									//wp_list_categories( $args_cat );
								?>
								<?php $url = $_SERVER["REQUEST_URI"];?>
								<li <?php if ($url == "/") {echo 'class="current-cat"';}?>><a href="/">Все ингредиенты</a></li>
								<li <?php if ($url == "/mushrooms/") {echo 'class="current-cat"';}?>><a href="/mushrooms">Грибы</a></li>
								<li <?php if ($url == "/cereals/") {echo 'class="current-cat"';}?>><a href="/cereals">Крупы</a></li>
								<li <?php if ($url == "/milk_products/") {echo 'class="current-cat"';}?>><a href="/milk_products">Молочная продукция</a></li>
								<li <?php if ($url == "/seafood/") {echo 'class="current-cat"';}?>><a href="/seafood">Морепродукты</a></li>
								<li <?php if ($url == "/flour_products/") {echo 'class="current-cat"';}?>><a href="/flour_products">Мучное</a></li>
								<li <?php if ($url == "/meat/") {echo 'class="current-cat"';}?>><a href="/meat">Мясо</a></li>
								<li <?php if ($url == "/vegetables/") {echo 'class="current-cat"';}?>><a href="/vegetables">Овощи</a></li>
								<li <?php if ($url == "/condiments/") {echo 'class="current-cat"';}?>><a href="/condiments">Приправы</a></li>
								<li <?php if ($url == "/bird/") {echo 'class="current-cat"';}?>><a href="/bird">Птица</a></li>
								<li <?php if ($url == "/fish/") {echo 'class="current-cat"';}?>><a href="/fish">Рыба</a></li>
								<li <?php if ($url == "/fruits/") {echo 'class="current-cat"';}?>><a href="/fruits">Фрукты</a></li>
								<li <?php if ($url == "/berries/") {echo 'class="current-cat"';}?>><a href="/berries">Ягоды</a></li>
							</ul>
						<!-- </div> -->
					</div>
				</div>
			<!-- Button trigger modal -->	
			</div>	
		</nav>
	</header>