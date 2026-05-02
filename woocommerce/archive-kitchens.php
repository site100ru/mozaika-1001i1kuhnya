<?php
		
	/**
	 * Template Name: Страница архива кухонь
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
	<div class="parallax-2 header-archive-kitchens"></div>
	<div class="container"> <!-- container/container-fluid -->
		<div class="row justify-content-center align-items-center"> <!-- min-height: 75vh; -->
			<div class="col text-light py-5"> <!-- text-center -->
				<!-- Title -->
				<h1 class="text-uppercase text-md-center fw-bold mb-2">Купить кухню в Рязани</h1>
				<!-- Subtitle -->
				<h2 class="text-md-center home-subtitle mb-3 mb-md-4">Готовую или на заказ по Вашим размерам</h2>
				<div class="row py-0 py-md-2 mb-3 mb-md-4">
					<div class="col-md-6 col-lg-3 mb-3 mb-md-0">
						<div class="row align-items-center gx-3 gx-md-0">
							<div class="col-2 col-md-3">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/home-advantage-free-design-icon.svg" class="img-fluid">
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
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/home-advantage-free-measure-icon.svg" class="img-fluid">
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
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/home-advantage-free-design-money.svg" class="img-fluid">
							</div>
							<div class="col-10 col-md-9">
								<h3 class="text-light mb-0">Бесплатная парковка</h3>
								<p class="text-light mb-0">Парковка для наших гостей всегда бесплатна</p>
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
					<!--button class="btn btn-lg btn-corporation-orange px-3 text-light"  data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg">Рассчитать стоимость</button-->
				</p>
			</div>
		</div>
	</div>
</header>
<!-- /Header parallax -->
		
		
<?php
	$obj = get_queried_object();
	$cat_name = $obj->name;
	
	$query = new WP_Query( array(
		'product_cat' => 'Кухни',//$cat_name,
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
			<div class="container site-section">
				<div class="row">
					<div class="col">
						<h2 class="text-uppercase text-center text-corporation-orange fw-bold mb-2">Распродажа витринных образцов</h2>
						<p class="section-sutitle text-center mb-5">Покупайте готовые кухни со скидкой!</p>
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
												<div class="flag-old-price"><?php echo $price; ?> руб</div>
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
				<h2 class="text-uppercase text-center text-corporation-orange fw-bold mb-2">Каталог проектов для заказа кухни по размерам</h2>
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


<!-- Order section -->
<section class="order-section bg-light">
	<div class="order-section-img d-none d-md-block" style="background: url(https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/order-img-1.webp) center; background-size: cover; right: 0%; left: 50%;"></div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-5 text-md-end">
				<h2 class="text-corporate-2 mb-4">Не нашли подходящего варианта кухни из нашего каталога?</h2>
				<p class="mb-4">Наш дизайнер специально для Вас создаст дизайн кухни Вашей мечты абсолютно <strong>бесплатно!</strong></p>
				<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/order-mail.php">
					<div class="row justify-content-end">
						<div class="col-md-6">
							<label class="form-label">Ваше имя</label>
							<input type="text" name="name" class="form-control-corporate-2" id="exampleFormControlInput1" placeholder="">
						</div>
						<div class="col-md-6">
							<label class="form-label">Ваш телефон*</label>
							<input type="text" name="tel" class="form-control-corporate-2 telMask" id="exampleFormControlInput2" required>
						</div>
						<div class="col-md-6 mb-5 mb-md-0">
							<input type="hidden" name="form-name" value="Запись к дизайнеру кухни c сайта 1001i1kuhnya.ru">
							<button type="submit" class="d-block w-100 btn btn-corporation-orange">Записаться к дизайнеру</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-6">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/order-img-1.webp" class="img-fluid d-md-none">
			</div>
		</div>
	</div>
</section>
<!-- /Order section -->


<!-- Portfolio section 2 -->
<div id="sp-portfolio" class="scroll-points"></div>
<section class="bg-white pt-5 pb-4">
	<div class="container pb-5">
		<div class="row">
			<div class="col text-center">
				<h2 class="text-uppercase text-corporation-orange fw-bold mb-2">Некоторые наши работы</h2>
				<p class="section-sutitle text-center mb-5">Вы так же можете выбрать подходящий вариант из нашего портфолио.</p>
				<div class="row pb-4">
					<?php
						global $post;
						
						$obj = get_queried_object();
						$portfolio_cat = $obj->name;
						//$term_id = $obj->term_id;
						
						$args = [
							'post_type'			=> 'portfolio',
							//'numberposts'		=> 3,
							'posts_per_page' 	=> 9,
							//'orderby'   		=> 'date',
							//'order'			=> 'DESC',
							'tax_query' => array(
								array(
									'taxonomy'	=> 'portfolio-cat',
									'field'  	=> 'name',
									'terms'  	=> $portfolio_cat
								)
							)
						];
						
						$query = new WP_Query( $args );

						$count = 1;
						while( $query->have_posts() ) : $query->the_post(); ?>
							<div class="col-md-4">
								<div id="carouselExampleIndicators<?php echo $post->ID; ?>" class="carousel slide mb-4" data-bs-ride="carousel" data-bs-interval="999999999">
									<div class="carousel-indicators" style="bottom: 5%;">
										<?php
											$count2 = 0;
											for ( $i=1; $i<=9; $i++ ) {
												if ( get_post_meta($post->ID, '_img-'.$i ) ) { ?>
													<button type="button" data-bs-target="#carouselExampleIndicators<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $i-1; ?>" <?php if ( $i == 1 ) echo ' class="active"'; ?> aria-current="true" aria-label="Slide <?php echo $i; ?>"></button>
												<?php $count2 = $count2 + 1; }
											}
										?>
									</div>
									<div class="carousel-inner shadow rounded">
										<?php
											$count2 = 0;
											for ( $i=1; $i<=9; $i++ ) {
												if ( get_post_meta($post->ID, '_img-'.$i ) ) { ?>
													<div class="carousel-item <?php if ( $i == 1 ) echo ' active'; ?>" data-bs-interval="999999999">
														<a onClick="galleryOn('gallery-<?php echo $post->ID; ?>','img-<?php echo $post->ID; ?>-<?php echo $count2; ?>');">	
															<div class="archive-portfolio-img">
																<img src="<?php echo get_post_meta($post->ID, '_img-'.$i )[0]; ?>" class="shadow rounded" alt="..." loading="lazy">
																<div class="magnifier" style="position: absolute; background: url(https://gyard.ru/wp-content/themes/houses-construction/images/icons/private-eye-magnifying-glass.svg) no-repeat center; top: 0; bottom: 0; left: 0; right: 0;">
																</div>
															</div>
														</a>
													</div>
												<?php $count2 = $count2 + 1; }
											}
										?>	
									</div>
									<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators<?php echo $post->ID; ?>"  data-bs-slide="prev">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/arrow-left.png">
									</button>
									<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators<?php echo $post->ID; ?>"  data-bs-slide="next">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/arrow-right.png">
									</button>
								</div>
							</div>
						<?php $count = $count + 1; endwhile;
						wp_reset_postdata();
					?>
				</div>
		
		
				<!--div class="row justify-content-center">
					<div class="col-md-10 pt-3">

						<div id="carouselShkafCupePortfolio" class="carousel carousel-dark slide" data-bs-ride="carousel">
							<div class="carousel-inner">
								<?php
									/* Получаем название текущей категории
									$obj = get_queried_object();
									//$cat_name = $obj->name;
									$cat_name = 'Кухни';
									//echo $cat_name;
									$post = get_page_by_title( $cat_name, $output , 'portfolio' );
									$post_id =  $post->ID;
									//$post_id = 16;
									
									if ( $post_id ) {
										$images = get_post_gallery_images( $post_id );
										$count2 = false;
										foreach ( $images as $image ) { ?>
											<div class="carousel-item h-100<?php if ( $count2 == false ) { echo ' active'; $count2 = true; } ?>">
												<div class="row align-items-center h-100">
													<div class="col text-center py-4">
														<img src="<?php echo $image; ?>" class="img-fluid rounded shadow" alt="...">
													</div>
												</div>
											</div>
										<?php }
									} else {
										echo '<div class="row align-items-center" style="height: 25vh;"><div class="col text-center">В данной категории наши работы еще не добавленны. Приносим извинения за доставленные неудобства.</div></div>';
									}
									wp_reset_query(); */
								?>
							</div>
							<button class="carousel-control-prev" type="button" data-bs-target="#carouselShkafCupePortfolio"  data-bs-slide="prev">
								<span class="carousel-control-prev-icon" style="height: 3.5rem;" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#carouselShkafCupePortfolio"  data-bs-slide="next">
								<span class="carousel-control-next-icon" style="height: 3.5rem;" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>
					</div>
				</div-->
				
				<!--div class="row d-md-none">
					<div class="col text-center">
						<button type="button" id="caruoselOrderButton" class="btn btn-danger rounded-pill d-md-none px-3 mt-5" style="transition: .5s;" data-bs-toggle="modal" data-bs-target="#exampleModal">Хочу такой же</button>
					</div>
				</div-->
				
				
				<a href="<?php $term = get_term_by( 'name', $portfolio_cat, 'portfolio-cat' ); echo get_term_link( $term ); ?>" type="button" class="btn btn-lg btn-corporation-orange">Смотреть все работы</a>
			</div>
		</div>
	</div>
