<!-- Yandex Map -->
<section id="map" style="height: 500px"></section>


<!-- Contacts section 1 -->
<div id="contacts-sp" class="scroll-point"></div>
<section class="contacts-section text-light">
	<div class="container pt-5">
		<div class="row">
			<div class="col">
				<h2 class="pb-5 text-center text-corporation-orange text-uppercase fe-bold">Контакты</h2>
				<div class="row justify-content-center align-items-center">
					<div class="col-md-4 pb-5 order-md-2">
						<ul style="list-style: none; padding-left: 0;">
							<li class="mb-3">
								<i class="fas fa-map-marker-alt fs-5 text-corporation-orange" style="min-width: 25px;"></i> Адрес: г. Рязань, ул. Почтовая, д. 59 (вход с ул. Почтовая)</li>
								<li class="mb-3">
									<i class="fa-solid fa-phone fs-5 text-corporation-orange" style="min-width: 25px; position: relative; top: 3px;"></i> Телефон (отдел продаж): <a href="tel:84912255869">8 (4912) 25-58-69</a>
								</li>
							<li class="mb-3"><i class="fa-solid fa-phone fs-5 text-corporation-orange" style="min-width: 25px; position: relative; top: 3px;"></i> Телефон (отдел продаж): <a href="tel:89537308590">8 (953) 730-85-90</a></li>
							<li class="mb-3"><i class="fa-solid fa-phone fs-5 text-corporation-orange" style="min-width: 25px; position: relative; top: 3px;"></i> Телефон (управляющий): <a href="tel:84912283946">8 (4912) 28-39-46</a></li>
							<li class="mb-3">
								<i class="fas fa-envelope fs-5 text-corporation-orange" style="min-width: 25px;"></i> Email: <a href="mailto:1001_1@bk.ru">1001_1@bk.ru</a>
							</li>
							<li class="mb-3"><i class="fab fa-vk fs-5 text-corporation-orange" style="min-width: 25px;"></i> Вконтакте: <a href="https://vk.com/public205268139" target="_blank">vk.com/public205268139</a></li>
							<!-- <li><i class="fab fa-instagram fs-5 text-corporation-orange" style="min-width: 25px;"></i> Инстаграм: <a href="https://instagram.com/1001kuhnya?igshid=2mcmhikbs8t4">https://instagram.com/1001kuhnya</a></li> -->
						</ul>
						
						
						<div class="row justify-content-center text-center">
							<div class="col pt-3">
								<a class="ico-button pe-2" href="whatsapp://send?phone=+79537308590" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/whatsapp-ico.svg"></a>
								<a class="ico-button pe-2" href="tg://resolve?domain=KUHNYA1001I1" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/telegram-ico.svg"></a>
                                <a class="ico-button pe-2" href="https://max.ru/u/f9LHodD0cOIcoQjMwsegYEwXYimOppFuqDcTTMTxrCCCe_eP6Y24HYNV4QM" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/max.svg"></a>
							</div>
						</div>
						<!--p class="mb-4"><i class="fas fa-map-marker-alt fs-5 text-danger" style="min-width: 25px;"></i> Производство: МО, г. Химки, ул. Рабочая, д. 2А, корп. 52</p>
						<p class="mb-4"><i class="fas fa-map-marker-alt fs-5 text-danger" style="min-width: 25px;"></i> Производство: МО, г. Апрелевка, ул. Апрелевская, д. 65, корп. 5</p>
						<p class="mb-4"><i class="fas fa-map-marker-alt fs-5 text-danger" style="min-width: 25px;"></i> Производство: МО, г. Лыткарино, Тураевское ш., вл. 4</p-->
						
						
						<!--p class="mb-4"><i class="fas fa-comments fs-5" style="min-width: 25px;"></i> WhatsApp, Viber: 8 (930) 78-78-0-68</p-->
						
						
					</div>
					
					<!--div class="col-md-4 pb-5 order-md-1">
						<div class="rounded overflow-hidden">
							<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A15b2d3869d4203a547fbd3ebf658911b025f12844f8df72fb9b396920ffd1324&amp;width=100%25&amp;height=350&amp;lang=ru_RU&amp;scroll=true"></script>
						</div>
					</div-->
					
					<div class="col-md-4 pb-5 order-md-3">
						<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/contacts-mail.php">
							<textarea name="mes" class="form-control mb-3" placeholder="Введите Ваше сообщение"></textarea>
							<input type="text" name="name" class="form-control mb-3" placeholder="Введите Ваше имя">
							<input type="email" name="email" class="form-control mb-3" placeholder="Введите Ваш email" required>
							<input type="tel" name="tel" class="form-control mb-3 telMask" placeholder="Введите Ваш телефон">
							<input type="hidden" id="g-recaptcha-response-contacts-mail" name="g-recaptcha-response">
							<input type="submit" class="btn btn-corporation-orange d-block w-100 text-light" value="Отправить">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr class="bg-light m-0">
	<footer class="container py-3">
		<div class="row">
			<div class="col">
				<p class="m-0 text-light text-center fw-light"> &#169;<?php echo date( 'Y' ); ?> <a href="https://site100.ru" class="text-light fw-light text-decoration-none">Мебельный магазин <strong>1001 и 1 кухня</strong></a></p>
				<p class="m-0 fs-075 text-light text-center fw-light">Создание и продвижение сайта: <a href="https://site100.ru" class="text-light fw-light text-decoration-none">site<span class="text-danger">100</span>.ru</a></p>
			</div>
		</div>
	</footer>
