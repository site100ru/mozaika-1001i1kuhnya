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
 *
 *
 * Template Name: Главная
 * Template Post Type: page
 */
	
defined( 'ABSPATH' ) || exit;

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


<!-- Home -->
<div id="sp-home" class="scroll-points"></div>
<header>
	<div class="header-parallax"></div>
	<div class="container">
		<div class="row justify-content-center align-items-center" style="min-height: 75vh;">
			<!-- min-height: 50vh; -->
			<div class="col text-light py-5">
				<!-- text-center -->
				<!-- Title
				<h1 class="text-uppercase text-center fw-bold mb-4">Готовая корпусная мебель в&nbspРязани от&nbspизвестных отечественных производителей</h1> -->
				<!-- Subtitle
				<h2 class="text-uppercase header-subtitle">И собственное производство по&nbspиндивидуальным размерам></h2> -->

				<!-- Title -->
				<h1 class="text-uppercase mb-4" style="max-width: 950px;">Кухни, шкафы и другая корпусная мебель в Рязани</h1>
				<!-- Subtitle -->
				<h2 class="home-subtitle" style="text-align: left; margin-left: 0;">Готовая и на заказ по&nbspиндивидуальным размерам, собственного производства и от&nbspизвестных отечественных производителей.</h2>
				<a href="#quiz-sp" type="button" class="btn btn-lg btn-corporation-orange" style="margin-top: 40px;">Рассчитать стоимость</a>
			</div>
		</div>
	</div>
</header>
<!-- /Home -->


<!-- Portfolio -->
<section class="bg-light py-5">
	<div class="site-section pb-3">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="text-uppercase text-center text-corporation-orange fw-bold">Каталог</h2>
				</div>
			</div>

			<div class="row justify-content-center">
				<?php
					$terms = get_terms( array(
						'taxonomy' => 'product_cat',
						'hide_empty' => true,
						'pad_counts'=> true,
						'orderby' => 'menu_order',
						'parent' => 0
					) );
					if($terms) :
						foreach($terms as $term) : ?>
				<div class="col-lg-4 col-md-6 mt-5 project-entry">
					<h3 class="mb-3">
						<?php echo $term->name;?>
						<span class="fw-light">(<?php if ($term->count > 0) : ?><?php echo $term->count; ?><?php else: ?>0<?php endif; ?>)</span>
					</h3>
					<a class="subcategory-image" href="<?php echo get_term_link($term->term_id);?>">
						<div class="d-block figure rounded shadow" style="" onClick="galleryOn('num1');">
							<?php woocommerce_subcategory_thumbnail( $term );  ?>
						</div>
					</a>
				</div>
				<?php endforeach;
					endif;
				?>
			</div>
		</div>
	</div>
</section>
<!-- Portfolio -->