</section>
<!-- /Portfolio section 2 -->


<!-- Process -->
<section class="process-section shkafy-cupe-section bg-light pt-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-uppercase text-center text-corporation-orange fw-bold mb-5">Как заказать кухню по своим размерам</h2>
				<div class="row justify-content-center">
					<div class="col-md-4 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/1.svg" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Свяжитесь с нами любым удобным для Вас способом</h3>
								<p class="mb-0">Расскажите нам, какую кухню Вы хотите. При наличии набросок, картинок, размеров и другой информации — присылайте нам на почту, в Whatsapp или Telegram.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/2.svg" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Бесплатно сделаем дизайн проект будущей кухни</h3>
								<p class="mb-0">Сделаем проект кухни, расскажем детали, сделаем пояснения, рассчитаем ее стоимость.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/3.svg" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Утверждение проекта и сроков исполнения</h3>
								<p class="mb-0">Если Вас все устраивает, мы приезжаем к Вам на замер, утверждаем сроки, материалы, заключаем договор.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/4.svg" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Производство</h3>
								<p class="mb-0">Производим Вашу кухню согласно проекту и срокам.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/5.svg" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Доставка и установка</h3>
								<p class="mb-0">После производства доставляем и устанавливаем кухню.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Process -->


<!-- ADVANTAGES -->
<section class="process-section shkafy-cupe-section bg-white pt-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-uppercase text-center text-corporation-orange fw-bold mb-5">НАШИ КОНКУРЕНТНЫЕ ПРЕИМУЩЕСТВА</h2>
				<div class="row justify-content-center">
					<div class="col-md-6 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/adv-companyage-icon.svg" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Работаем более 26 лет, с 2000 года!</h3>
								<p class="mb-0">Качество продукции и сроки выполнения заказа гарантируем, в том числе и своей репутацией. Если Вам нужна качественная кухня и точно в срок, то это к нам!</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/adv-measure-icon.svg" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Сделаем замер помещения бесплатно!</h3>
								<p class="mb-0">Замерим помещение бесплатно, покажем и расскажем про все преимущества материалов из которых изготавливаются современные кухни.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/adv-certificate-icon.svg" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Собственное производство, гарантия 2 года!</h3>
								<p class="mb-0">Не переплачивайте посредникам, лучше закажите у проверенного временем производителя и получите высокое качество и гарантию 2 года.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/adv-measure-icon.svg" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Сделаем дизайн-проект бесплатно!</h3>
								<p class="mb-0">Опытный дизайнер совершенно бесплатно сделает специально для Вас дизайн-проект кухни, в которой учтет все Ваши пожелания.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/adv-quality-icon.svg" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Большой выбор готовых кухонь</h3>
								<p class="mb-0">У нас Вы найдете большой ассортимент готовых кухонь, а так же получите ценную информацию про все преимущества материалов из которых изготавливаются современные кухни.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/adv-guaranty-icon.svg" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Скидки до 50% и полезные подарки!</h3>
								<p class="mb-0">Регулярно проводим акции, распродажи со скидками до 50%, дарим существенные подарки: предметы мебели, раковины из искусственного камня, бытовую технику и др.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /ADVANTAGES -->


