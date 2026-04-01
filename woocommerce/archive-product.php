<?php
 
	/**
	 * Template Name: Каталог
	 * Template Post Type: page, product_cat
	 */

	defined( 'ABSPATH' ) || exit;

	//get_header( 'shop' );
	//include 'header.php';
	get_header();

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
<header class="header-parallax">
	<div class="parallax-2 header-archive-products"></div>
	<div class="container"> <!-- container/container-fluid -->
		<div class="row justify-content-center align-items-center"> <!-- min-height: 75vh; -->
			<div class="col text-light py-5"> <!-- text-center -->
				<!-- Title -->
				<h1 class="text-uppercase text-md-center fw-bold mb-2"><?php single_cat_title(); ?> купить в Рязани</h1>
				<!-- Subtitle -->
				<h2 class="text-md-center fw-normal mb-3 mb-md-4">Готовые и на заказ</h2>
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


<!-- Section Quiz -->
<div id="quiz-sp" class="scroll-points"></div>
<section id="quiz" class="py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col">
				<h2 class="text-uppercase text-center text-corporation-orange fw-bold">Ответьте на несколько вопросов ниже<br>и узнайте предварительную стоимость Вашей мебели</h2>
				<div class="title-line mb-5"></div>
				<div class="row justify-content-center">
			
					<!--  ПЕРВЫЙ ОБЩИЙ ВОПРОС -->
					<div class="col-12" id="1">
						<h3 class="text-center mb-5"><!--span class="me-2" style="color: #A5A5A5;">1/7</span-->Какая мебель Вас интересует?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-1-1">
									<input type="radio" id="answer-1-1" name="quostion-1" class="checkbox" value="Кухня">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/1-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Кухня</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-1-2">
									<input type="radio" id="answer-1-2" name="quostion-1" class="checkbox" value="Шкаф или гардеробная">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/1-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Шкаф или гардеробная</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-1-3">
									<input type="radio" id="answer-1-3" name="quostion-1" class="checkbox" value="Другая корпусная мебель">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/1-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Другая корпусная мебель</h3>
							</div>
						</div>
						<div class="row">
							<div class="col text-center">
								<input type="button" value="Далее" class="btn btn-corporation-orange" style="width: 175px;" onclick="nextQuostion( '1' );">
							</div>
						</div>
					</div>
					<!--  /ПЕРВЫЙ ОБЩИЙ ВОПРОС -->
					
					
					<!-- ВОПРОСЫ ПО КУХНЯМ -->
					<div class="col-12" id="2-1" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">2/7</span>Какая планировка кухни Вам нужна?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-1-1">
									<input type="radio" id="answer-2-1-1" name="quostion-2-1" class="checkbox" value="Прямая">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/2-1-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Прямая</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-1-2">
									<input type="radio" id="answer-2-1-2" name="quostion-2-1" class="checkbox" value="Угловая">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/2-1-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Угловая</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-1-3">
									<input type="radio" id="answer-2-1-3" name="quostion-2-1" class="checkbox" value="П-образная">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/2-1-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">П-образная</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-1-4">
									<input type="radio" id="answer-2-1-4" name="quostion-2-1" class="checkbox" value="С островком">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/2-1-4.jpg" style="width: 100%;">
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
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">3/7</span>Укажите размеры</h3>
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
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">3/7</span>Укажите размеры</h3>
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
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">3/7</span>Укажите размеры</h3>
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
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">3/7</span>Укажите размеры в метрах</h3>
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
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">4/7</span>Какой стиль кухни Вы рассматриваете?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-4-1-1">
									<input type="radio" id="answer-4-1-1" name="quostion-4-1" class="checkbox" value="Современный">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/4-1-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Современный</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-4-1-2">
									<input type="radio" id="answer-4-1-2" name="quostion-4-1" class="checkbox" value="Классический">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/4-1-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Классический</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-4-1-3">
									<input type="radio" id="answer-4-1-3" name="quostion-4-1" class="checkbox" value="Лофт">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/4-1-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Лофт</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-4-1-4">
									<input type="radio" id="answer-4-1-4" name="quostion-4-1" class="checkbox" value="Пока не знаю, нужна консультация">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/4-1-4.jpg" style="width: 100%;">
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
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">5/7</span>Какой материал фасада кухни Вы хотите?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-1">
									<input type="radio" id="answer-5-1-1" name="quostion-5-1" class="checkbox" value="ЛДСП/ЛМДФ">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/5-1-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">ЛДСП</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-2">
									<input type="radio" id="answer-5-1-2" name="quostion-5-1" class="checkbox" value="Пленка">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/5-1-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">МДФ ПВХ (пленка)</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-3">
									<input type="radio" id="answer-5-1-3" name="quostion-5-1" class="checkbox" value="Эмаль">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/5-1-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Эмаль, шпон</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-4">
									<input type="radio" id="answer-5-1-4" name="quostion-5-1" class="checkbox" value="Пластик">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/5-1-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пластик</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-5">
									<input type="radio" id="answer-5-1-5" name="quostion-5-1" class="checkbox" value="Массив">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/5-1-5.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">AGT</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-6">
									<input type="radio" id="answer-5-1-6" name="quostion-5-1" class="checkbox" value="Пока не знаю, нужна консультация">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/5-1-6.jpg" style="width: 100%;">
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
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">6/7</span>Какой подарок Вы хотите получить в случае заказа?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-1-1">
									<input type="radio" id="answer-6-1-1" name="quostion-6-1" class="checkbox" value="Скидка 10%">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/6-1-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Скидка 10%</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-1-2">
									<input type="radio" id="answer-6-1-2" name="quostion-6-1" class="checkbox" value="Беспроцентная рассрочка на 6 месяцев">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/6-1-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Беспроцентная рассрочка на 6 месяцев</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-1-3">
									<input type="radio" id="answer-6-1-3" name="quostion-6-1" class="checkbox" value="Скидка 15% на заказ шкафа в теченее года">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/6-1-4.jpg" style="width: 100%;">
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
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">7/7</span>Введите Ваши контакты</h3>
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
					
					
					<!-- ВОПРОСЫ ПО ШКАФАМ -->
					<div class="col-12" id="2-2" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">2/7</span>Какой тип шкафа Вам нужен?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-1">
									<input type="radio" id="answer-2-2-1" name="quostion-2-2" class="checkbox" value="Корпусный">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/2-2-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Корпусный</h3>
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
									<input type="radio" id="answer-2-2-4" name="quostion-2-2" class="checkbox" value="Радиусный">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/2-2-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Радиусный</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-5">
									<input type="radio" id="answer-2-2-5" name="quostion-2-2" class="checkbox" value="Гардеробный">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/2-2-5.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Гардеробный</h3>
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
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">3/7</span>Какой материал фасада шкафа Вы хотите?</h3>
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
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">4/7</span>Какая ориентировочная ширина шкафа планируется?</h3>
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
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">5/7</span>Какое количество дверей Вы предполагаете?</h3>
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
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">6/7</span>Какой подарок Вы хотите получить в случае заказа?</h3>
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
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-2-3">
									<input type="radio" id="answer-6-2-3" name="quostion-6-2" class="checkbox" value="Бесплатная доставка и установка">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz-new/6-2-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Бесплатная доставка и установка</h3>
							</div>
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
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">7/7</span>Введите Ваши контакты</h3>
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
					
					
					<!-- ВОПРОСЫ ПО ДРУГОЙ МЕБЕЛИ -->
					<div class="col-12" id="2-3" style="display: none;">
						<h3 class="text-center mb-5">Для расчета стоимости опишите Ваше изделие</h3>
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
									<!--input type="text" name="tel" class="form-control form-control-corporate-color-1 telMask" placeholder="Ваш телефон*" required="" inputmode="text"-->
									<input type="text" name="tel" class="form-control form-control-corporate-color-1 telMask" placeholder="Ваш телефон*" required>
								</div>
							</div>
							<div class="row justify-content-center">
								<div class="col text-center" style="margin-top: 35px;">
									<input type="hidden" id="g-recaptcha-response-get-calculate" name="g-recaptcha-response">
									<input type="button" value="Назад" class="btn btn-corporate-color-1-outline" onclick="previousQuostion( '2-3' );">
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


<?php
	
	//include 'footer.php';
	//get_footer( 'shop' );
	get_footer();
?> 