<!-- Portfolio section 2 --
<div id="sp-portfolio" class="scroll-points"></div>
<section class="bg-white py-5">
	<div class="container pb-2">
		<div class="row">
			<div class="col">
				<h2 class="text-uppercase text-center text-corporation-orange fw-bold mb-5">Некоторые наши работы</h2>
			</div>
		</div>

		<div class="row justify-content-center align-items-center">
			<div class="col-md-10">
				<div id="homePagePortfolio" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner m-auto">
						<div class="carousel-item active" data-bs-interval="100000">
							<img src="https://1001i1kuhnya.ru/wp-content/uploads/2021/10/IMG-20211227-WA0004-1024x768.jpg" class="rounded shadow" alt="...">
						</div>
						<div class="carousel-item" data-bs-interval="100000">
							<img src="https://1001i1kuhnya.ru/wp-content/uploads/2021/10/IMG-20211225-WA0002-1024x766.jpg" class="rounded shadow" alt="...">
						</div>
						<div class="carousel-item" data-bs-interval="100000">
							<img src="https://1001i1kuhnya.ru/wp-content/uploads/2021/10/IMG-20211129-WA0029-1024x768.jpg" class="rounded shadow" alt="...">
						</div>
						<div class="carousel-item" data-bs-interval="100000">
							<img src="https://1001i1kuhnya.ru/wp-content/uploads/2021/10/IMG-20211106-WA0032-1024x766.jpg" class="rounded shadow" alt="...">
						</div>
						<div class="carousel-item" data-bs-interval="100000">
							<img src="https://1001i1kuhnya.ru/wp-content/uploads/2021/10/IMG-20211106-WA0028-1024x766.jpg" class="rounded shadow" alt="...">
						</div>
						<div class="carousel-item" data-bs-interval="100000">
							<img src="https://1001i1kuhnya.ru/wp-content/uploads/2021/10/IMG-20211106-WA0016-1024x768.jpg" class="rounded shadow" alt="...">
						</div>
						<div class="carousel-item" data-bs-interval="100000">
							<img src="https://1001i1kuhnya.ru/wp-content/uploads/2022/01/kuhni-emal-4-1024x723.jpg" class="rounded shadow" alt="...">
						</div>
						<div class="carousel-item" data-bs-interval="100000">
							<img src="https://1001i1kuhnya.ru/wp-content/uploads/2022/01/kuhni-plenka-9-1024x768.jpg" class="rounded shadow" alt="...">
						</div>
						<div class="carousel-item" data-bs-interval="100000">
							<img src="https://1001i1kuhnya.ru/wp-content/uploads/2021/10/42-768x1024.jpg" class="rounded shadow" alt="...">
						</div>
						<div class="carousel-item" data-bs-interval="100000">
							<img src="https://1001i1kuhnya.ru/wp-content/uploads/2021/10/29-1024x768.jpg" class="rounded shadow" alt="...">
						</div>
						<div class="carousel-item" data-bs-interval="100000">
							<img src="https://1001i1kuhnya.ru/wp-content/uploads/2021/10/53-768x1024.jpg" class="rounded shadow" alt="...">
						</div>
						<div class="carousel-item" data-bs-interval="100000">
							<img src="https://1001i1kuhnya.ru/wp-content/uploads/2021/10/28-576x1024.jpg" class="rounded shadow" alt="...">
						</div>
						<div class="carousel-item" data-bs-interval="100000">
							<img src="https://1001i1kuhnya.ru/wp-content/uploads/2021/10/37-768x1024.jpg" class="rounded shadow" alt="...">
						</div>								
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#homePagePortfolio"  data-bs-slide="prev">
						<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/icons/arrow-left.png">
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#homePagePortfolio"  data-bs-slide="next">
						<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/icons/arrow-right.png">
					</button>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Portfolio section 2 -->


<?php actionsSection( 1 ); ?>



<!-- Section vystavka mebeli 2024 -->
<!-- SLIDER SECTION 1 -->
<div id="sp-slider-section-1"></div>
<section class="slider-section-1 bg-white">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col text-center pt-5">
				<h2 class="text-uppercase text-center text-corporation-orange fw-bold mb-5">Выставка мебели 2024</h2>
				<!--p class="section-sutitle text-center mb-5">Вы можете заказа у нас любой из представленных предметов мебели!</p-->
				<div class="row justify-content-center">
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-12');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-12.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-13');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-13.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-14');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-14.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-15');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-15.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-16');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-16.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-17');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-17.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-18');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-18.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-19');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-19.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-20');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-20.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-21');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-21.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-22');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-22.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-23');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-23.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-24');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-24.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-25');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-25.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-26');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-26.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-27');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-27.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-28');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-28.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-29');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-29.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-30');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-30.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-31');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-31.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-32');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-32.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-33');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-33.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-34');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-34.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-35');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-35.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-36');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-36.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-37');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-37.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-38');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-38.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-39');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-39.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-40');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-40.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-41');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-41.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-42');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-42.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-43');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-43.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
					<div class="col-md-3 mb-5">
						<a onClick="galleryOn('gallery-shkafy-cupe','img-shkafy-cupe-44');">
							<div class="light">
								<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-44.jpg" class="d-block w-100 rounded lazyload" loading="lazy" alt="..." />
								<div class="magnifier"></div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /SLIDER SECTION 1 -->