<?php actionsSection( 1 ); ?>


<!-- Section Quiz -->
<div id="quiz-sp" class="scroll-points"></div>
<section id="quiz" class="bg-white py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col">
				<h2 class="text-uppercase text-center text-corporation-orange fw-bold">Ответьте на 6 вопросов ниже и узнайте предварительную стоимость Вашей кухни</h2>
				<div class="title-line mb-5"></div>
				<div class="row justify-content-center">
					
					<!-- ВОПРОСЫ ПО КУХНЯМ -->
					<div class="col-12" id="2-1">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">1/6</span>Какая планировка кухни Вам нужна?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-1-1">
									<input type="radio" id="answer-2-1-1" name="quostion-2-1" class="checkbox" value="Прямая">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/2-1-1.webp" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Прямая</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-1-2">
									<input type="radio" id="answer-2-1-2" name="quostion-2-1" class="checkbox" value="Угловая">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/2-1-2.webp" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Угловая</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-1-3">
									<input type="radio" id="answer-2-1-3" name="quostion-2-1" class="checkbox" value="П-образная">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/2-1-3.webp" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">П-образная</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-1-4">
									<input type="radio" id="answer-2-1-4" name="quostion-2-1" class="checkbox" value="С островком">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/2-1-4.webp" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">С островком</h3>
							</div>
							<!--div class="col-2">
								<label class="option_item mb-3" for="answer-2-1-5">
									<input type="radio" id="answer-2-1-5" name="quostion-2-1" class="checkbox" value="Пока не знаю">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/2-1-5.jpg" style="width: 100%;">
									</div>
								</label>
								<h3>Пока не знаю</h3>
							</div-->
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-1-outline" onclick="previousQuostion( '2-1' );">
								<input type="button" value="Далее" class="btn btn-corporation-orange" onclick="nextQuostion( '2-1' );">
							</div>
						</div>
					</div>
					
					<!-- Один размер -->
					<div class="col-md-6" id="3-1-1" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">2/6</span>Укажите размеры</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-md-4">
								<label for="answer-3-1-1" class="form-label">Длинна 1, м</label>
								<input type="text" class="form-control" id="answer-3-1-1-1" name="quostion-3-1-1">
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-1-outline" onclick="previousQuostion( '3-1-1' );">
								<input type="button" value="Далее" class="btn btn-corporation-orange" onclick="nextQuostion( '3-1-1' );">
							</div>
						</div>
					</div>
					
					<!-- Два размера -->
					<div class="col-md-6" id="3-1-2" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">2/6</span>Укажите размеры</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-md-4">
								<label for="answer-3-1-1" class="form-label">Длинна 1, м</label>
								<input type="text" class="form-control" id="answer-3-1-1-2" name="quostion-3-1-2">
							</div>
							<div class="col-md-4">
								<label for="answer-3-1-2" class="form-label">Длинна 2, м</label>
								<input type="text" class="form-control" id="answer-3-1-2-2" name="quostion-3-1-2">
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-1-outline" onclick="previousQuostion( '3-1-2' );">
								<input type="button" value="Далее" class="btn btn-corporation-orange" onclick="nextQuostion( '3-1-2' );">
							</div>
						</div>
					</div>
					
					<!-- Три размера -->
					<div class="col-md-6" id="3-1-3" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">2/6</span>Укажите размеры</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-md-4">
								<label for="answer-3-1-1" class="form-label">Длинна 1, м</label>
								<input type="text" class="form-control" id="answer-3-1-1-3" name="quostion-3-1-2">
							</div>
							<div class="col-md-4">
								<label for="answer-3-1-2" class="form-label">Длинна 2, м</label>
								<input type="text" class="form-control" id="answer-3-1-2-3" name="quostion-3-1-2">
							</div>
							<div class="col-md-4">
								<label for="answer-3-1-3" class="form-label">Длинна 3, м</label>
								<input type="text" class="form-control" id="answer-3-1-3-3" name="quostion-3-1-2">
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-1-outline" onclick="previousQuostion( '3-1-3' );">
								<input type="button" value="Далее" class="btn btn-corporation-orange" onclick="nextQuostion( '3-1-3' );">
							</div>
						</div>
					</div>
					
					<!-- Четыре размера -->
					<div class="col-md-6" id="3-1-4" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">2/6</span>Укажите размеры в метрах</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-md-3">
								<label for="answer-3-1-1" class="form-label">Длинна 1</label>
								<input type="text" class="form-control" id="answer-3-1-1-4" name="quostion-3-1-2">
							</div>
							<div class="col-md-3">
								<label for="answer-3-1-2" class="form-label">Длинна 2</label>
								<input type="text" class="form-control" id="answer-3-1-2-4" name="quostion-3-1-2">
							</div>
							<div class="col-md-3">
								<label for="answer-3-1-3" class="form-label">Длинна 3</label>
								<input type="text" class="form-control" id="answer-3-1-3-4" name="quostion-3-1-2">
							</div>
							<div class="col-md-3">
								<label for="answer-3-1-4" class="form-label">Длинна островка</label>
								<input type="text" class="form-control" id="answer-3-1-4-4" name="quostion-3-1-2">
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-1-outline" onclick="previousQuostion( '3-1-4' );">
								<input type="button" value="Далее" class="btn btn-corporation-orange" onclick="nextQuostion( '3-1-4' );">
							</div>
						</div>
					</div>
					
					<!-- 4/7 -->
					<div class="col-12" id="4-1" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">3/6</span>Какой стиль кухни Вы рассматриваете?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-4-1-1">
									<input type="radio" id="answer-4-1-1" name="quostion-4-1" class="checkbox" value="Современный">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/4-1-1.webp" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Современный</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-4-1-2">
									<input type="radio" id="answer-4-1-2" name="quostion-4-1" class="checkbox" value="Классический">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/4-1-2.webp" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Классический</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-4-1-3">
									<input type="radio" id="answer-4-1-3" name="quostion-4-1" class="checkbox" value="Лофт">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/4-1-3.webp" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Лофт</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-4-1-4">
									<input type="radio" id="answer-4-1-4" name="quostion-4-1" class="checkbox" value="Пока не знаю, нужна консультация">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/4-1-4.webp" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пока не знаю, нужна консультация</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-1-outline" onclick="previousQuostion( '4-1' );">
								<input type="button" value="Далее" class="btn btn-corporation-orange" onclick="nextQuostion( '4-1' );">
							</div>
						</div>
					</div>
					
					<!-- 5/7 -->
					<div class="col-12" id="5-1" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">4/6</span>Какой материал фасада кухни Вы хотите?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-1">
									<input type="radio" id="answer-5-1-1" name="quostion-5-1" class="checkbox" value="ЛДСП/ЛМДФ">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/5-1-1.webp" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">ЛДСП</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-2">
									<input type="radio" id="answer-5-1-2" name="quostion-5-1" class="checkbox" value="Пленка">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/5-1-2.webp" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">МДФ ПВХ (пленка)</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-3">
									<input type="radio" id="answer-5-1-3" name="quostion-5-1" class="checkbox" value="Эмаль">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/5-1-3.webp" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Эмаль, шпон</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-4">
									<input type="radio" id="answer-5-1-4" name="quostion-5-1" class="checkbox" value="Пластик">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/5-1-4.webp" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пластик</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-5">
									<input type="radio" id="answer-5-1-5" name="quostion-5-1" class="checkbox" value="Массив">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/5-1-5.webp" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">AGT</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-6">
									<input type="radio" id="answer-5-1-6" name="quostion-5-1" class="checkbox" value="Пока не знаю, нужна консультация">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/5-1-6.webp" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пока не знаю, нужна консультация</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-1-outline" onclick="previousQuostion( '5-1' );">
								<input type="button" value="Далее" class="btn btn-corporation-orange" onclick="nextQuostion( '5-1' );">
							</div>
						</div>
					</div>
					
					<!-- 6/7 -->
					<div class="col-12" id="6-1" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">5/6</span>Какой подарок Вы хотите получить в случае заказа?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-1-1">
									<input type="radio" id="answer-6-1-1" name="quostion-6-1" class="checkbox" value="Скидка 10%">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/6-1-1.webp" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Скидка 10%</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-1-2">
									<input type="radio" id="answer-6-1-2" name="quostion-6-1" class="checkbox" value="Беспроцентная рассрочка на 6 месяцев">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/6-1-2.webp" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Беспроцентная рассрочка на 6 месяцев</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-1-3">
									<input type="radio" id="answer-6-1-3" name="quostion-6-1" class="checkbox" value="Скидка 15% на заказ шкафа в теченее года">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/6-1-4.webp" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Скидка 15% на заказ шкафа в теченее года</h3>
							</div>
							<!--div class="col-2">
								<label class="option_item mb-3" for="answer-6-1-4">
									<input type="radio" id="answer-6-1-4" name="quostion-6-1" class="checkbox" value="С островком">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/6-1-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3>Пластик</h3>
							</div-->
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-1-outline" onclick="previousQuostion( '6-1' );">
								<input type="button" value="Далее" class="btn btn-corporation-orange" onclick="nextQuostion( '6-1' );">
							</div>
						</div>
					</div>
					
					<!-- 7/1 -->
					<div class="col-md-6" id="7-1" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">6/6</span>Введите Ваши контакты</h3>
						<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/get_calculate_kitchen.php">
							<div class="row justify-content-center">
								<div class="col-md-4">
									<label for="exampleFormControlInput1" class="form-label">Ваше имя</label>
									<input type="text" class="form-control" id="exampleFormControlInput1" name="name">
								</div>
								<div class="col-md-4">
									<label for="exampleFormControlInput2" class="form-label">Ваш телефон</label>
									<input type="text" class="form-control telMask" id="exampleFormControlInput2" name="phone" required>
								</div>
							</div>
							<div class="row">
								<div class="col text-center" style="margin-top: 45px;">
									<input type="hidden" id="answer1-1" name="answer1">
									<input type="hidden" id="answer2-1" name="answer2">
									<input type="hidden" id="answer3-1-1" name="answer3-1">
									<input type="hidden" id="answer3-1-2" name="answer3-2">
									<input type="hidden" id="answer3-1-3" name="answer3-3">
									<input type="hidden" id="answer3-1-4" name="answer3-4">
									<input type="hidden" id="answer4-1" name="answer4">
									<input type="hidden" id="answer5-1" name="answer5">
									<input type="hidden" id="answer6-1" name="answer6">
									<input type="button" value="Назад" class="btn btn-corporate-color-1-outline" onclick="previousQuostion( '7-1' );">
									<input type="submit" class="btn btn-corporation-orange" value="Отправить">
								</div>
							</div>
						</form>
					</div>
					<!-- /ВОПРОСЫ ПО КУХНЯМ -->				
					
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /End section Quiz -->


