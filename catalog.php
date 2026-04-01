<?php

	/*
		
		Template Name: Каталог
		Template Post Type: page
		
	*/
	
	include 'header.php';
	
?>


<!-- Header parallax -->
<header class="header-parallax">
	<div class="parallax-2"></div>
	<div class="container"> <!-- container/container-fluid -->
		<div class="row justify-content-center align-items-center" style="min-height: 50vh;"> <!-- min-height: 75vh; -->
			<div class="col-md-8 text-center text-light py-5"> <!-- text-center -->
				<!-- Title -->
				<h1 class="text-uppercase fw-bold mb-3">Встроенные кухни</h1>
				<!-- Subtitle -->
				<h2 class="text-uppercase fw-normal mb-5">Готовые и на заказ</h2>
				<!-- Description
				<p class="header-description fw-light mb-4">Версия от 16.08.2021</p> -->
				<!-- Advantages
				<div class="row text-start">
					<div class="col-md-3 pb-0 pb-md-4 mb-0 mb-md-4">
						<div class="row"> <!-- align-items-center
							<div class="col-2 col-md-3">
								<img src="images/icons/star.svg" class="img-fluid" style="">
							</div>
							<div class="col-10 col-md-9">
								<h5 class="mb-0 mb-md-1">2 минуты</h5>
								<p class="mb-3 mb-md-3 lh-sm fw-light">от Старо-Рязанского шоссе</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 pb-0 pb-md-4 mb-0 mb-md-4">
						<div class="row"> <!-- align-items-center
							<div class="col-2 col-md-3">
								<img src="images/icons/star.svg" class="img-fluid" style="">
							</div>
							<div class="col-10 col-md-9">
								<h5 class="mb-0 mb-md-1">15 минут</h5>
								<p class="mb-3 mb-md-3 lh-sm fw-light">от Ново-Рязанского шоссе</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 pb-0 pb-md-4 mb-0 mb-md-4">
						<div class="row"> <!-- align-items-center>
							<div class="col-2 col-md-3">
								<img src="images/icons/star.svg" class="img-fluid" style="">
							</div>
							<div class="col-10 col-md-9">
								<h5 class="mb-0 mb-md-1">15 минут</h5>
								<p class="mb-3 mb-md-3 lh-sm fw-light">от трассы А107</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 pb-0 pb-md-4 mb-3 mb-md-4">
						<div class="row"> <!-- align-items-center
							<div class="col-2 col-md-3">
								<img src="images/icons/star.svg" class="img-fluid" style="">
							</div>
							<div class="col-10 col-md-9">
								<h5 class="mb-0 mb-md-1">20 минут</h5>
								<p class="mb-3 mb-md-3 lh-sm fw-light">от ЦКАД</p>
							</div>
						</div>
					</div>
				</div> -->
				<!-- Button
				<button type="button" class="btn btn-lg btn-danger rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">Оставить заявку</button> -->
			</div>
		</div>
	</div>
</header>
<!-- /Header parallax -->


<section class="bg-white py-5">
<!-- Portfolio -->
	<div class="site-section pb-5">
		<div class="container">
			<!--div class="row">
				<div class="col">
					<h2 class="text-uppercase text-center text-corporation-orange fw-bold">Каталог</h2>
				</div>
			</div-->
			
			<div class="row">
				<div class="col-md-3 mt-5 project-entry">
					<nav class="nav flex-column catalog-filter">
						<a class="nav-link active" aria-current="page" href="#">Новинки</a>
						<a class="nav-link" href="#">Кухни из ДСП</a>
						<a class="nav-link" href="#">Кухни из массива</a>
						<a class="nav-link" href="#">Кухни из МДФ</a>
						<a class="nav-link" href="#">Кухни из пластика</a>
						<a class="nav-link" href="#">Эмаль</a>
						<a class="nav-link" href="#">Патина</a>
						<a class="nav-link" href="#">Кухни с фотопечатью</a>
						<a class="nav-link" href="#">Столешницы</a>
						<a class="nav-link" href="#">Барные стойки</a>
						<a class="nav-link" href="#">Кухни до 50 000 руб</a>
						<a class="nav-link" href="#">Кухни до 75 000 руб</a>
						<a class="nav-link" href="#">Кухни до 100 000 руб</a>
						<a class="nav-link" href="#">Кухни до 150 000 руб</a>
						<a class="nav-link" href="#">Кухни до 200 000 руб</a>
					</nav>
				</div>
				<div class="col-md-9">
					<div class="row">
						<div class="col-md-6 mt-5 project-entry" style=""> <!-- max-height: 250px; overflow: hidden; -->
							<h3 class="mb-3">Кухня 1</h3>
							<a href="product.html" class="d-block figure rounded shadow" style="" onClick="galleryOn('num1');">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/catalog/kitchens/kitchen-1.jpg" alt="Image" class="img-fluid">
							</a>
						</div>
						<div class="col-md-6 mt-5 project-entry" style=""> <!-- max-height: 250px; overflow: hidden; -->
							<h3 class="mb-3">Кухня 2</h3>
							<a href="product.html" class="d-block figure rounded shadow" style="" onClick="galleryOn('num1');">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/catalog/kitchens/kitchen-1.jpg" alt="Image" class="img-fluid">
							</a>
						</div>
						<div class="col-md-6 mt-5 project-entry" style=""> <!-- max-height: 250px; overflow: hidden; -->
							<h3 class="mb-3">Кухня 3</h3>
							<a href="product.html" class="d-block figure rounded shadow" style="" onClick="galleryOn('num1');">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/catalog/kitchens/kitchen-1.jpg" alt="Image" class="img-fluid">
							</a>
						</div>
						<div class="col-md-6 mt-5 project-entry" style=""> <!-- max-height: 250px; overflow: hidden; -->
							<h3 class="mb-3">Кухня 4</h3>
							<a href="product.html" class="d-block figure rounded shadow" style="" onClick="galleryOn('num1');">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/catalog/kitchens/kitchen-1.jpg" alt="Image" class="img-fluid">
							</a>
						</div>
						<div class="col-md-6 mt-5 project-entry" style=""> <!-- max-height: 250px; overflow: hidden; -->
							<h3 class="mb-3">Кухня 5</h3>
							<a href="product.html" class="d-block figure rounded shadow" style="" onClick="galleryOn('num1');">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/catalog/kitchens/kitchen-1.jpg" alt="Image" class="img-fluid">
							</a>
						</div>
						<div class="col-md-6 mt-5 project-entry" style=""> <!-- max-height: 250px; overflow: hidden; -->
							<h3 class="mb-3">Кухня 6</h3>
							<a href="product.html" class="d-block figure rounded shadow" style="" onClick="galleryOn('num1');">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/catalog/kitchens/kitchen-1.jpg" alt="Image" class="img-fluid">
							</a>
						</div>
					</div>
				</div>
			 </div>
		</div>
	</div>
	<!-- Portfolio -->