<!-- Gallery wrapper-->
<div id="galleryWrapper" style="background: rgba(0, 0, 0, 0.85);  display: none;  position: fixed;  top: 0;  bottom: 0;  left: 0;  right: 0;  z-index: 9999;">
	<div id="gallery-shkafy-cupe" class="carousel slide" data-bs-ride="false" data-bs-interval="false" style="display: none;  position: fixed;  top: 0;  height: 100%;  width: 100%;">
		<div class="carousel-indicators">
			<button id="ind-shkafy-cupe-12" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="0" aria-label="Slide 12"></button>
			<button id="ind-shkafy-cupe-13" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="1" aria-label="Slide 13"></button>
			<button id="ind-shkafy-cupe-14" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="2" aria-label="Slide 14"></button>
			<button id="ind-shkafy-cupe-15" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="3" aria-label="Slide 15"></button>
			<button id="ind-shkafy-cupe-16" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="4" aria-label="Slide 16"></button>
			<button id="ind-shkafy-cupe-17" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="5" aria-label="Slide 17"></button>
			<button id="ind-shkafy-cupe-18" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="6" aria-label="Slide 18"></button>
			<button id="ind-shkafy-cupe-19" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="7" aria-label="Slide 19"></button>
			<button id="ind-shkafy-cupe-20" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="8" aria-label="Slide 20"></button>
			<button id="ind-shkafy-cupe-21" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="9" aria-label="Slide 21"></button>
			<button id="ind-shkafy-cupe-22" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="10" aria-label="Slide 22"></button>
			<button id="ind-shkafy-cupe-23" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="11" aria-label="Slide 23"></button>
			<button id="ind-shkafy-cupe-24" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="12" aria-label="Slide 24"></button>
			<button id="ind-shkafy-cupe-25" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="13" aria-label="Slide 25"></button>
			<button id="ind-shkafy-cupe-26" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="14" aria-label="Slide 26"></button>
			<button id="ind-shkafy-cupe-27" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="15" aria-label="Slide 27"></button>
			<button id="ind-shkafy-cupe-28" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="16" aria-label="Slide 28"></button>
			<button id="ind-shkafy-cupe-29" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="17" aria-label="Slide 29"></button>
			<button id="ind-shkafy-cupe-30" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="18" aria-label="Slide 30"></button>
			<button id="ind-shkafy-cupe-31" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="19" aria-label="Slide 31"></button>
			<button id="ind-shkafy-cupe-32" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="20" aria-label="Slide 32"></button>
			<button id="ind-shkafy-cupe-33" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="21" aria-label="Slide 33"></button>
			<button id="ind-shkafy-cupe-34" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="22" aria-label="Slide 34"></button>
			<button id="ind-shkafy-cupe-35" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="23" aria-label="Slide 35"></button>
			<button id="ind-shkafy-cupe-36" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="24" aria-label="Slide 36"></button>
			<button id="ind-shkafy-cupe-37" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="25" aria-label="Slide 37"></button>
			<button id="ind-shkafy-cupe-38" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="26" aria-label="Slide 38"></button>
			<button id="ind-shkafy-cupe-39" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="27" aria-label="Slide 39"></button>
			<button id="ind-shkafy-cupe-40" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="28" aria-label="Slide 40"></button>
			<button id="ind-shkafy-cupe-41" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="29" aria-label="Slide 41"></button>
			<button id="ind-shkafy-cupe-42" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="30" aria-label="Slide 42"></button>
			<button id="ind-shkafy-cupe-43" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="31" aria-label="Slide 43"></button>
			<button id="ind-shkafy-cupe-44" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide-to="32" aria-label="Slide 44"></button>
		</div>
		<div class="carousel-inner h-100">
			<div id="img-shkafy-cupe-12" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-12.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-13" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-13.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-14" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-14.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-15" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-15.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-16" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-16.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-17" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-17.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-18" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-18.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-19" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-19.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-20" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-20.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-21" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-21.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-22" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-22.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-23" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-23.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-24" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-24.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-25" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-25.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-26" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-26.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-27" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-27.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-28" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-28.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-29" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-29.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-30" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-30.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-31" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-31.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-32" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-32.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-33" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-33.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-34" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-34.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-35" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-35.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-36" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-36.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-37" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-37.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-38" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-38.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-39" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-39.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-40" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-40.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-41" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-41.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-42" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-42.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-43" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-43.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
			<div id="img-shkafy-cupe-44" class="carousel-item h-100">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/vystavka-mebeli-2024/vystavka-mebeli-2024-44.jpg" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh" alt="..." />
					</div>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#gallery-shkafy-cupe" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

	<!-- Кнопка закрытия галереи -->
	<button type="button" onClick="closeGallery();" class="btn-close btn-close-white" style="position: fixed; top: 25px; right: 25px; z-index: 99999" aria-label="Close"></button>
</div>