</section>
<!-- /Contacts section 1 -->

	
<!-- Callback button HTML -->
<div class="callback-button-wrapper">
	<div id="callbackBtn" class="callback-button" onclick="callbackButtonClick();">
		<div id="btnIco" class="callback-button-ico"></div>
	</div>
	
	<div id="formBtn" class="callback-form-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Перезвонить Вам?">
		<a data-bs-toggle="modal" data-bs-target="#callbackButtonModal"><div class="callback-form-button-ico"></div></a>
	</div>
	<div id="phoneBtn" class="callback-phone-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Позвонить">
		<a href="tel:+79537308590"><div class="callback-phone-button-ico"></div></a>
	</div>
	<div id="whatsappBtn" class="callback-whatsapp-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Whatsapp">
		<a href="whatsapp://send?phone=+79537308590" target="_blank"><div class="callback-whatsapp-button-ico"></div></a>
	</div>
	<div id="telegramBtn" class="callback-telegram-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Telegram">
		<a href="tg://resolve?domain=KUHNYA1001I1" target="_blank"><div class="callback-telegram-button-ico"></div></a>
	</div>
    <div id="maxBtn" class="callback-max-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Max">
        <a href="https://max.ru/u/f9LHodD0cOIcoQjMwsegYEwXYimOppFuqDcTTMTxrCCCe_eP6Y24HYNV4QM" target="_blank">
            <div class="callback-max-button-ico"></div>
        </a>
    </div>
</div>
<!-- /Callback button HTML -->


