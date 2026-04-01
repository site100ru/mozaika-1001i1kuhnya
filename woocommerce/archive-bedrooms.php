<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */
 
 /**
  * Template Name: Каталог
  * Template Post Type: page, product_cat
  */
	

defined( 'ABSPATH' ) || exit;

get_header();
//get_header( 'shop' );
//include 'header.php';

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>


<!-- Header parallax -->
<header>
	<div class="parallax-2 header-archive-bedrooms"></div>
	<div class="container"> <!-- container/container-fluid -->
		<div class="row justify-content-center align-items-center"> <!-- min-height: 75vh; -->
			<div class="col text-light py-5"> <!-- text-center -->
				<!-- Title -->
				<h1 class="text-uppercase text-md-center fw-bold mb-2"><?php single_cat_title(); ?> купить в Рязани</h1>
				<!-- Subtitle -->
				<h2 class="text-md-center home-subtitle mb-3 mb-md-4">Готовые и на заказ по Вашим размерам</h2>
				<div class="row py-0 py-md-2 mb-3 mb-md-4">
					<div class="col-md-6 col-lg-3 mb-3 mb-md-0">
						<div class="row align-items-center gx-3 gx-md-0">
							<div class="col-2 col-md-3">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/header-advantage-1.png" class="img-fluid">
							</div>
							<div class="col-10 col-md-9">
								<h3 class="text-light mb-0">Бесплатный дизайн</h3>
								<p class="text-light mb-0">По Вашим размерам</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 mb-3 mb-md-0">
						<div class="row align-items-center gx-3 gx-md-0">
							<div class="col-2 col-md-3">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/header-advantage-2.png" class="img-fluid">
							</div>
							<div class="col-10 col-md-9">
								<h3 class="text-light mb-0">Бесплатный замер!</h3>
								<p class="text-light mb-0">С образцами материалов</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 mb-3 mb-md-0">
						<div class="row align-items-center gx-3 gx-md-0">
							<div class="col-2 col-md-3">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/home-advantage-manufacture-icon.svg" class="img-fluid">
							</div>
							<div class="col-10 col-md-9">
								<h3 class="text-light mb-0">Свое производство</h3>
								<p class="text-light mb-0">Сроком от 10 дней</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 mb-0">
						<div class="row align-items-center gx-3 gx-md-0">
							<div class="col-2 col-md-3">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/home-advantage-discount-icon.svg" class="img-fluid">
							</div>
							<div class="col-10 col-md-9">
								<h3 class="text-light mb-0">Скидки до 35%</h3>
								<p class="text-light mb-0">И бытовая техника в подарок!</p>
							</div>
						</div>
					</div>
				</div>
				<p class="header-description text-light text-md-center mb-3 mb-md-4">Рассчитайте точную стоимость прямо сейчас за 10 минут.</p>
				<p class="text-md-center mb-0">
					<a href="#quiz-sp" type="button" class="btn btn-lg btn-corporation-orange">Рассчитать</a>
				</p>
			</div>
		</div>
	</div>
</header>
<!-- /Header parallax -->


<!-- Archive products section -->
<section class="archive-products-section site-section bg-white pb-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="breadcrumbs py-4">
					<?php woocommerce_breadcrumb(); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<h2 class="text-uppercase text-center text-corporation-orange fw-bold mb-2">Каталог готовых товаров и проектов</h2>
				<p class="section-sutitle text-center mb-5">Выбирайте из нашего каталога или присылайте свои проекты!</p>
				<div class="row">
					<div class="col-md-2">
						<?php dynamic_sidebar( 'wsidebar-1' ); ?>
					</div>
					<div class="col-md-10">	
						<?php
							if ( woocommerce_product_loop() ) {

								/**
								 * Hook: woocommerce_before_shop_loop.
								 *
								 * @hooked woocommerce_output_all_notices - 10
								 * @hooked woocommerce_result_count - 20
								 * @hooked woocommerce_catalog_ordering - 30
								 */
								//do_action( 'woocommerce_before_shop_loop' );
								
								// Нижее выводятся карточки категорий и подкатегорий
								woocommerce_product_loop_start();
							
								if ( wc_get_loop_prop( 'total' ) ) {
									while ( have_posts() ) {
										the_post();
										
										/**
										 * Hook: woocommerce_shop_loop.
										 */
										
										do_action( 'woocommerce_shop_loop' );
										
										wc_get_template_part( 'content', 'product' );
										
									}
								}

								woocommerce_product_loop_end();

								/**
								 * Hook: woocommerce_after_shop_loop.
								 *
								 * @hooked woocommerce_pagination - 10
								 */
								do_action( 'woocommerce_after_shop_loop' );
							
							} else {
								/**
								 * Hook: woocommerce_no_products_found.
								 *
								 * @hooked wc_no_products_found - 10
								 */
								do_action( 'woocommerce_no_products_found' );
							}
						
							/**
							 * Hook: woocommerce_after_main_content.
							 *
							 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
							 */
							do_action( 'woocommerce_after_main_content' );

							/**
							 * Hook: woocommerce_sidebar.
							 *
							 * @hooked woocommerce_get_sidebar - 10
							 */
							//do_action( 'woocommerce_sidebar' );
						?>
		
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End archive products section -->


