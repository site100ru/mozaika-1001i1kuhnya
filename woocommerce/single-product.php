<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>


<!-- Header parallax --
<header class="header-parallax">
	<div class="parallax-2"></div>
	<div class="container"> <!-- container/container-fluid --
		<div class="row justify-content-center align-items-center" style="min-height: 50vh;"> <!-- min-height: 75vh; --
			<div class="col-md-8 text-center text-light py-5">
				<h1 class="text-uppercase fw-bold mb-3"><?php echo get_the_title(); ?></h1>
			</div>
		</div>
	</div>
</header>
<!-- /Header parallax -->


<?php
	/**
	 * woocommerce_before_main_content hook.
	 *
	 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
	 * @hooked woocommerce_breadcrumb - 20
	 */
	//do_action( 'woocommerce_before_main_content' );
?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php wc_get_template_part( 'content', 'single-product' ); ?>

<?php endwhile; // end of the loop. ?>

<?php
	/**
	 * woocommerce_after_main_content hook.
	 *
	 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
	 */
	//do_action( 'woocommerce_after_main_content' );
?>

<?php
	/**
	 * woocommerce_sidebar hook.
	 *
	 * @hooked woocommerce_get_sidebar - 10
	 */
	//do_action( 'woocommerce_sidebar' );
?>


<!-- Process -->
<section class="process-section shkafy-cupe-section bg-white pt-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-uppercase text-center text-corporation-orange fw-bold mb-5">Как заказать кухню по своим размерам</h2>
				<div class="row justify-content-center">
					<div class="col-md-4 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/1.png" class="img-fluid">
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
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/2.png" class="img-fluid">
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
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/3.png" class="img-fluid">
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
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/4.png" class="img-fluid">
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
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/5.png" class="img-fluid">
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
<section class="process-section shkafy-cupe-section bg-light pt-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-uppercase text-center text-corporation-orange fw-bold mb-5">НАШИ КОНКУРЕНТНЫЕ ПРЕИМУЩЕСТВА</h2>
				<div class="row justify-content-center">
					<div class="col-md-6 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/adv-1.png" class="img-fluid">
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
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/adv-2.png" class="img-fluid">
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
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/adv-3.png" class="img-fluid">
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
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/adv-4.png" class="img-fluid">
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
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/adv-5.png" class="img-fluid">
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
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/adv-6.png" class="img-fluid">
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


<!-- Gallery wrapper -->
<div id="galleryWrapper" style="background: rgba(0,0,0,0.85); display: none; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 9999;">
	
	<div id="gallery-<?php the_ID(); ?>" class="carousel slide" data-bs-ride="false" data-bs-interval="false" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
				
		<!--div class="carousel-indicators">
			<?php
				for ( $i=1; $i<=9; $i++ ) {
					if ( get_post_meta($post->ID, '_img-'.$i ) ) { ?>
						<button class="carousel-indicator-2<?php if ( $i == 1 ) echo ' active'; ?>" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $i-1; ?>" aria-label="Slide 1"></button>
					<?php }
				}
			?>
		</div-->
		
		<div class="carousel-inner h-100">
			<?php
				$attachment_ids = $product->get_gallery_image_ids();
				$count = false;
				foreach ( $attachment_ids as $attachment_id ) {
				
			?>
				<div class="carousel-item carousel-item-2 h-100<?php if ( $count == false ) { echo ' active'; $count = true; } ?>">
					<div class="row align-items-center h-100">
						<div class="col text-center">
							<img src="<?php echo wp_get_attachment_url( $attachment_id ); ?>" class="img-fluid" loading="lazy" style="max-width: 90vw; max-height: 90vh;" alt="...">
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#gallery-<?php the_ID(); ?>" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#gallery-<?php the_ID(); ?>" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

	<!-- Кнопка закрытия галереи -->
	<button type="button" onClick="closeGallery();" class="btn-close btn-close-white" style="position: fixed; top: 25px; right: 25px; z-index: 99999;" aria-label="Close"></button>
</div> <!-- #galleryWrapper -->


<script>
	/* Функция открытия галереи */
	function galleryOn(gal) {
		var gallery = gal; // Получаем ID галереи
		// Открываем обертку галереи
		document.getElementById('galleryWrapper').style.display = 'block';
		
		/* Открываем галерею */
		document.getElementById(gallery).style.display = "block";
		
	}

	/* Кнопка закрытия галереи */
	function closeGallery() {
		// Закрываем обертку галереи
		document.getElementById('galleryWrapper').style.display = 'none';
		document.getElementById("gallery-<?php the_ID(); ?>").style.display = "none";
	}
</script>


<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */

?>