<!-- Callback button JS -->
<script>
    function callbackButtonClick() {
        
        let formBtn = document.getElementById('formBtn').style.top;
        
        if ( formBtn == "0px" || formBtn == 0 ) {
            document.getElementById('callbackBtn').style.animation = "none";
            document.getElementById('btnIco').style.animation = "change2 linear .5s";
            document.getElementById('btnIco').style.webkitAnimation = "change2 linear .5s";
            document.getElementById('btnIco').style.webkitTransition ="transform 1s ease-in-out";
            
            document.getElementById('btnIco').style.webkitTransform = "rotate(180deg)";
            document.getElementById('btnIco').style.transform = "rotate(180deg)";
            
            
            document.getElementById('btnIco').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/ico/callback-button-close.png)";
            document.getElementById('btnIco').style.backgroundPosition = "center";
            document.getElementById('btnIco').style.backgroundRepeat = "no-repeat";
            
            document.getElementById('btnIco').style.webkitBackgroundSize = "cover";
            document.getElementById('btnIco').style.backgroundSize = "cover";
            
            
            document.getElementById('formBtn').style.top = "-60px";
            document.getElementById('formBtn').style.opacity = "1";
            
            document.getElementById('phoneBtn').style.top = "-120px";
            document.getElementById('phoneBtn').style.opacity = "1";
            
            document.getElementById('whatsappBtn').style.top = "-180px";
            document.getElementById('whatsappBtn').style.opacity = "1";
            
            document.getElementById('telegramBtn').style.top = "-240px";
            document.getElementById('telegramBtn').style.opacity = "1";

            document.getElementById('maxBtn').style.top = "-300px";
            document.getElementById('maxBtn').style.opacity = "1";
        } else {
            document.getElementById('callbackBtn').style.animation = "waves linear 2s infinite";
            document.getElementById('btnIco').style.animation = "change linear 16s infinite";
            document.getElementById('btnIco').style.webkitTransition ="transform 1s ease-in-out";
            document.getElementById('btnIco').style.webkitAnimation = "change linear 16s infinite";
            document.getElementById('btnIco').style.transform = "rotate(180deg)";
            document.getElementById('btnIco').style.webkitTransform = "rotate(180deg)";
            document.getElementById('btnIco').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/ico/callback-button-ico.png)";
            document.getElementById('btnIco').style.backgroundPosition = "center";
            document.getElementById('btnIco').style.backgroundRepeat = "no-repeat";
            
            document.getElementById('btnIco').style.webkitBackgroundSize = "cover";
            document.getElementById('btnIco').style.backgroundSize = "cover";
            
            
            document.getElementById('formBtn').style.top = "0px";
            document.getElementById('formBtn').style.opacity = "0";
            
            document.getElementById('phoneBtn').style.top = "0px";
            document.getElementById('phoneBtn').style.opacity = "0";
            
            document.getElementById('whatsappBtn').style.top = "0px";
            document.getElementById('whatsappBtn').style.opacity = "0";
            
            document.getElementById('telegramBtn').style.top = "0px";
            document.getElementById('telegramBtn').style.opacity = "0";
            
            document.getElementById('maxBtn').style.top = "0px";
            document.getElementById('maxBtn').style.opacity = "0";
        }
    }