<section class="bg-light">
	<div class="container"> <!-- container/container-fluid -->
		<div class="row justify-content-center">
			<div class="col-md-8" style="position: relative;">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/order-img-2.png" class="d-none d-md-block" style="max-width: 350px; position: absolute; bottom: 0; left: -50px;">
				<div class="row">
					<div class="col-md-6 offset-md-6 py-5 my-0 my-md-3 text-dark">
						<h3 class="text-uppercase text-yellow mb-3">Не нашли подходящего дизайна кухни или корпусной мебели?</h3>
						<p>Не расстраивайтесь! Свяжитесь с нами любым удобным для Вас способом и наш дизайнер создаст для Вас дизайн кухни или другой корпусной мебели Вашей мечты <strong>абсолютно бесплатно!</strong></p>
						<button class="btn btn-lg btn-corporation-orange px-5 text-light" data-bs-toggle="modal" data-bs-target="#exampleModal">Оставить заявку</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- Portfolio section 2 -->
<div id="sp-portfolio" class="scroll-points"></div>
<section class="bg-white py-5">
	<div class="container pb-2">
		<div class="row">
			<div class="col">
				<h2 class="text-uppercase text-center text-corporation-orange fw-bold mb-5">Вот некоторые наши работы</h2>
			</div>
		</div>
		
		<!-- Include if used different types of portfolio
		<div class="row mb-5 d-none d-md-block">
			<div class="col">
				<ul class="nav justify-content-center" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Все наши работы</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Шкафы-купе</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Гардеробные</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="row mb-5 d-md-none">
			<div class="col">						
				<select id="portfolioSelect" class="form-select" onchange="funcOnOffDiv();">
					<option value="home" selected>Все наши работы</option>
					<option value="profile">Шкафы-купе</option>
					<option value="contact">Гардеробные</option>
				</select>
				<script>
					function funcOnOffDiv() {
						var option = document.getElementById('portfolioSelect').value;
						if ( option == 'home' ) {
							document.getElementById('home').classList.add('active', 'show');
							document.getElementById('profile').classList.remove('active', 'show');;
							document.getElementById('contact').classList.remove('active', 'show');
						} else if ( option == 'profile' ) {
							document.getElementById('home').classList.remove('active', 'show');
							document.getElementById('profile').classList.add('active', 'show');
							document.getElementById('contact').classList.remove('active', 'show');
						} else if (option == 'contact') {
							document.getElementById('home').classList.remove('active', 'show');
							document.getElementById('profile').classList.remove('active', 'show');
							document.getElementById('contact').classList.add('active', 'show');
						}
					}
				</script>
			</div>
		</div> -->
		
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner rounded shadow">
						
						<?php
						
							// Получаем название текущей категории
							$obj = get_queried_object();
							$cat_name = $obj->name;
							//echo $cat_name;
							$post = get_page_by_title( $cat_name, $output , 'portfolio' );
							$post_id =  $post->ID;
							
							
							
							if ( $post_id ) {
								$images = get_post_gallery_images( $post_id );
								$count2 = false;
								foreach ( $images as $image ) {
									if ( $count == false ) { ?>
										<div class="carousel-item h-100 active">
											<div class="row align-items-center h-100">
												<div class="col text-center">
													<img src="<?php echo $image; ?>" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
												</div>
											</div>
										</div>
									<?php $count = true; } else { ?>
										<div class="carousel-item h-100">
											<div class="row align-items-center h-100">
												<div class="col text-center">
													<img src="<?php echo $image; ?>" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
												</div>
											</div>
										</div>	
									<?php }	
								}
							} else {
								echo '<div class="row align-items-center" style="height: 25vh;"><div class="col text-center">В данной категории наши работы еще не добавлены. Приносим извинения за доставленные неудобства.</div></div>';
							}
						?>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
						<span class="carousel-control-prev-icon" style="height: 3.5rem;" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
						<span class="carousel-control-next-icon" style="height: 3.5rem;" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
		</div>
		<!--div class="row d-md-none">
			<div class="col text-center">
				<button type="button" id="caruoselOrderButton" class="btn btn-danger rounded-pill d-md-none px-3 mt-5" style="transition: .5s;" data-bs-toggle="modal" data-bs-target="#exampleModal">Хочу такой же</button>
			</div>
		</div-->
	</div>