<!-- Gallery wrapper-->
<div id="galleryWrapper" style="background: rgba(0,0,0,0.85); display: none; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 9999;">
	
	
	<?php	
		// параметры по умолчанию
		$posts = get_posts( array(
			'numberposts' => 999,
			'orderby'     => 'date',
			'order'       => 'DESC',
			'post_type'   => 'portfolio',
		) );
		
		foreach( $posts as $post ) { setup_postdata( $post ); ?>
			<div id="gallery-<?php echo $post->ID; ?>" class="carousel slide" data-bs-ride="carousel" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
				<div class="carousel-indicators">
					<?php
						$count2 = 0;
						for ( $i=1; $i<=9; $i++ ) {
							if ( get_post_meta($post->ID, '_img-'.$i ) ) {
								if ( $count2 == 0 ) { ?>
									
									<button id="ind-<?php echo $post->ID; ?>-<?php echo $count2; ?>" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $count2; ?>" aria-label="Slide 3"></button>
									
								<?php $count2 = $count2 + 1; } else { ?>
									
									<button id="ind-<?php echo $post->ID; ?>-<?php echo $count2; ?>" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $count2; ?>" aria-label="Slide 3"></button>
									
								<?php $count2 = $count2 + 1; }
							}
						}
					?>
	
				</div>
				<div class="carousel-inner h-100">
					<?php
						$count2 = 0;
						for ( $i=1; $i<=9; $i++ ) {
							if ( get_post_meta($post->ID, '_img-'.$i ) ) { ?>
								<div id="img-<?php echo $post->ID; ?>-<?php echo $count2; ?>" class="carousel-item h-100 <?php // if ( $i == 1 ) echo ' active'; ?>" data-bs-interval="999999999">
									<div class="row align-items-center h-100">
										<div class="col text-center">
											<img src="<?php echo get_post_meta($post->ID, '_img-'.$i )[0]; ?>" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
										</div>
									</div>
								</div>
							<?php $count2 = $count2 + 1; }
						}
				
					?>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		<?php } wp_reset_postdata();
	?>

	<!-- Кнопка закрытия галереи -->
	<button type="button" onClick="closeGallery();" class="btn-close btn-close-white" style="position: fixed; top: 25px; right: 25px; z-index: 99999;" aria-label="Close"></button>