<script>
  /* Функция открытия галереи */
  function galleryOn(gal, img) {
	var gallery = gal; // Получаем ID галереи
	var image = img; // Получаем ID картинки
	// Открываем обертку галереи
	document.getElementById("galleryWrapper").style.display = "block";


	// Открываем галерею
	if (gallery == "gallery-shkafy-cupe") { document.getElementById("gallery-shkafy-cupe").style.display = "block"; }

	
	// Открываем изображение
	if (image == "img-shkafy-cupe-12") {
	  document.getElementById("img-shkafy-cupe-12").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-12").classList.add("active");
	}
	if (image == "img-shkafy-cupe-13") {
	  document.getElementById("img-shkafy-cupe-13").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-13").classList.add("active");
	}
	if (image == "img-shkafy-cupe-14") {
	  document.getElementById("img-shkafy-cupe-14").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-14").classList.add("active");
	}
	if (image == "img-shkafy-cupe-15") {
	  document.getElementById("img-shkafy-cupe-15").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-15").classList.add("active");
	}
	if (image == "img-shkafy-cupe-16") {
	  document.getElementById("img-shkafy-cupe-16").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-16").classList.add("active");
	}
	if (image == "img-shkafy-cupe-17") {
	  document.getElementById("img-shkafy-cupe-17").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-17").classList.add("active");
	}
	if (image == "img-shkafy-cupe-18") {
	  document.getElementById("img-shkafy-cupe-18").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-18").classList.add("active");
	}
	if (image == "img-shkafy-cupe-19") {
	  document.getElementById("img-shkafy-cupe-19").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-19").classList.add("active");
	}
	if (image == "img-shkafy-cupe-20") {
	  document.getElementById("img-shkafy-cupe-20").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-20").classList.add("active");
	}
	if (image == "img-shkafy-cupe-21") {
	  document.getElementById("img-shkafy-cupe-21").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-21").classList.add("active");
	}
	if (image == "img-shkafy-cupe-22") {
	  document.getElementById("img-shkafy-cupe-22").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-22").classList.add("active");
	}
	if (image == "img-shkafy-cupe-23") {
	  document.getElementById("img-shkafy-cupe-23").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-23").classList.add("active");
	}
	if (image == "img-shkafy-cupe-24") {
	  document.getElementById("img-shkafy-cupe-24").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-24").classList.add("active");
	}
	if (image == "img-shkafy-cupe-25") {
	  document.getElementById("img-shkafy-cupe-25").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-25").classList.add("active");
	}
	if (image == "img-shkafy-cupe-26") {
	  document.getElementById("img-shkafy-cupe-26").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-26").classList.add("active");
	}
	if (image == "img-shkafy-cupe-27") {
	  document.getElementById("img-shkafy-cupe-27").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-27").classList.add("active");
	}
	if (image == "img-shkafy-cupe-28") {
	  document.getElementById("img-shkafy-cupe-28").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-28").classList.add("active");
	}
	if (image == "img-shkafy-cupe-29") {
	  document.getElementById("img-shkafy-cupe-29").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-29").classList.add("active");
	}
	if (image == "img-shkafy-cupe-30") {
	  document.getElementById("img-shkafy-cupe-30").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-30").classList.add("active");
	}
	if (image == "img-shkafy-cupe-31") {
	  document.getElementById("img-shkafy-cupe-31").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-31").classList.add("active");
	}
	if (image == "img-shkafy-cupe-32") {
	  document.getElementById("img-shkafy-cupe-32").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-32").classList.add("active");
	}
	if (image == "img-shkafy-cupe-33") {
	  document.getElementById("img-shkafy-cupe-33").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-33").classList.add("active");
	}
	if (image == "img-shkafy-cupe-34") {
	  document.getElementById("img-shkafy-cupe-34").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-34").classList.add("active");
	}
	if (image == "img-shkafy-cupe-35") {
	  document.getElementById("img-shkafy-cupe-35").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-35").classList.add("active");
	}
	if (image == "img-shkafy-cupe-36") {
	  document.getElementById("img-shkafy-cupe-36").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-36").classList.add("active");
	}
	if (image == "img-shkafy-cupe-37") {
	  document.getElementById("img-shkafy-cupe-37").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-37").classList.add("active");
	}
	if (image == "img-shkafy-cupe-38") {
	  document.getElementById("img-shkafy-cupe-38").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-38").classList.add("active");
	}
	if (image == "img-shkafy-cupe-39") {
	  document.getElementById("img-shkafy-cupe-39").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-39").classList.add("active");
	}
	if (image == "img-shkafy-cupe-40") {
	  document.getElementById("img-shkafy-cupe-40").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-40").classList.add("active");
	}
	if (image == "img-shkafy-cupe-41") {
	  document.getElementById("img-shkafy-cupe-41").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-41").classList.add("active");
	}
	if (image == "img-shkafy-cupe-42") {
	  document.getElementById("img-shkafy-cupe-42").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-42").classList.add("active");
	}
	if (image == "img-shkafy-cupe-43") {
	  document.getElementById("img-shkafy-cupe-43").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-43").classList.add("active");
	}
	if (image == "img-shkafy-cupe-44") {
	  document.getElementById("img-shkafy-cupe-44").classList.add("active");
	  document.getElementById("ind-shkafy-cupe-44").classList.add("active");
	} /* Ending close gallery function */
  }


	// Кнопка закрытия галереи
	function closeGallery() {
		// Закрываем обертку галереи
		document.getElementById("galleryWrapper").style.display = "none";
		// Закрываем галерею
		document.getElementById("gallery-shkafy-cupe").style.display = "none";
		// Закрываем изображения и индикаторы изображений галереи
		document.getElementById("img-shkafy-cupe-12").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-12").classList.remove("active");
		document.getElementById("img-shkafy-cupe-13").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-13").classList.remove("active");
		document.getElementById("img-shkafy-cupe-14").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-14").classList.remove("active");
		document.getElementById("img-shkafy-cupe-15").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-15").classList.remove("active");
		document.getElementById("img-shkafy-cupe-16").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-16").classList.remove("active");
		document.getElementById("img-shkafy-cupe-17").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-17").classList.remove("active");
		document.getElementById("img-shkafy-cupe-18").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-18").classList.remove("active");
		document.getElementById("img-shkafy-cupe-19").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-19").classList.remove("active");
		document.getElementById("img-shkafy-cupe-20").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-20").classList.remove("active");
		document.getElementById("img-shkafy-cupe-21").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-21").classList.remove("active");
		document.getElementById("img-shkafy-cupe-22").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-22").classList.remove("active");
		document.getElementById("img-shkafy-cupe-23").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-23").classList.remove("active");
		document.getElementById("img-shkafy-cupe-24").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-24").classList.remove("active");
		document.getElementById("img-shkafy-cupe-25").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-25").classList.remove("active");
		document.getElementById("img-shkafy-cupe-26").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-26").classList.remove("active");
		document.getElementById("img-shkafy-cupe-27").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-27").classList.remove("active");
		document.getElementById("img-shkafy-cupe-28").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-28").classList.remove("active");
		document.getElementById("img-shkafy-cupe-29").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-29").classList.remove("active");
		document.getElementById("img-shkafy-cupe-30").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-30").classList.remove("active");
		document.getElementById("img-shkafy-cupe-31").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-31").classList.remove("active");
		document.getElementById("img-shkafy-cupe-32").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-32").classList.remove("active");
		document.getElementById("img-shkafy-cupe-33").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-33").classList.remove("active");
		document.getElementById("img-shkafy-cupe-34").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-34").classList.remove("active");
		document.getElementById("img-shkafy-cupe-35").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-35").classList.remove("active");
		document.getElementById("img-shkafy-cupe-36").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-36").classList.remove("active");
		document.getElementById("img-shkafy-cupe-37").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-37").classList.remove("active");
		document.getElementById("img-shkafy-cupe-38").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-38").classList.remove("active");
		document.getElementById("img-shkafy-cupe-39").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-39").classList.remove("active");
		document.getElementById("img-shkafy-cupe-40").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-40").classList.remove("active");
		document.getElementById("img-shkafy-cupe-41").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-41").classList.remove("active");
		document.getElementById("img-shkafy-cupe-42").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-42").classList.remove("active");
		document.getElementById("img-shkafy-cupe-43").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-43").classList.remove("active");
		document.getElementById("img-shkafy-cupe-44").classList.remove("active");
		document.getElementById("ind-shkafy-cupe-44").classList.remove("active");
	}
