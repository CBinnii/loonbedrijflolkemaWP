<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo get_the_title(); ?> - Loonbedrijf Lolkema</title>
		<link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png">
        <?php wp_head(); ?>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
	</head>
	<body>
		<header id="header" class="header">
			<nav class="navbar navbar-expand-xl">
				<div class="container">
					<a class="navbar-brand" href="/">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-header.png" alt="Logo">
					</a>
					<div class="navbar-menu">
						<div class="collapse navbar-collapse" id="navbar-collapse">
                            <?php
								wp_nav_menu(array(
									'theme_location' => '',
									'menu_id' 		 => 'menu', 
									'container' 	 => false,
									'menu_class' 	 => '',
									'items_wrap' 	 => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-lg-0 %2$s">%3$s</ul>',
									'depth' 		 => 2,
								));
							?>
						</div>
						<button class="navbar-toggler">
							<div class="menu-button" id="menu-button" onclick="menuMobile()">
								<div class="bar"></div>
								<div class="bar"></div>
								<div class="bar"></div>
							</div>
						</button>
					</div>
				</div>
			</nav>
		</header>
		
		<section class="main">