</div>


<script>
	/* Функция открытия галереи */
	function galleryOn(gal, img) {
		var gallery = gal; // Получаем ID галереи
		var image = img; // Получаем ID картинки
		// Открываем обертку галереи
		document.getElementById('galleryWrapper').style.display = 'block';
		
		<?php // Открываем галерею
			$posts = get_posts( array(
				'numberposts' => 999,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'post_type'   => 'portfolio',
				//'post__not_in' => array( 42 ) // Выводим все категории портфолио кроме Разное
			) );
			
			foreach( $posts as $post ) { setup_postdata($post);
				
				echo 'if ( gallery == "gallery-'.$post->ID.'" ) { document.getElementById("gallery-'.$post->ID.'").style.display = "block"; }';

			} wp_reset_postdata();
		?>
		
		
		<?php // Открываем изображения
			$posts = get_posts( array(
				'numberposts' => 999,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'post_type'   => 'portfolio',
				//'post__not_in' => array( 42 ) // Выводим все категории портфолио кроме Разное
			) );
			
			foreach( $posts as $post ) {
				setup_postdata( $post );
				$count2 = 0;
				for ( $i=1; $i<=9; $i++ ) {
					echo 'if ( image == "img-'.$post->ID.'-'.$count2.'" ) { document.getElementById("img-'.$post->ID.'-'.$count2.'").classList.add("active"); document.getElementById("ind-'.$post->ID.'-'.$count2.'").classList.add("active"); } ';
					$count2 = $count2 + 1;
				}
			} wp_reset_postdata();
		?>
	}
	

	// Кнопка закрытия галереи
	function closeGallery() {
		// Закрываем обертку галереи
		document.getElementById('galleryWrapper').style.display = 'none';
		
		<?php // Открываем галерею
			$posts = get_posts( array(
				'numberposts' => 999,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'post_type'   => 'portfolio',
				//'post__not_in' => array( 42 ) // Выводим все категории портфолио кроме Разное
			) );
			
			foreach( $posts as $post ) { setup_postdata($post);
				
				echo 'document.getElementById("gallery-'.$post->ID.'").style.display = "none";';

			} wp_reset_postdata();
		?>
		
		<?php // Закрываем изображения
		$posts = get_posts( array(
			'numberposts' => 999,
			'orderby'     => 'date',
			'order'       => 'DESC',
			'post_type'   => 'portfolio',
			//'post__not_in' => array( 42 ) // Выводим все категории портфолио кроме Разное
		) );
		
		foreach( $posts as $post ) {
			setup_postdata( $post );
			$count2 = 0;
			for ( $i=1; $i<=9; $i++ ) {
				echo 'document.getElementById("img-'.$post->ID.'-'.$count2.'").classList.remove("active"); document.getElementById("ind-'.$post->ID.'-'.$count2.'").classList.remove("active");';
				
				$count2 = $count2 + 1;
			}
		} wp_reset_postdata(); ?>
		
	}
</script>

		
<?php get_footer(); ?> 