</section>
<!-- /Portfolio section 2 -->


<?php actionsSection( 1 ); ?>


<?php
	$obj = get_queried_object();
	$cat_name = $obj->name;
	
	$query = new WP_Query( array(
		'product_cat' => $cat_name,
		'tax_query' => array(
			array(
				'taxonomy' => 'product_tag',
				'field'    => 'slug', // Поле, по которому ищем термин
				'terms'    => 'витринные-образцы'
			)
		)
	) );
									
	// Считаем кол-во записей
	$posts_count = 0;
	while ( $query->have_posts() ) { $query->the_post();
		$posts_count = $posts_count + 1;
	} wp_reset_postdata();
	
	// Если есть записи для распродажи, то добавляем раздел
	if ( $posts_count != 0 ) { ?>
		<!-- SALE SECTION -->
		<section class="sale-section pt-5 pb-2 bg-white">
			<div class="container shkafy-cupe-section site-section">
				<div class="row">
					<div class="col">
						<h2 class="text-uppercase text-center text-corporation-orange fw-bold mb-5">Распродажа витринных образцов</h2>
					</div>
				</div>
				<div class="row justify-content-center">
					<?php
						// Выводим записи
						while ( $query->have_posts() ) { $query->the_post();				
							$price = number_format( get_post_meta( get_the_ID(), '_regular_price', true), 0, ',', ' ' );
							$sale = number_format( get_post_meta( get_the_ID(), '_price', true), 0, ',', ' ' );
						?>
							<div class="col-md-<?php if ( $posts_count <= 2 ) { echo '6'; } else { echo '4'; } ?> mb-5">
								<div class="approximation<?php if ( $posts_count <= 2 ) { echo ' approximation-lg'; } ?> shadow rounded">
									<a href="<?php echo get_permalink( $product->post->id ); ?>">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
										<div class="card-wrapper">
											<div class="flag">
												<div class="flag-old-price"><?php echo 	$price; ?> руб</div>
												<div class="flag-price"><?php echo $sale; ?> руб</div>
											</div>
											<h2><?php the_title(); ?></h2>
										</div>
									</a>
								</div>
							</div>
						<?php }
					?>
				</div>
			</div>
		</section>
		<!-- END SALE SECTION -->
	<?php }
?>


<!-- Section Quiz -->
<div id="quiz-sp" class="scroll-points"></div>
<section id="quiz" class="py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col">
				<h2 class="text-uppercase text-center text-corporation-orange fw-bold">Ответьте на несколько вопросов ниже<br>и узнайте предварительную стоимость Вашей спальни</h2>
				<div class="title-line mb-5"></div>
				<div class="row justify-content-center">
					
					<!-- ВЛПРОСЫ ПО ДРУГОЙ МЕБЕЛИ -->
					<div class="col-12" id="2-3">
						<h3 class="text-center mb-5">Для расчета стоимости опишите Вашу спальню</h3>
						<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/get_calculate.php" enctype="multipart/form-data">
							<div class="row justify-content-center py-2">
								<div class="col-8 mb-3">
									<textarea type="text" rows="3" name="mes" class="form-control form-control-corporate-color-1" placeholder="Опишите изделие своими словами, укажите размеры, материалы и другую информацию"></textarea>
								</div>
								<div class="col-8">
									<p>Прикрепите изображение изделия или схематично нарисованный Вами рисунок.</p>
								</div>
								<div class="col-8 mb-3">
									<div class="input-group custom-file-button">
										<label class="input-group-text" for="inputGroupFile">Прикрепить</label>
										<input type="file" name="mail_file" accept=".jpg,.jpeg,.png,.pdf,.heic" class="form-control" id="inputGroupFile">
									</div>
								</div>
							</div>
							<div class="row justify-content-center">
								<div class="col-4 mb-3">
									<input type="text" name="name" class="form-control form-control-corporate-color-1" placeholder="Ваше имя">
								</div>
								<div class="col-4 mb-3">
									<input type="text" name="tel" class="form-control form-control-corporate-color-1 telMask" placeholder="Ваш телефон*" required="" inputmode="text">
								</div>
							</div>
							<div class="row justify-content-center">
								<div class="col text-center" style="margin-top: 35px;">
									<input type="hidden" id="g-recaptcha-response-get-calculate" name="g-recaptcha-response">
									<input type="submit" value="Отправить" class="btn btn-corporation-orange">
								</div>
							</div>
						</form>
					</div>
					<!-- /ВОПРОСЫ ПО ДРУГОЙ МЕБЕЛИ -->							
					
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /End section Quiz -->


<?php
	
	//include 'footer.php';
	//get_footer( 'shop' );
	get_footer();
?> 