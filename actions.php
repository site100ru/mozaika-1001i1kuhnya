<?php
		
	// Template Name: Акции и скидки
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
				<!-- Title -->
				<h1 class="text-uppercase mb-3">Акции и скидки</h1>
			</div>
		</div>
	</div>
</header>
<!-- /Header parallax -->


<?php actionsSection( 2 ); ?>


<?php get_footer(); //include 'footer.php'; ?>