<?php
		
	// Template Name: Наши работы 2
	// Template Post Type: page

	//include 'header.php';
	get_header();

?>


<!-- Header parallax -->
<header>
	<div class="header-about-parallax"></div>
	<div class="container"> <!-- container/container-fluid -->
		<div class="row align-items-center" style="min-height: 50vh;"> <!-- min-height: 75vh; -->
			<div class="col-md-8 text-light py-5"> <!-- text-center -->
				<h1 class="text-uppercase fw-bold mb-3">Наши работы</h1>
			</div>
		</div>
	</div>
</header>
<!-- /Header parallax -->


<!-- Portfolio section 2 -->
<div id="sp-portfolio" class="scroll-points"></div>
<section class="bg-white">
	<div class="container py-5" style="min-height: 75vh;">
		<div class="row">
			<div class="col text-center mb-5">
				<h2 class="text-uppercase text-corporation-orange fw-bold mb-5">Вы можете выбрать подходящий вариант из нашего портфолио</h2>
				
				<div class="nav-scroller mb-0" id="navbarSupportedContent2">
					<ul class="nav justify-content-md-center d-flex m-auto pb-0">
						<li class="nav-item">
							<a class="nav-link" href="https://1001i1kuhnya.ru/наши-работы/">Все наши работы</a>
						</li>
						<?php
							$obj = get_queried_object();
							$current_category_name = $obj->name;
							
							$args = [
								'taxonomy'		 => [ 'portfolio-cat' ],
								'orderby'  		=> 'slug',
								'order'    		=> 'ASC',
								'post__not_in'	 => array( 42 ) // Выводим все категории портфолио кроме Разное
							];
							
							$terms = get_terms( $args );
							
							foreach( $terms as $term ) { ?>
								<li class="nav-item">
									<a class="nav-link<?php if ( $current_category_name == $term->name ) { echo ' active'; } ?>" href="<?php echo get_term_link( $term->term_id ); ?>"><?php echo $term->name; ?></a>
								</li>
							<?php }
						?>
					</ul>
				</div>
				<?php /* Добавить код ниже если мобильное меню не умещается в одну строчку */ ?>
				<!--div class="d-md-none text-center mb-4">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/left-right-finger.png" style="opacity: 1; max-width: 25px;">
				</div-->
			</div>
		</div>
		


		
		<div class="row">
			<?php
				$obj = get_queried_object();
				$portfolio_cat = $obj->slug;
				
				$args = [
					'post_type'		=> 'portfolio',
					'numberposts' => 999,
					//'orderby'   	=> 'date',
					//'order'			=> 'DESC',
					'portfolio-cat'	=> $portfolio_cat,
					'post__not_in'	=> array( 42 ) // Выводим все категории портфолио кроме Разное
				];
				
				$query = new WP_Query( $args );
				$count = 1;
				while( $query->have_posts() ) : $query->the_post(); ?>
					<div class="col-md-6">
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
													<div class="single-product-img approximation">
														<img src="<?php echo get_post_meta($post->ID, '_img-'.$i )[0]; ?>" class="shadow rounded" alt="..." loading="lazy">
														<div class="magnifier" style="position: absolute; background: url(https://gyard.ru/wp-content/themes/houses-construction/images/icons/private-eye-magnifying-glass.png) no-repeat center; top: 0; bottom: 0; left: 0; right: 0;">
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
	</div>
</section>


<!-- Gallery wrapper-->
<div id="galleryWrapper" style="background: rgba(0,0,0,0.85); display: none; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 9999;">
	
	
	<?php
		// параметры по умолчанию
		$posts = get_posts( array(
			'numberposts' => 999,
			'orderby'     => 'date',
			'order'       => 'DESC',
			'post_type'   => 'portfolio',
			//'post__not_in' => array( 42 ) // Выводим все категории портфолио кроме Разное
		) );
		
		foreach( $posts as $post ) { setup_postdata($post); ?>

			<div id="gallery-<?php echo $post->ID; ?>" class="carousel slide" data-bs-ride="carousel" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
				<div class="carousel-indicators">
					<?php
						
						/*
						$images = get_post_gallery_images();
						$count2 = 0;
						foreach ( $images as $image ) {
							
							
							if ( $count2 == 0 ) { ?>
								
								<button id="ind-<?php echo $post->ID; ?>-<?php echo $count2; ?>" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $count2; ?>" aria-label="Slide 3"></button>
								
							<?php $count2 = $count2 + 1; } else { ?>
								
								<button id="ind-<?php echo $post->ID; ?>-<?php echo $count2; ?>" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $count2; ?>" aria-label="Slide 3"></button>
								
							<?php $count2 = $count2 + 1; }
						}*/
						
						
						
						
						
						
						
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
						
						/*
						$images = get_post_gallery_images();
						$count2 = 0;
						foreach ( $images as $image ) { ?>
							<div id="img-<?php echo $post->ID; ?>-<?php echo $count2; ?>" class="carousel-item h-100">
								<div class="row align-items-center h-100">
									<div class="col text-center">
										<img src="<?php echo $image; ?>" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
									</div>
								</div>
							</div>
							
						<?php  $count2 = $count2 + 1; } */
						
						
						$count2 = 0;
						for ( $i=1; $i<=9; $i++ ) {
							if ( get_post_meta($post->ID, '_img-'.$i ) ) { ?>
								<div id="img-<?php echo $post->ID; ?>-<?php echo $count2; ?>" class="carousel-item h-100 <?php // if ( $i == 1 ) echo ' active'; ?>" data-bs-interval="999999999">
									<div class="row align-items-center h-100">
										<div class="col text-center">
											<img src="<?php echo get_post_meta($post->ID, '_img-'.$i )[0]; ?>" class="img-fluid" style="max-width: 90vw; max-height: 90vh;" alt="...">
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
		
		// Проверяем какие данные передаются для открытия галереи и картинки
		//alert(gallery+' '+image); 
		
		
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
		
		/*
		foreach( $posts as $post ) { setup_postdata($post);
			$images = get_post_gallery_images();
			$count2 = 0;
			foreach ( $images as $image ) {

				echo 'document.getElementById("img-'.$post->ID.'-'.$count2.'").classList.remove("active"); document.getElementById("ind-'.$post->ID.'-'.$count2.'").classList.remove("active");';
				
				$count2 = $count2 + 1;
			}
		} wp_reset_postdata(); */
		
		
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


<?php
	get_footer();
	//include 'footer.php';
?> 