</script>
<!-- /Callback button JS -->
		
		
		<!-- Carousel three on one
		<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="50000">
			<div id="carouselInnerOne" class="carousel-inner"></div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</a>
		</div> -->
		
		<!-- Показываем сообщение об успешной отправки -->
		<div style="display: <?php echo $_SESSION['display']; ?>;" onclick="f1();"> <!-- Присваиваем свойству display значение переменной $display -->
			<div id="background-msg" style="display: <?php echo $_SESSION['display']; ?>;"></div> <!-- Показываем background -->
			<!-- Показываем сообщение об успешной отправке данных -->
			<div id="message">
				<?php echo $_SESSION['recaptcha']; unset($_SESSION['recaptcha']); ?>
			</div> 
		</div>
		
		
		<!-- Callback button -->
		<div class="modal fade" id="callbackButtonModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Обратный звонок</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body py-3 px-3">
						<div class="row">
							<div class="col">
								<p><small>Мы свяжемся с Вами в блажайшее время! Для звонка введите Ваше имя и телефон.</small></p>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-8">
								<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/callback-mail.php">
									<input name="name" type="text" class="form-control mb-3" placeholder="Ваше имя" aria-label="Recipient's username" aria-describedby="button-addon2">
									<input id="phone-mask-1" name="tel" type="text" class="form-control mb-3 telMask" placeholder="Ваш телефон" aria-label="Recipient's username" aria-describedby="button-addon2" required>
									<div class="text-center">
										<input type="hidden" id="g-recaptcha-response-order" name="g-recaptcha-response">
										<button class="btn btn-corporation-orange text-light" type="submit" id="button-addon2">Отправить</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Callback button -->
		
		
		<!-- Modal 1 -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Оставить заявку</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body py-5 px-3">
						<div class="row justify-content-center">
							<div class="col-md-8">
								<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/order-mail.php">
									<input name="name" type="text" class="form-control mb-3" placeholder="Ваше имя" aria-label="Recipient's username" aria-describedby="button-addon2">
									<input id="phone-mask-1" name="tel" type="text" class="form-control mb-3 telMask" placeholder="Ваш телефон" aria-label="Recipient's username" aria-describedby="button-addon2" required>
									<div class="text-center">
										<input type="hidden" id="g-recaptcha-response-order" name="g-recaptcha-response">
										<button class="btn btn-corporation-orange text-light" type="submit" id="button-addon2">Отправить</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<!-- Calculate price -->
		<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title text-center" id="exampleModalLabel2">Узнать стоимость
						</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body py-4 px-3">
						<div class="row justify-content-center">
							<div class="col-md-8">
								<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/order-mail.php">
									<input name="name" type="text" class="form-control mb-3" placeholder="Ваше имя" aria-label="Recipient's username" aria-describedby="button-addon2">
									<input name="tel" type="text" class="form-control mb-3 telMask" placeholder="Ваш телефон" aria-label="Recipient's username" aria-describedby="button-addon2" required>
									<div class="text-center">
										<input type="hidden" id="g-recaptcha-response-get-price" name="g-recaptcha-response">
										<input type="hidden" name="form-name" value="Узнать стоимость c сайта 1001i1kuhnya.ru">
										<button class="btn btn-corporation-orange text-light" type="submit" id="button-addon2">Отправить</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Calculate price -->
		
		
		<!-- Quiz modal -->
		<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<!-- <h5 class="modal-title" id="exampleModalLabel">Выберите Вашу планировку</h5> -->
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							
						</button>
					</div>
					<!-- Quiz container -->
					<div id="quiz-container" class="container shadow bg-white pt-4 rounded-lg">
						<div class="row">
							<div class="col pb-4 text-center">
								<h3>Выберите Вашу планировку</h3>
							</div>
						</div>
						<div class="row justify-content-center text-left" style="min-height: 275px;">
							<div class="col-md-3 pb-5">
								<div class="card w-100 border-0">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz/q-1-1.jpg" class="card-img-top" alt="...">
									<div class="card-body pl-1 pr-1" style="min-height: auto;">
										<div class="custom-control custom-radio custom-control-inline">
											<input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
											<label class="custom-control-label" for="customRadioInline1"><h5 class="card-title mb-0">Линейная</h5></label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pb-5">
								<div class="card w-100 border-0">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz/q-1-2.jpg" class="card-img-top" alt="...">
									<div class="card-body pl-1 pr-1" style="min-height: auto;">
										<div class="custom-control custom-radio custom-control-inline">
											<input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
											<label class="custom-control-label" for="customRadioInline2"><h5 class="card-title mb-0">Г-образная</h5></label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pb-5">
								<div class="card w-100 border-0">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz/q-1-3.jpg" class="card-img-top" alt="...">
									<div class="card-body pl-1 pr-1" style="min-height: auto;">
										<div class="custom-control custom-radio custom-control-inline">
											<input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
											<label class="custom-control-label" for="customRadioInline3"><h5 class="card-title mb-0">П-образная</h5></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row pb-5">
							<div class="col text-center">
								<button class="btn btn-lg btn-primary2 btn-corporation-orange" onclick="question1();">Следующий вопрос</button>
							</div>
						</div>
					</div>
					<!-- End quiz container -->
				</div>
			</div>
		</div>
		<!-- Quiz modal -->
		
		
		<!-- Scripts for quiz --
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script>
			function question1() {

				var question = 'question1';

				if (document.getElementById('customRadioInline1').checked == true) {
					var answer = 'Линейная';
				} else if (document.getElementById('customRadioInline2').checked == true) {
					var answer = 'Г-образная';
				} else if (document.getElementById('customRadioInline3').checked == true) {
					var answer = 'П-образная';
				} else {
					var answer = 'Линейная';
				}

				$.ajax ({
					type: "POST",
					url: "<?php echo get_stylesheet_directory_uri(); ?>/kitchens-quiz-action.php",
					data: {question, answer},
					dataType: "html",
					success: function(data) {
						var p = document.getElementById('quiz-container');
						p.innerHTML = data;
					}
				});
			}

			function question2() {
				var question = 'question2';
				var answer1 = document.getElementById('d1').value;
				var answer2 = document.getElementById('d2').value;
				var answer3 = document.getElementById('d3').value;

				$.ajax ({
					type: "POST",
					url: "<?php echo get_stylesheet_directory_uri(); ?>/kitchens-quiz-action.php",
					data: { question, answer1, answer2, answer3 },
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
					var answer = 'ДСП';
				} else if (document.getElementById('customRadioInline2').checked == true) {
					var answer = 'Пленка';
				} else if (document.getElementById('customRadioInline3').checked == true) {
					var answer = 'Пластик';
				} else if (document.getElementById('customRadioInline4').checked == true) {
					var answer = 'Массив';
				}

				$.ajax ({
					type: "POST",
					url: "<?php echo get_stylesheet_directory_uri(); ?>/kitchens-quiz-action.php",
					data: {question, answer},
					dataType: "html",
					success: function(data) {
						var p = document.getElementById('quiz-container');
						p.innerHTML = data;
					}
				});
			}
		</script>
		<!-- /Scripts for quiz -->
		

		<!-- Optional JavaScript; choose one of the two! -->

		<!-- Option 1: Bootstrap Bundle with Popper
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> -->

		<!-- Dounloads Bootstrap Bundle with Popper -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/bootstrap.bundle.min.js"></script>
		
		<!-- Tooltips -->
		<script>
			const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
			const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
		</script>

		<script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/jquery-1.5.1.min.js"></script>
		<!-- Main scripts -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/scripts.js"></script>
		
		<!-- Font Awesame -->
		<script src="https://kit.fontawesome.com/064ae6a0a2.js"></script>
		
		<!-- API Yandex map -->
		<script src="https://api-maps.yandex.ru/2.1/?apikey=67fa0c4f-ad3f-4f9e-bd3f-729ca47910bf&lang=ru_RU" type="text/javascript"></script>
		
		<!-- For phone mask
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js" type="text/javascript"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.js" type="text/javascript"></script> -->
		<!-- For second option --
		<script>
			$.mask.definitions['9'] = false;
			$.mask.definitions['_'] = "[0-9]";
			document.getElementById('phone-mask-1').placeholder = "+7(___)___-__-__";
			$(".phone-mask").mask("+7(___)___-__-__");
		</script> -->
		
		<!-- New telephone number mask -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/inputmask.min.js"></script>
		<script>
			var telMask = document.getElementsByClassName("telMask");
			var im = new Inputmask("+7(999)999-99-99");
			im.mask(telMask);
		</script>
		
		<script>
			/* Убираем сообщение об успешной отправки */
			function f1 () {
				document.getElementById('background-msg').style.display = 'none';
				document.getElementById('message').style.display = 'none';
			}
		</script>
		<script>
			let imagesArray = [
				"carousel-img-1.jpg",
				"carousel-img-2.jpg",
				"carousel-img-3.jpg",
				"carousel-img-4.jpg",
				"carousel-img-5.jpg",
				"carousel-img-6.jpg",
				"carousel-img-7.jpg",
				"carousel-img-8.jpg",
				"carousel-img-9.jpg",
				"carousel-img-10.jpg",
			]; // Массив портфолио.

			/* Подбираем количество картинок в слайде исходя из размера экрана
			window.onload = function() {
				if ( window.innerWidth <= 750 ) {
					// Выводим картинки по одной за раз.
					imagesArray.forEach(outPutImagesArrayToOne); // Делаем что-то с каждым элеменом массива портфолио.
				} else {
					// Выводим картинки по три за раз.
					imagesArray.forEach(outPutImagesArrayToThree); // Делаем что-то с каждым элеменом массива портфолио.
				}
			} */
			
			/* Подбираем количество картинок в слайде при смене размера экрана
			window.onresize = function() {
				if ( window.innerWidth <= 750 ) {
					// Удаляем текущее количество картинок в слайде
					document.getElementById('carouselInnerOne').innerHTML = '';
					// Выводим картинки по одной за раз.
					imagesArray.forEach(outPutImagesArrayToOne); // Делаем что-то с каждым элеменом массива портфолио.
				} else {
					// Удаляем текущее количество картинок в слайде
					document.getElementById('carouselInnerOne').innerHTML = '';
					// Выводим картинки по три за раз.
					imagesArray.forEach(outPutImagesArrayToThree); // Делаем что-то с каждым элеменом массива портфолио.
				}
			} */
			
			/* Выводим картинки по одной за раз.
			function outPutImagesArrayToOne(item, index, array) { // Элемент, индекс, массив.
				if ( index == 0 ) {
					let carouselItem = document.createElement('div'); // Создаем див.
					carouselItem.className = "carousel-item active"; // Добавляем классы создаваемому диву.
					
					let row = document.createElement('div'); // Создаем див.
					row.className = "row align-items-center"; // Добавляем классы создаваемому диву.
					
					let col = document.createElement('div'); // Создаем див.
					col.className = "col"; // Добавляем классы создаваемому диву.
					col.innerHTML = '<img src="images/carousel-img/'+item+'" class="d-block w-100" alt="...">'; // Записываем внутрь дива.
					
					let carouselInnerOne = document.getElementById('carouselInnerOne'); // Определяем куда нужно выводить созданный див.
					
					carouselInnerOne.append(carouselItem); // Выводим див в конце другого дива.
					carouselItem.append(row); // Выводим див в конце другого дива.
					row.append(col); // Выводим див в конце другого дива.
				} else {
					let carouselItem = document.createElement('div'); // Создаем див.
					carouselItem.className = "carousel-item"; // Добавляем классы создаваемому диву.
					
					let row = document.createElement('div'); // Создаем див.
					row.className = "row align-items-center"; // Добавляем классы создаваемому диву.
					
					let col = document.createElement('div'); // Создаем див.
					col.className = "col"; // Добавляем классы создаваемому диву.
					col.innerHTML = '<img src="images/carousel-img/'+item+'" class="d-block w-100" alt="...">'; // Записываем внутрь дива.
					
					let carouselInnerOne = document.getElementById('carouselInnerOne'); // Определяем куда нужно выводить созданный див.
					
					carouselInnerOne.append(carouselItem); // Выводим див в конце другого дива.
					carouselItem.append(row); // Выводим див в конце другого дива.
					row.append(col); // Выводим див в конце другого дива.
				}
			} */
			
			/* Выводим картинки по три за раз.
			function outPutImagesArrayToThree(item, index, array) { // Элемент, индекс, массив.
				if ( index == 0 ) {
					let carouselItem = document.createElement('div'); // Создаем див.
					carouselItem.className = "carousel-item active"; // Добавляем классы создаваемому диву.
					
					let row = document.createElement('div'); // Создаем див.
					row.className = "row align-items-center"; // Добавляем классы создаваемому диву.
					row.id = "carouselItem"+index;
					rowId = row.id;
					
					let col = document.createElement('div'); // Создаем див.
					col.className = "col-4"; // Добавляем классы создаваемому диву.
					col.innerHTML = '<img src="images/carousel-img/'+item+'" class="d-block w-100" alt="...">'; // Записываем внутрь дива.
					
					let carouselInnerOne = document.getElementById('carouselInnerOne'); // Определяем куда нужно выводить созданный див.
					
					carouselInnerOne.append(carouselItem); // Выводим див в конце другого дива.
					carouselItem.append(row); // Выводим див в конце другого дива.
					row.append(col); // Выводим див в конце другого дива.
				} else if ( index % 3 != 0 ) {
					//let carouselItem = document.createElement('div'); // Создаем див.
					//carouselItem.className = "carousel-item"; // Добавляем классы создаваемому диву.
					
					//let row = document.createElement('div'); // Создаем див.
					//row.className = "row"; // Добавляем классы создаваемому диву.
					
					let col = document.createElement('div'); // Создаем див.
					col.className = "col-4"; // Добавляем классы создаваемому диву.
					col.innerHTML = '<img src="images/carousel-img/'+item+'" class="d-block w-100" alt="...">'; // Записываем внутрь дива.
					
					let row = document.getElementById(rowId); // Определяем куда нужно выводить созданный див.
					
					//carouselInnerOne.append(carouselItem); // Выводим див в конце другого дива.
					//carouselItem.append(row); // Выводим див в конце другого дива.
					row.append(col); // Выводим див в конце другого дива.
				} else if ( index % 3 == 0 ) {
					let carouselItem = document.createElement('div'); // Создаем див.
					carouselItem.className = "carousel-item"; // Добавляем классы создаваемому диву.
					
					let row = document.createElement('div'); // Создаем див.
					row.className = "row align-items-center"; // Добавляем классы создаваемому диву.
					row.id = "carouselItem"+index;
					rowId = row.id;
					
					let col = document.createElement('div'); // Создаем див.
					col.className = "col-4"; // Добавляем классы создаваемому диву.
					col.innerHTML = '<img src="images/carousel-img/'+item+'" class="d-block w-100" alt="...">'; // Записываем внутрь дива.
					
					let carouselInnerOne = document.getElementById('carouselInnerOne'); // Определяем куда нужно выводить созданный див.
					
					carouselInnerOne.append(carouselItem); // Выводим див в конце другого дива.
					carouselItem.append(row); // Выводим див в конце другого дива.
					row.append(col); // Выводим див в конце другого дива.
				}
			} */
			
			/*
			
				0 1 2   3 4 5   6 7 8   9 10 11   12 13 14   15 16 17
			
			*/
			
		</script>
		
		<!-- reCaptcha v3 New from Google -->
		<script src='https://www.google.com/recaptcha/api.js?render=6LdV1IcUAAAAADRQAhpGL8dVj5_t0nZDPh9m_0tn'></script>
		<script>
			grecaptcha.ready(function() {
				grecaptcha.execute('6LdV1IcUAAAAADRQAhpGL8dVj5_t0nZDPh9m_0tn', {action: 'action_name'}).then(function(token) {
					document.getElementById('g-recaptcha-response-get-price').value=token;
					document.getElementById('g-recaptcha-response-order').value=token;
					document.getElementById('g-recaptcha-response-contacts-mail').value=token;
					if ( document.getElementById('g-recaptcha-response-get-calculate') ) {
						document.getElementById('g-recaptcha-response-get-calculate').value=token;
					}
					
				});
			});
		</script>
		
		<script type="text/javascript">
			// Функция ymaps.ready() будет вызвана, когда
			// загрузятся все компоненты API, а также когда будет готово DOM-дерево.
			ymaps.ready(init);
			function init(){
				// Создание карты.
				var myMap = new ymaps.Map("map", {
					// Координаты центра карты.
					// Порядок по умолчанию: «широта, долгота».
					// Чтобы не определять координаты центра карты вручную,
					// воспользуйтесь инструментом Определение координат.
					center: [54.6291,39.7395],
					// Уровень масштабирования. Допустимые значения:
					// от 0 (весь мир) до 19.
					zoom: 17
				});
				
				var glyphIcon1 = new ymaps.Placemark([54.6291,39.7395], {}, {
					iconLayout: 'default#image',
					iconImageHref: '<?php echo get_stylesheet_directory_uri(); ?>/images/icons/map-icon.png',
					iconImageSize: [120, 77],
					iconImageOffset: [-30, -75]
				});
				
				// Размещение геообъекта на карте.
				myMap.geoObjects.add(glyphIcon1);
			}
		</script>
		
		
		<!-- Quiz scripts -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/quiz.js"></script>
		
		
		<!-- Yandex.Metrika counter -->
		<script type="text/javascript" >
		   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
		   m[i].l=1*new Date();
		   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
		   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
		   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		   ym(90675367, "init", {
				clickmap:true,
				trackLinks:true,
				accurateTrackBounce:true,
				webvisor:true
		   });
		   
		   ym(87743261, "init", {
				clickmap:true,
				trackLinks:true,
				accurateTrackBounce:true,
				webvisor:true
			});
		</script>
		<noscript><div><img src="https://mc.yandex.ru/watch/90675367" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
		<noscript><div><img src="https://mc.yandex.ru/watch/87743261" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
		<!-- /Yandex.Metrika counter -->
		
        <!-- <?php include get_template_directory() . '/inc/snowflake/snowflake.php'; ?> -->
		
		<!-- Top.Mail.Ru counter -->
		<script type="text/javascript">
			var _tmr = window._tmr || (window._tmr = []);
			_tmr.push({id: "3341305", type: "pageView", start: (new Date()).getTime()});
			(function (d, w, id) {
				if (d.getElementById(id)) return;
				var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
				ts.src = "https://top-fwz1.mail.ru/js/code.js";
				var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
				if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
			})(document, window, "tmr-code");
		</script>
		<noscript><div><img src="https://top-fwz1.mail.ru/counter?id=3341305;js=na" style="position:absolute;left:-9999px;" alt="Top.Mail.Ru" /></div></noscript>
		<!-- /Top.Mail.Ru counter -->
	</body>
</html>