</section>


<section class="bg-light">
	<div class="container"> <!-- container/container-fluid -->
		<div class="row justify-content-center">
			<div class="col-md-8" style="position: relative;">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/order-img-2.png" class="d-none d-md-block" style="max-width: 350px; position: absolute; bottom: 0; left: -50px;">
				<div class="row">
					<div class="col-md-6 offset-md-6 py-5 my-0 my-md-3 text-dark">
						<h3 class="text-uppercase text-yellow mb-3">Не нашли подходящего дизайна кухни?</h3>
						<p>Не расстраивайтесь! Свяжитесь с нами любым удобным для Вас способом и наш дизайнер создаст для Вас дизайн кухни Вашей мечты абсолютно бесплатно!</p>
						<button class="btn btn-lg btn-corporation-orange px-5 text-light" type="submit">Оставить заявку</button>
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
				<div class="tab-content" id="myTabContent">
					
					<!-- All types of portfolio -->
					<div class="tab-pane fade show active text-center" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
							<div class="carousel-inner rounded shadow">
								<div class="carousel-item active">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/catalog/kitchens/kitchen-1.jpg" class="d-block w-100" alt="...">
									<!--div class="carousel-caption d-none d-md-block p-3 text-light">
										<p><span class="d-block">Ширина: 4000 мм. Длинна: 2750 мм. Глубина: 450мм. Кол-во дверей: 4. Материал: МДФ.</span><span class="d-block">Стоимость под ключ: 10 000 руб.</span></p>
										<button type="button" class="btn btn-danger rounded-pill px-3 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Хочу такой же</button>
									</div-->
									
								</div>
								<div class="carousel-item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/catalog/kitchens/kitchen-1.jpg" class="d-block w-100" alt="...">
									<!--div class="carousel-caption d-none d-md-block p-3 text-light">
										<p><span class="d-block">Ширина: 4000 мм. Длинна: 2750 мм. Глубина: 450мм. Кол-во дверей: 4. Материал: МДФ.</span><span class="d-block">Стоимость под ключ: 10 000 руб.</span></p>
										<button type="button" class="btn btn-danger rounded-pill px-3 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Хочу такой же</button>
									</div-->
								</div>
								<div class="carousel-item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/catalog/kitchens/kitchen-1.jpg" class="d-block w-100" alt="...">
									<!--div class="carousel-caption d-none d-md-block p-3 text-light">
										<p><span class="d-block">Ширина: 4000 мм. Длинна: 2750 мм. Глубина: 450мм. Кол-во дверей: 4. Материал: МДФ.</span><span class="d-block">Стоимость под ключ: 10 000 руб.</span></p>
										<button type="button" class="btn btn-danger rounded-pill px-3 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Хочу такой же</button>
									</div-->
								</div>
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
					<!-- /All types of portfolio -->
					
					<!-- Different types of portfolio. Include if used different types of portfolio -->
					<div class="tab-pane fade text-center" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div id="carouselExampleControls-2" class="carousel slide" data-bs-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shkafy-kupe/shkaf-kupe-1.jpg" class="d-block w-100" alt="...">
									<div class="carousel-caption d-none d-md-block p-3 text-light">
										<!--p><span class="d-block">Ширина: 4000 мм. Длинна: 2750 мм. Глубина: 450мм. Кол-во дверей: 4. Материал: МДФ.</span><span class="d-block">Стоимость под ключ: 10 000 руб.</span></p-->
										<button type="button" class="btn btn-danger rounded-pill px-3 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Узнать стоимость</button>
									</div>
								</div>
								<div class="carousel-item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shkafy-kupe/shkaf-kupe-1.jpg" class="d-block w-100" alt="...">
									<div class="carousel-caption d-none d-md-block p-3 text-light">
										<!--p><span class="d-block">Ширина: 4000 мм. Длинна: 2750 мм. Глубина: 450мм. Кол-во дверей: 4. Материал: МДФ.</span><span class="d-block">Стоимость под ключ: 10 000 руб.</span></p-->
										<button type="button" class="btn btn-danger rounded-pill px-3 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Узнать стоимость</button>
									</div>
								</div>
								<div class="carousel-item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shkafy-kupe/shkaf-kupe-1.jpg" class="d-block w-100" alt="...">
									<div class="carousel-caption d-none d-md-block p-3 text-light">
										<!--p><span class="d-block">Ширина: 4000 мм. Длинна: 2750 мм. Глубина: 450мм. Кол-во дверей: 4. Материал: МДФ.</span><span class="d-block">Стоимость под ключ: 10 000 руб.</span></p-->
										<button type="button" class="btn btn-danger rounded-pill px-3 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Узнать стоимость</button>
									</div>
								</div>
							</div>
							<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls-2"  data-bs-slide="prev">
								<span class="carousel-control-prev-icon bg-dark rounded" style="height: 3.5rem;" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls-2"  data-bs-slide="next">
								<span class="carousel-control-next-icon bg-dark rounded" style="height: 3.5rem;" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>
					</div>
					<div class="tab-pane fade text-center" id="contact" role="tabpanel" aria-labelledby="contact-tab">
						<div id="carouselExampleControls-3" class="carousel slide" data-bs-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shkafy-kupe/shkaf-kupe-1.jpg" class="d-block w-100" alt="...">
									<div class="carousel-caption d-none d-md-block p-3 text-light">
										<!--p><span class="d-block">Ширина: 4000 мм. Длинна: 2750 мм. Глубина: 450мм. Кол-во дверей: 4. Материал: МДФ.</span><span class="d-block">Стоимость под ключ: 10 000 руб.</span></p-->
										<button type="button" class="btn btn-danger rounded-pill px-3 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Узнать стоимость</button>
									</div>
								</div>
								<div class="carousel-item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shkafy-kupe/shkaf-kupe-1.jpg" class="d-block w-100" alt="...">
									<div class="carousel-caption d-none d-md-block p-3 text-light">
										<!--p><span class="d-block">Ширина: 4000 мм. Длинна: 2750 мм. Глубина: 450мм. Кол-во дверей: 4. Материал: МДФ.</span><span class="d-block">Стоимость под ключ: 10 000 руб.</span></p-->
										<button type="button" class="btn btn-danger rounded-pill px-3 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Узнать стоимость</button>
									</div>
								</div>
								<div class="carousel-item">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shkafy-kupe/shkaf-kupe-1.jpg" class="d-block w-100" alt="...">
									<div class="carousel-caption d-none d-md-block p-3 text-light">
										<!--p><span class="d-block">Ширина: 4000 мм. Длинна: 2750 мм. Глубина: 450мм. Кол-во дверей: 4. Материал: МДФ.</span><span class="d-block">Стоимость под ключ: 10 000 руб.</span></p-->
										<button type="button" class="btn btn-danger rounded-pill px-3 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Узнать стоимость</button>
									</div>
								</div>
							</div>
							<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls-3"  data-bs-slide="prev">
								<span class="carousel-control-prev-icon bg-dark rounded" style="height: 3.5rem;" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls-3"  data-bs-slide="next">
								<span class="carousel-control-next-icon bg-dark rounded" style="height: 3.5rem;" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>
					</div>
					<!-- Different types of portfolio. Include if used different types of portfolio -->
					
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


<!-- Action -->
<section class="action-4-section bg-light py-5">
	<div class="container"> <!-- container/container-fluid -->
		<div class="row justify-content-center">
			<div class="col">
				<h2 class="text-uppercase text-center text-corporation-orange fw-bold">Акции и скидки</h2>
				<div class="row justify-content-center">
					<div class="col-md-4 mt-5">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/actions/action-1.jpg" class="w-100 mb-4 rounded shadow">
						<p class="fs-5 fw-light">При заказе кухни <strong>до 31 августа</strong> - честная <strong>скидка&#160;5%!</strong></p>
					</div>
					<div class="col-md-4 mt-5">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/actions/action-2.jpg" class="w-100 mb-4 rounded shadow">
						<p class="fs-5 fw-light">При заказе кухни от 60 000 рублей - мойка из искуственного камня <strong>в&#160;подарок!</strong></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Action -->


<?php include 'footer.php'; ?>