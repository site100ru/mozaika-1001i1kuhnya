<?php

	session_start();
	if ( isset($_SESSION['win']) ) {
		unset($_SESSION['win']);
		$_SESSION['display'] = "block";
	} else $_SESSION['display'] = "none";
	
?>

<!doctype html>
<html lang="ru">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="<?php echo_description(); ?>" />
	<meta property="og:description" content="<?php echo_description(); ?>" />
    <meta name="keywords" content="<?php echo wp_get_document_title(); ?>" />
	<meta property="og:locale" content="ru_RU" />
	<meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
	<meta property="og:title" content="<?php echo wp_get_document_title(); ?>" />

	<meta property="og:image" content="images/review.jpg" />
	<meta property="og:url" content="index.php" />
	<meta name="yandex-verification" content="d021064002c28be5" />
	<link rel="icon" href="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/icons/favicon.ico" type="image/x-icon">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	
	<!-- Style CSS -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/theme.css">
	<!-- Quiz CSS -->
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/quiz.css" rel="stylesheet">
	
	<?php //wp_head(); ?>
	<title><?php head_title(); ?></title>
</head>
<body <?php body_class(); ?>>


<!-- Top Menu -->
<nav id="top-menu" class="navbar navbar-expand-xl navbar-dark py-2 fixed-top shadow"> <!-- mx-auto me-auto -->
	<div class="container"> <!-- container/container-fluid -->
		<a class="navbar-brand text-uppercase fw-bold" href="https://1001i1kuhnya.ru/">
			<!-- site<span class="text-danger">100</span>.ru -->
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/logo1001.svg" id="navbar-brand" alt="Мебельный магазин 1001 и 1 кухня">
		</a>

        <!-- <a href="/" class="navbar-brand text-uppercase fw-bold custom-logo-link new-year" rel="home" aria-current="page" id="logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/logo1001.svg" class="custom-logo" id="navbar-brand" alt="Логотип мебельный магазин 1001 и 1 кухня в шапке" decoding="async" />
        </a> -->
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<?php
				wp_nav_menu(array(
					'theme_location' => 'main-menu',
					'container' => false,
					'menu_class' => '',
					'fallback_cb' => '__return_false',
					'items_wrap' => '
						<ul id="%1$s" class="navbar-nav mx-auto mb-lg-0 mb-2 mb-lg-0 %2$s">%3$s</ul>
						<div class="nav-contacts">
							<a href="tel:84912283946" class="d-block nav-tel text-corporation-blue text-decoration-none mb-2 mb-xl-0">
								<i class="fa-solid fa-phone text-corporation-blue d-none d-xxl-inline" style="position: relative; top: 2px;"></i>
								8 (4912) 28-39-46
							</a>
							<a href="tel:89537308590" class="d-block nav-tel text-corporation-blue text-decoration-none mb-2 mb-xl-0">
								<i class="fa-solid fa-phone text-corporation-blue d-none d-xxl-inline" style="position: relative; top: 2px;"></i>
								8 (953) 730-85-90
							</a>
						</div>
					',
					'depth' => 2,
					'walker' => new bootstrap_5_wp_nav_menu_walker()
				));
			?>
		</div>
	</div>
</nav>
<!-- /Top Menu -->