</script>
<!-- /Section vystavka mebeli 2024 -->



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
						<h3 class="text-center mb-5">
							<!--span class="me-2" style="color: #A5A5A5;">1/7</span-->Какая мебель Вас интересует?
						</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-1-1">
									<input type="radio" id="answer-1-1" name="quostion-1" class="checkbox" value="Кухня">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/1-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Кухня</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-1-2">
									<input type="radio" id="answer-1-2" name="quostion-1" class="checkbox" value="Шкаф или гардеробная">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/1-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Шкаф или гардеробная</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-1-3">
									<input type="radio" id="answer-1-3" name="quostion-1" class="checkbox" value="Другая корпусная мебель">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/1-3.jpg" style="width: 100%;">
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
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/2-1-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Прямая</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-1-2">
									<input type="radio" id="answer-2-1-2" name="quostion-2-1" class="checkbox" value="Угловая">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/2-1-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Угловая</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-1-3">
									<input type="radio" id="answer-2-1-3" name="quostion-2-1" class="checkbox" value="П-образная">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/2-1-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">П-образная</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-1-4">
									<input type="radio" id="answer-2-1-4" name="quostion-2-1" class="checkbox" value="С островком">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/2-1-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">С островком</h3>
							</div>
							<!--div class="col-2">
								<label class="option_item mb-3" for="answer-2-1-5">
									<input type="radio" id="answer-2-1-5" name="quostion-2-1" class="checkbox" value="Пока не знаю">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/2-1-5.jpg" style="width: 100%;">
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
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/4-1-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Современный</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-4-1-2">
									<input type="radio" id="answer-4-1-2" name="quostion-4-1" class="checkbox" value="Классический">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/4-1-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Классический</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-4-1-3">
									<input type="radio" id="answer-4-1-3" name="quostion-4-1" class="checkbox" value="Лофт">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/4-1-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Лофт</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-4-1-4">
									<input type="radio" id="answer-4-1-4" name="quostion-4-1" class="checkbox" value="Пока не знаю, нужна консультация">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/4-1-4.jpg" style="width: 100%;">
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
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/5-1-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">ЛДСП</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-2">
									<input type="radio" id="answer-5-1-2" name="quostion-5-1" class="checkbox" value="Пленка">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/5-1-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">МДФ ПВХ (пленка)</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-3">
									<input type="radio" id="answer-5-1-3" name="quostion-5-1" class="checkbox" value="Эмаль">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/5-1-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Эмаль, шпон</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-4">
									<input type="radio" id="answer-5-1-4" name="quostion-5-1" class="checkbox" value="Пластик">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/5-1-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пластик</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-5">
									<input type="radio" id="answer-5-1-5" name="quostion-5-1" class="checkbox" value="Массив">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/5-1-5.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">AGT</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-6">
									<input type="radio" id="answer-5-1-6" name="quostion-5-1" class="checkbox" value="Пока не знаю, нужна консультация">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/5-1-6.jpg" style="width: 100%;">
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
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/6-1-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Скидка 10%</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-1-2">
									<input type="radio" id="answer-6-1-2" name="quostion-6-1" class="checkbox" value="Беспроцентная рассрочка на 6 месяцев">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/6-1-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Беспроцентная рассрочка на 6 месяцев</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-1-3">
									<input type="radio" id="answer-6-1-3" name="quostion-6-1" class="checkbox" value="Скидка 15% на заказ шкафа в теченее года">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/6-1-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Скидка 15% на заказ шкафа в теченее года</h3>
							</div>
							<!--div class="col-2">
								<label class="option_item mb-3" for="answer-6-1-4">
									<input type="radio" id="answer-6-1-4" name="quostion-6-1" class="checkbox" value="С островком">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/6-1-4.jpg" style="width: 100%;">
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
						<form method="post" action="https://1001i1kuhnya.ru/wp-content/themes/mozaika-1001i1kuhnya/mails/get_calculate_kitchen.php">
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
									<input type="radio" id="answer-2-2-1" name="quostion-2-2" class="checkbox" value="Купейный">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/2-2-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Купейный</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-2">
									<input type="radio" id="answer-2-2-2" name="quostion-2-2" class="checkbox" value="Встроенный">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/2-2-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Встроенный</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-3">
									<input type="radio" id="answer-2-2-3" name="quostion-2-2" class="checkbox" value="Угловой">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/2-2-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Угловой</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-4">
									<input type="radio" id="answer-2-2-4" name="quostion-2-2" class="checkbox" value="Распашной">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/2-2-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Распашной</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-5">
									<input type="radio" id="answer-2-2-5" name="quostion-2-2" class="checkbox" value="Гардеробная">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/2-2-5.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Гардеробная</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-6">
									<input type="radio" id="answer-2-2-6" name="quostion-2-2" class="checkbox" value="Пока не знаю">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/2-2-6.jpg" style="width: 100%;">
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
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/3-2-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">ЛДСП</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-3-2-2">
									<input type="radio" id="answer-3-2-2" name="quostion-3-2" class="checkbox" value="Пескоструй">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/3-2-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пескоструй</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-3-2-3">
									<input type="radio" id="answer-3-2-3" name="quostion-3-2" class="checkbox" value="Зеркало">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/3-2-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Зеркало</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-3-2-4">
									<input type="radio" id="answer-3-2-4" name="quostion-3-2" class="checkbox" value="Фотопечать">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/3-2-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Фотопечать</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-3-2-5">
									<input type="radio" id="answer-3-2-5" name="quostion-3-2" class="checkbox" value="Комбинированный">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/3-2-5.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Комбинированный</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-3-2-6">
									<input type="radio" id="answer-3-2-6" name="quostion-3-2" class="checkbox" value="Пока не знаю">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/3-2-6.jpg" style="width: 100%;">
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
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/ico/check-background.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">1 м</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-2">
									<input type="radio" id="answer-4-2-2" name="quostion-4-2" class="checkbox" value="1,5">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/ico/check-background.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">1,5</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-3">
									<input type="radio" id="answer-4-2-3" name="quostion-4-2" class="checkbox" value="2">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/ico/check-background.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">2 м</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-4">
									<input type="radio" id="answer-4-2-4" name="quostion-4-2" class="checkbox" value="2,5">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/ico/check-background.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">2,5 м</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-5">
									<input type="radio" id="answer-4-2-5" name="quostion-4-2" class="checkbox" value="3">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/ico/check-background.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">3</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-6">
									<input type="radio" id="answer-4-2-6" name="quostion-4-2" class="checkbox" value="3,5">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/ico/check-background.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">3,5 м</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-7">
									<input type="radio" id="answer-4-2-7" name="quostion-4-2" class="checkbox" value="4">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/ico/check-background.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">4 м</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-8">
									<input type="radio" id="answer-4-2-8" name="quostion-4-2" class="checkbox" value="4,5">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/ico/check-background.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">4,5 м</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-9">
									<input type="radio" id="answer-4-2-9" name="quostion-4-2" class="checkbox" value="5">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/ico/check-background.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">5 м</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-10">
									<input type="radio" id="answer-4-2-10" name="quostion-4-2" class="checkbox" value=">5">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/ico/check-background.svg" style="width: 100%;">
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
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/5-2-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">1 дверь</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-2-2">
									<input type="radio" id="answer-5-2-2" name="quostion-5-2" class="checkbox" value="2 двери">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/5-2-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">2 двери</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-2-3">
									<input type="radio" id="answer-5-2-3" name="quostion-5-2" class="checkbox" value="3 двери">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/5-2-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">3 двери</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-2-4">
									<input type="radio" id="answer-5-2-4" name="quostion-5-2" class="checkbox" value="4 двери">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/5-2-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">4 двери</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-2-5">
									<input type="radio" id="answer-5-2-5" name="quostion-5-2" class="checkbox" value="5 дверей">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/5-2-5.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">5 дверей</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-2-6">
									<input type="radio" id="answer-5-2-6" name="quostion-5-2" class="checkbox" value="Более 5 дверей">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/5-2-6.jpg" style="width: 100%;">
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
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/6-2-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Скидка 15%</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-2-2">
									<input type="radio" id="answer-6-2-2" name="quostion-6-2" class="checkbox" value="Беспроцентная рассрочка на 6 месяцев">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/6-2-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Беспроцентная рассрочка на 6 месяцев</h3>
							</div>
							<!--div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-2-3">
									<input type="radio" id="answer-6-2-3" name="quostion-6-2" class="checkbox" value="Бесплатная доставка и установка">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/6-2-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Бесплатная доставка</h3>
							</div-->
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-2-4">
									<input type="radio" id="answer-6-2-4" name="quostion-6-2" class="checkbox" value="Скидка 10% на заказ кухни в теченее года">
									<div class="option_inner">
										<div class="shadow-wrapper">
											<div class="shadow-wrapper-decoration"></div>
										</div>
										<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz-new/6-2-4.jpg" style="width: 100%;">
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
						<form method="post" action="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/mails/get_calculate_closet.php">
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


					<!-- ВЛПРОСЫ ПО ДРУГОЙ МЕБЕЛИ -->
					<div class="col-12" id="2-3" style="display: none;">
						<h3 class="text-center mb-5">Для расчета стоимости опишите Ваше изделие</h3>
						<form method="post" action="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/mails/get_calculate.php" enctype="multipart/form-data">
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
									<input type="button" value="Назад" class="btn btn-corporate-color-1-outline" onclick="previousQuostion( '2-3' );">
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



