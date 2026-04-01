<?php
 
	/**
	 * Template Name: Страница архива шкафов
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
<header class="shkafy-cupe-header">
	<div class="parallax-2 header-archive-closets"></div>
	<div class="container"> <!-- container/container-fluid -->
		<div class="row justify-content-center align-items-center"> <!-- min-height: 75vh; -->
			<div class="col text-light py-5"> <!-- text-center -->
				<!-- Title -->
				<h1 class="text-uppercase text-md-center fw-bold mb-2"><?php single_cat_title(); ?> купить в Рязани</h1>
				<!-- Subtitle -->
				<h2 class="text-md-center home-subtitle mb-3 mb-md-4">Готовые или на заказ по Вашим размерам</h2>
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
				<p class="header-description text-light text-md-center mb-3 mb-md-4">Рассчитайте стоимость прямо сейчас за 10 минут.</p>
				<p class="text-md-center mb-0">
					<a href="#quiz-sp" type="button" class="btn btn-lg btn-corporation-orange">Рассчитать стоимость</a>
					<!--button class="btn btn-lg btn-corporation-orange px-3 text-light"  data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg">Рассчитать стоимость</button-->
				</p>
			</div>
		</div>
	</div>
</header>
<!-- /Header parallax -->


<!-- SALE SECTION
<section class="sale-section pt-5 pb-2 bg-white">
	<div class="container shkafy-cupe-section site-section">
		<div class="row">
			<div class="col">
				<h2 class="text-uppercase text-center text-corporation-orange fw-bold mb-5">Распродажа витринных образцов</h2>
			</div>
		</div>
		<div class="row justify-content-center">
			<?php
				$obj = get_queried_object();
				$cat_name = $obj->name;
				//echo $cat_name;
				
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
												
				while ( $query->have_posts() ) { $query->the_post();				
					$price = number_format( get_post_meta( get_the_ID(), '_regular_price', true), 0, ',', ' ' );
					$sale = number_format( get_post_meta( get_the_ID(), '_price', true), 0, ',', ' ' );
				?>
					<div class="col-md-6 mb-5">
						<div class="approximation approximation-lg shadow rounded">
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
				<h2 class="text-uppercase text-center text-corporation-orange fw-bold mb-2">Каталог проектов для заказа шкафа по размерам</h2>
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


<section class="shkafy-cupe-order-section bg-light">
	<div class="container"> <!-- container/container-fluid -->
		<div class="row justify-content-center">
			<div class="col-md-9 py-5" style="position: relative;">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/order-img-2.png" class="d-none d-md-block" style="max-width: 350px; position: absolute; bottom: 0; left: -50px;">
				<div class="row">
					<div class="col-md-7 offset-md-5 py-5 my-0 my-md-3 text-dark">
						<h3 class="mb-3">Не нашли подходящего варианта шкафа из нашего каталога?</h3>
						<p class="mb-4"><strong>Бесплатно</strong> сделаем дизайн-проект и рассчитаем стоимость шкафа-купе прямо сейчас за 60 минут!</p>
						<button class="btn btn-lg btn-corporation-orange px-5 text-light" data-bs-toggle="modal" data-bs-target="#exampleModal">Оставить заявку</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- Process -->
<section class="process-section shkafy-cupe-section bg-white pt-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-uppercase text-center text-corporation-orange fw-bold mb-5">Заказать шкаф-купе по своим размерам<br>очень просто!</h2>
				<div class="row justify-content-center">
					<div class="col-md-4 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/1.png" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Свяжитесь с нами любым удобным способом</h3>
								<p class="mb-0">Расскажите, какой шкаф-купе Вы хотите. При наличии ТЗ, набросок, картинок, размеров и другой информации — присылайте нам на почту, в Whatsapp или Telegram.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/2.png" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Бесплатно сделаем дизайн-проект шкафа</h3>
								<p class="mb-0">Бесплатно сделаем дизайн-проект шкафа-купе с пояснениями к нему и рассчитаем его стоимость.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/3.png" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Утверждаем проект и сроки исполнения</h3>
								<p class="mb-0">Если Вам подходит наше предложение, к Вам приезжает наш специалист, производит замер, утверждает сроки, материалы и заключает договор.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/4.png" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Производим</h3>
								<p class="mb-0">Производим шкаф-купе согласно проекту и срокам.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/5.png" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Доставляем и устанавливаем</h3>
								<p class="mb-0">После производства доставляем и устанавливаем шкаф-купе в удобное для Вас время.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Process -->


<!-- Portfolio section 2 -->
<div id="sp-portfolio" class="scroll-points"></div>
<section class="bg-light pt-5 pb-4">
	<div class="container pb-3">
		<div class="row">
			<div class="col">
				<h2 class="text-uppercase text-center text-corporation-orange fw-bold">Некоторые наши работы</h2>
			</div>
		</div>
		
		<div class="row justify-content-center">
			<div class="col-md-10 pt-3">

				<div id="carouselShkafCupePortfolio" class="carousel carousel-dark slide" data-bs-ride="carousel">
					<div class="carousel-inner">
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
							wp_reset_query();
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
		</div>
		
		<!--div class="row d-md-none">
			<div class="col text-center">
				<button type="button" id="caruoselOrderButton" class="btn btn-danger rounded-pill d-md-none px-3 mt-5" style="transition: .5s;" data-bs-toggle="modal" data-bs-target="#exampleModal">Хочу такой же</button>
			</div>
		</div-->
	</div>
</section>
<!-- /Portfolio section 2 -->


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
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/1.png" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Большой опыт производства сложных проектов</h3>
								<p class="mb-0">Используем в работе МДФ, фанерованный шпоном разных пород дерева, МДФ, покрытый эмалью, ЛДСП, алюминий, металл (сварные или сборные конструкции, покрытые порошковой краской), массив дерева.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/2.png" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Работаем более 22 лет, с 2000 года!</h3>
								<!--p class="mb-0">Сделаем поясненения к нему, рассчитаем стоимость.</p-->
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/3.png" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Гарантия 2 года</h3>
								<p class="mb-0">На все шкафы-купе.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/4.png" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Сделаем быстро</h3>
								<p class="mb-0">Делаем шкафы-купе от 7 дней.</p>
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


<!-- QUIZ SECTION -->
<div id="quiz-sp" class="scroll-points"></div>
<section id="quiz" class="py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col">
				<h2 class="text-uppercase text-center text-corporation-orange fw-bold">Ответьте на 6 вопросов ниже и узнайте предварительную стоимость Вашего шкафа</h2>
				<div class="title-line mb-5"></div>
				<div class="row justify-content-center">
					
					<!-- ВОПРОСЫ ПО ШКАФАМ -->
					<div class="col-12" id="2-2">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">1/6</span>Какой тип шкафа Вам нужен?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-1">
									<input type="radio" id="answer-2-2-1" name="quostion-2-2" class="checkbox" value="Купейный">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/2-2-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Купейный</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-2">
									<input type="radio" id="answer-2-2-2" name="quostion-2-2" class="checkbox" value="Встроенный">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/2-2-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Встроенный</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-3">
									<input type="radio" id="answer-2-2-3" name="quostion-2-2" class="checkbox" value="Угловой">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/2-2-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Угловой</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-4">
									<input type="radio" id="answer-2-2-4" name="quostion-2-2" class="checkbox" value="Распашной">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/2-2-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Распашной</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-5">
									<input type="radio" id="answer-2-2-5" name="quostion-2-2" class="checkbox" value="Гардеробная">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/2-2-5.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Гардеробная</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-6">
									<input type="radio" id="answer-2-2-6" name="quostion-2-2" class="checkbox" value="Пока не знаю">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/2-2-6.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пока не знаю</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-1-outline" onclick="previousQuostion( '2-2' );">
								<input type="button" value="Далее" class="btn btn-corporation-orange" onclick="nextQuostion( '2-2' );">
							</div>
						</div>
					</div>
					
					<div class="col-12" id="3-2" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">2/6</span>Какой материал фасада шкафа Вы хотите?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-3-2-1">
									<input type="radio" id="answer-3-2-1" name="quostion-3-2" class="checkbox" value="ЛДСП">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/3-2-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">ЛДСП</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-3-2-2">
									<input type="radio" id="answer-3-2-2" name="quostion-3-2" class="checkbox" value="Пескоструй">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/3-2-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пескоструй</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-3-2-3">
									<input type="radio" id="answer-3-2-3" name="quostion-3-2" class="checkbox" value="Зеркало">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/3-2-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Зеркало</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-3-2-4">
									<input type="radio" id="answer-3-2-4" name="quostion-3-2" class="checkbox" value="Фотопечать">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/3-2-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Фотопечать</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-3-2-5">
									<input type="radio" id="answer-3-2-5" name="quostion-3-2" class="checkbox" value="Комбинированный">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/3-2-5.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Комбинированный</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-3-2-6">
									<input type="radio" id="answer-3-2-6" name="quostion-3-2" class="checkbox" value="Пока не знаю">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/3-2-6.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пока не знаю, нужна консультация</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-1-outline" onclick="previousQuostion( '3-2' );">
								<input type="button" value="Далее" class="btn btn-corporation-orange" onclick="nextQuostion( '3-2' );">
							</div>
						</div>
					</div>
					
					<div class="col-12" id="4-2" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">3/6</span>Какая ориентировочная ширина шкафа планируется?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-1">
									<input type="radio" id="answer-4-2-1" name="quostion-4-2" class="checkbox" value="1">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/ico/check-background.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">1 м</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-2">
									<input type="radio" id="answer-4-2-2" name="quostion-4-2" class="checkbox" value="1,5">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/ico/check-background.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">1,5</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-3">
									<input type="radio" id="answer-4-2-3" name="quostion-4-2" class="checkbox" value="2">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/ico/check-background.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">2 м</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-4">
									<input type="radio" id="answer-4-2-4" name="quostion-4-2" class="checkbox" value="2,5">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/ico/check-background.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">2,5 м</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-5">
									<input type="radio" id="answer-4-2-5" name="quostion-4-2" class="checkbox" value="3">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/ico/check-background.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">3</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-6">
									<input type="radio" id="answer-4-2-6" name="quostion-4-2" class="checkbox" value="3,5">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/ico/check-background.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">3,5 м</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-7">
									<input type="radio" id="answer-4-2-7" name="quostion-4-2" class="checkbox" value="4">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/ico/check-background.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">4 м</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-8">
									<input type="radio" id="answer-4-2-8" name="quostion-4-2" class="checkbox" value="4,5">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/ico/check-background.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">4,5 м</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-9">
									<input type="radio" id="answer-4-2-9" name="quostion-4-2" class="checkbox" value="5">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/ico/check-background.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">5 м</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-10">
									<input type="radio" id="answer-4-2-10" name="quostion-4-2" class="checkbox" value=">5">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/ico/check-background.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">>5 м</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-1-outline" onclick="previousQuostion( '4-2' );">
								<input type="button" value="Далее" class="btn btn-corporation-orange" onclick="nextQuostion( '4-2' );">
							</div>
						</div>
					</div>
					
					
					<div class="col-12" id="5-2" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">4/6</span>Какое количество дверей Вы предполагаете?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-2-1">
									<input type="radio" id="answer-5-2-1" name="quostion-5-2" class="checkbox" value="1 дверь">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/5-2-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">1 дверь</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-2-2">
									<input type="radio" id="answer-5-2-2" name="quostion-5-2" class="checkbox" value="2 двери">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/5-2-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">2 двери</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-2-3">
									<input type="radio" id="answer-5-2-3" name="quostion-5-2" class="checkbox" value="3 двери">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/5-2-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">3 двери</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-2-4">
									<input type="radio" id="answer-5-2-4" name="quostion-5-2" class="checkbox" value="4 двери">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/5-2-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">4 двери</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-2-5">
									<input type="radio" id="answer-5-2-5" name="quostion-5-2" class="checkbox" value="5 дверей">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/5-2-5.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">5 дверей</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-2-6">
									<input type="radio" id="answer-5-2-6" name="quostion-5-2" class="checkbox" value="Более 5 дверей">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/5-2-6.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Более 5 дверей</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-1-outline" onclick="previousQuostion( '5-2' );">
								<input type="button" value="Далее" class="btn btn-corporation-orange" onclick="nextQuostion( '5-2' );">
							</div>
						</div>
					</div>
					
					
					<div class="col-12" id="6-2" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">5/6</span>Какой подарок Вы хотите получить в случае заказа?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-2-1">
									<input type="radio" id="answer-6-2-1" name="quostion-6-2" class="checkbox" value="Скидка 15%">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/6-2-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Скидка 15%</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-2-2">
									<input type="radio" id="answer-6-2-2" name="quostion-6-2" class="checkbox" value="Беспроцентная рассрочка на 6 месяцев">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/6-2-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Беспроцентная рассрочка на 6 месяцев</h3>
							</div>
							<!--div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-2-3">
									<input type="radio" id="answer-6-2-3" name="quostion-6-2" class="checkbox" value="Бесплатная доставка и установка">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/6-2-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Бесплатная доставка</h3>
							</div-->
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-2-4">
									<input type="radio" id="answer-6-2-4" name="quostion-6-2" class="checkbox" value="Скидка 10% на заказ кухни в теченее года">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/6-2-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Скидка 10% на заказ кухни в теченее года</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-1-outline" onclick="previousQuostion( '6-2' );">
								<input type="button" value="Далее" class="btn btn-corporation-orange" onclick="nextQuostion( '6-2' );">
							</div>
						</div>
					</div>
					
					<div class="col-md-6" id="7-2" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">6/6</span>Введите Ваши контакты</h3>
						<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/get_calculate_closet.php">
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
									<input type="hidden" id="answer1-2" name="answer1">
									<input type="hidden" id="answer2-2" name="answer2">
									<input type="hidden" id="answer3-2" name="answer3">
									<input type="hidden" id="answer4-2" name="answer4">
									<input type="hidden" id="answer5-2" name="answer5">
									<input type="hidden" id="answer6-2" name="answer6">
									<input type="button" value="Назад" class="btn btn-corporate-color-1-outline" onclick="previousQuostion( '7-2' );">
									<input type="submit" class="btn btn-corporation-orange" value="Отправить">
								</div>
							</div>
						</form>
					</div>
					<!-- /ВОПРОСЫ ПО ШКАФАМ -->					
					
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /End section Quiz -->


<!-- Modal -->
<div class="modal fade" id="quizModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl">
		
		<!-- Quiz container -->
		<div id="sp-calculator" class="scroll-points"></div>
		<div id="quiz-container" class="modal-content">
			
			<!-- Quiz container content -->
			<div class="modal-header">
				<h4 class="modal-title fs-5" id="exampleModalLabel">Выберите тип шкафа:</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row justify-content-center">	
						<div class="col-md-10 text-center">
							<div class="row justify-content-center text-left quiz-content">		
								<div class="col-md-3 col-6 pb-3">
									<label class="form-check-label w-100" for="customRadioInline1" style="cursor: pointer;">
										<div class="card border-0 bg-dark text-white">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz/shkaf-kupe-v-prihojuyu.jpg" class="card-img-top rounded" alt="Шкаф-купе в прихожую">
											<div class="card-img-overlay pl-1 pr-1 d-flex align-items-end">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="customRadioInline1" id="customRadioInline1">
													<h5 class="card-title mb-0 quiz-title">Шкаф-купе в прихожую</h5>
												</div>
											</div>
										</div>
									</label>
								</div>
								<div class="col-md-3 col-6 pb-3">
									<label class="form-check-label w-100" for="customRadioInline2" style="cursor: pointer;">
										<div class="card border-0 bg-dark text-white">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz/shkaf-kupe-v-gostinuyu.jpg" class="card-img-top rounded" alt="Шкаф-купе в гостиную">
											<div class="card-img-overlay pl-1 pr-1 d-flex align-items-end">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="customRadioInline1" id="customRadioInline2">
													<h5 class="card-title mb-0 quiz-title">Шкаф-купе в гостиную</h5>
												</div>
											</div>
										</div>
									</label>
								</div>
								<div class="col-md-3 col-6 pb-3">
									<label class="form-check-label w-100" for="customRadioInline3" style="cursor: pointer;">
										<div class="card border-0 bg-dark text-white">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz/garderobnye.jpg" class="card-img-top rounded" alt="Гардеробная">
											<div class="card-img-overlay pl-1 pr-1 d-flex align-items-end">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="customRadioInline1" id="customRadioInline3">
													<h5 class="card-title mb-0 quiz-title">Гардеробная</h5>
												</div>
											</div>
										</div>
									</label>
								</div>
								<div class="col-md-3 col-6 pb-3">
									<label class="form-check-label w-100" for="customRadioInline4" style="cursor: pointer;">
										<div class="card border-0 bg-dark text-white">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz/vstroyennye-shkafy-kupe.jpg" class="card-img-top rounded" alt="Встроенный шкаф-купе">
											<div class="card-img-overlay pl-1 pr-1 d-flex align-items-end">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="customRadioInline1" id="customRadioInline4">
													<h5 class="card-title mb-0 quiz-title">Встроенный шкаф-купе</h5>
												</div>
											</div>
										</div>
									</label>
								</div>
								<div class="col-md-3 col-6 pb-3">
									<label class="form-check-label w-100" for="customRadioInline5" style="cursor: pointer;">
										<div class="card border-0 bg-dark text-white">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz/shkaf-kupe-v-spalnyu.jpg" class="card-img-top rounded" alt="Шкаф-купе в спальню">
											<div class="card-img-overlay pl-1 pr-1 d-flex align-items-end">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="customRadioInline1" id="customRadioInline5">
													<h5 class="card-title mb-0 quiz-title">Шкаф-купе в спальню</h5>
												</div>
											</div>
										</div>
									</label>
								</div>
								<div class="col-md-3 col-6 pb-3">
									<label class="form-check-label w-100" for="customRadioInline6" style="cursor: pointer;">
										<div class="card border-0 bg-dark text-white">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz/uglovoy-shaf-kupe.jpg" class="card-img-top rounded" alt="Угловой шкаф-купе">
											<div class="card-img-overlay pl-1 pr-1 d-flex align-items-end">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="customRadioInline1" id="customRadioInline6">
													<h5 class="card-title mb-0 quiz-title">Угловой шкаф-купе</h5>
												</div>
											</div>
										</div>
									</label>
								</div>
								<div class="col-md-3 col-6 pb-3">
									<label class="form-check-label w-100" for="customRadioInline7" style="cursor: pointer;">
										<div class="card border-0 bg-dark text-white">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz/zerkalniy-shkaf-kupe.jpg" class="card-img-top rounded" alt="Зеркальный шкаф-купе">
											<div class="card-img-overlay pl-1 pr-1 d-flex align-items-end">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="customRadioInline1" id="customRadioInline7">
													<h5 class="card-title mb-0 quiz-title">Зеркальный шкаф-купе</h5>
												</div>
											</div>
										</div>
									</label>
								</div>
								<div class="col-md-3 col-6 pb-3">
									<label class="form-check-label w-100" for="customRadioInline8" style="cursor: pointer;">
										<div class="card border-0 bg-dark text-white">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz/korpusniy-shkaf-kupe.jpg" class="card-img-top rounded" alt="Корпусный шкаф-купе">
											<div class="card-img-overlay pl-1 pr-1 d-flex align-items-end">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="customRadioInline1" id="customRadioInline8">
													<h5 class="card-title mb-0 quiz-title">Корпусный шкаф-купе</h5>
												</div>
											</div>
										</div>
									</label>
								</div>
							</div>
						</div>
						<div class="col-12 text-center">
							<a href="#sp-calculator" onclick="question1();">
								<button class="btn btn-lg btn-corporation-orange text-light">Следующий вопрос</button>
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- /Quiz container content -->
		
		</div>
		<!-- /Quiz container -->
		
	</div>
</div>


<!-- Scripts for quiz -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	function question1() {
		
		var question = 'question1';
		
		if ( document.getElementById('customRadioInline1').checked == true ) {
			var answer = 'Шкаф-купе в прихожую';
		} else if ( document.getElementById('customRadioInline2').checked == true ) {
			var answer = 'Шкаф-купе в гостиную';
		} else if ( document.getElementById('customRadioInline3').checked == true ) {
			var answer = 'Гардеробная';
		} else if ( document.getElementById('customRadioInline4').checked == true ) {
			var answer = 'Встроенный шкаф-купе';
		} else if ( document.getElementById('customRadioInline5').checked == true ) {
			var answer = 'Шкаф-купе в спальню';
		} else if ( document.getElementById('customRadioInline6').checked == true ) {
			var answer = 'Угловой шкаф-купе';
		} else if ( document.getElementById('customRadioInline7').checked == true ) {
			var answer = 'Зеркальный шкаф-купе';
		} else if ( document.getElementById('customRadioInline8').checked == true ) {
			var answer = 'Корпусный шкафы-купе';
		}
		
		$.ajax ({
			type: "POST",
			url: "<?php echo get_stylesheet_directory_uri(); ?>/quiz-action.php",
			data: { question, answer },
			dataType: "html",
			success: function(data) {
				var p = document.getElementById('quiz-container');
				p.innerHTML = data;
			}
		});
	}
	
	function question2() {
		var question = 'question2';
		var answer1 = document.getElementById('length').value;
		var answer2 = document.getElementById('width').value;
		var answer3 = document.getElementById('height').value;
		var answer4 = document.getElementById('depth').value;
		
		$.ajax ({
			type: "POST",
			url: "<?php echo get_stylesheet_directory_uri(); ?>/quiz-action.php",
			data: { question, answer1, answer2, answer3, answer4 },
			dataType: "html",
			success: function(data) {
				var p = document.getElementById('quiz-container');
				p.innerHTML = data;
			}
		});
	}
	
	function question3() {
		
		var question = 'question3';
		
		if (document.getElementById('customRadioInline1').checked == true) {
			var answer = '2 двери';
		} else if (document.getElementById('customRadioInline2').checked == true) {
			var answer = '3 двери';
		} else if (document.getElementById('customRadioInline3').checked == true) {
			var answer = '4 двери';
		} else if (document.getElementById('customRadioInline4').checked == true) {
			var answer = '5 и более дверей';
		}
		
		$.ajax ({
			type: "POST",
			url: "<?php echo get_stylesheet_directory_uri(); ?>/quiz-action.php",
			data: { question, answer },
			dataType: "html",
			success: function(data) {
				var p = document.getElementById('quiz-container');
				p.innerHTML = data;
			}
		});
	}
	
	
	/* Question 4 (Materials) */
	function question4() {
		
		var question = 'question4';
		
		if ( document.getElementById('customRadioInline1').checked == true ) {
			var answer = 'Глухие ЛДСП';
		} else if (document.getElementById('customRadioInline2').checked == true) {
			var answer = 'Зеркало';
		} else if (document.getElementById('customRadioInline3').checked == true) {
			var answer = 'Пескоструйный рисунок';
		} else if (document.getElementById('customRadioInline4').checked == true) {
			var answer = 'Оракал';
		} else if ( document.getElementById('customRadioInline5').checked == true ) {
			var answer = 'Глухие МДФ';
		} else if (document.getElementById('customRadioInline6').checked == true) {
			var answer = 'Фотопечать';
		} else if (document.getElementById('customRadioInline7').checked == true) {
			var answer = 'Лакобель';
		} else if (document.getElementById('customRadioInline8').checked == true) {
			var answer = 'Стекло';
		}
		
		$.ajax ({
			type: "POST",
			url: "<?php echo get_stylesheet_directory_uri(); ?>/quiz-action.php",
			data: { question, answer },
			dataType: "html",
			success: function(data) {
				var p = document.getElementById('quiz-container');
				p.innerHTML = data;
			}
		});
	} /* End question 4 (Materials) */
</script>
<!-- End quiz script -->


<?php
	//include 'footer.php';
	//get_footer( 'shop' );
	
	
	get_footer();
	/*** **
	echo '<pre>';
	print_r( $query_string_args );
	echo '</pre>'; */
?> 