<!-- About 2 --
<div id="sp-about-2"></div>
<section id="about" class="bg-light pt-md-3 pb-md-3">
	<div class="container">
		<div class="row pt-5">
			<div class="col text-dark">
				<h2 class="text-uppercase text-center text-corporation-orange fw-bold mb-5">О нас</h2>
				<div class="row justify-content-center">
					<div class="col-md-6 pb-5 order-1 order-md-2">
						<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/about-img.jpg" class="rounded shadow" style="max-width: 100%;">
					</div>
					<div class="col-md-6 pb-5 order-2 order-md-1">
						<p>Если театр начинается с вешалки, то уют в доме начинается с кухни. Бесспорно, кухня является главной артерией в любой квартире, именно там собираются все жильцы, предвкушая очередной приятный вечер. Подумайте о своей кухне! Наверняка, её образ навевает вам самые теплые воспоминания о вечерах, проведенных в её объятиях за чашечкой кофе с друзьями, а быть может, вы вспоминаете шумную семейную вечеринку, с тортами, искренними пожеланиями и родными улыбками, а, возможно, вы любите проводить время наедине с собой и наслаждаетесь каждой минутой, проведенной в своих мыслях с горячим шоколадом в руках. Так или иначе, образ кухни диктует дизайн. И если ваши мечты об идеальной кухне ещё не сбылись, то магазин 1001 и 1 кухня — это самый подходящим проводником в мир реализации ваших фантазий!</p>

						<p>Магазин 1001 и 1 кухня предоставляет коллекцию моделей в классическом изысканном стиле, проверенным временем и хорошим вкусом, а также целый ряд кухонь в стиле модерн, но не стоит забывать и о том, что наш магазин готов помочь воплотить непосредственно ваше творческое решение.</p>

						<p>За несколько лет работы мы завоевали доверие и уважение большого числа покупателей из многих городов России. Кухни магазина 1001 и 1 кухня соответствуют европейским стандартам и доступны в ценовом отношении.</p>
					</div>
					<div class="col-md-6 pb-5 order-4 order-md-4">
						<p>Мы готовы вам предложить:</p>
						<ul style="font-size: 1.125rem; list-style: none; padding-left: 0;">
							<li><i class="fas fa-check me-2 text-corporation-orange"></i>кухонные модули различных стилей;</li>
							<li><i class="fas fa-check me-2 text-corporation-orange"></i>разнообразие высококачественных фасадов и фрезеровок, а также цветовой гаммы из материалов ПВХ, итальянского пластика в алюминиевой рамке фирмы ABET, массива дуба и березы, а также эмаль с различными эффектами: высокий глянец, жемчуг, перламутр, ну и, конечно же, непревзойденная эмаль Хамелеон 9 различных цветов;</li>
							<li><i class="fas fa-check me-2 text-corporation-orange"></i>большой выбор столешниц и стеновых панелей, а также столешниц из жидкого камня;</li>
							<li><i class="fas fa-check me-2 text-corporation-orange"></i>разнообразие материалов, цветов, комплектующих и другой фурнитуры кухонных гарнитуров.</li>
						</ul>
						<p>Вся наша мебель изготавливается на высококачественном специализированном оборудовании. В связи с ростом объемов производства магазин 1001 и 1 кухня внедряет новейшее оборудование для изготовления еще более качественной мебели.</p>
						<p>Преимущество нашего магазина в том, что мы изготавливаем любой нестандартный заказ, соответственно, огромный выбор элементов позволяет подобрать мебель в кухню любой конфигурации и площади.</p>
						<p>Обращайтесь к нам, мы предложим вам как недорогие кухни эконом-класса, так и элитные стильные кухни, укомплектованные современными механизмами и аксессуарами.</p>
						<p class="mb-0">Богатый ассортимент, грамотные менеджеры, великолепные кухни – убедительный аргумент заказать кухню для вас именно в нашем магазине 1001 и 1 кухня.</p>
					</div>
					<div class="col-md-6 pb-5 order-3 order-md-3">
						<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/about-img-2.jpg" class="rounded shadow" style="max-width: 100%;">
					</div>
				</div>
			</div>
		</div>
	</div>
</section-->


<?php get_template_part( 'section-about-us' ); ?>


<!-- Загрузка изображений с приоритетом -->
<script>
	if ("loading" in HTMLImageElement.prototype) {
		const images = document.querySelectorAll('img[loading="lazy"]');
		images.forEach((img) => {
			img.src = img.dataset.src;
		});
  } else {
		// Dynamically import the LazySizes library
		const script = document.createElement("script");
		script.src = "https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.1.8/lazysizes.min.js";
		document.body.appendChild(script);
	}
</script>


<?php
	get_footer();
?>