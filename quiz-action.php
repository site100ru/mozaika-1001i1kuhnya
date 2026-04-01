<?php
	
	session_start();
	$win = "true";
	
	// Подключаем функции WordPress
	require_once($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
	
	if ($_POST['question'] == 'question1' ) {
		$_SESSION['answer1'] = $_POST['answer']; ?>
		
		<!-- Quiz container content -->
		<div class="modal-header">
			<h4 class="modal-title fs-5" id="exampleModalLabel">Укажите размеры (в любых единицах):</h4>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col">
						<div class="row justify-content-center">
							<div class="col-md-10 text-center animated fadeIn">
								<div class="row align-items-center justify-content-center animated fadeIn quiz-content">	
									<div class="col-md-5 pb-3">
										<div class="card w-100 border-0" style="background: none;">
											<div class="card-body pl-1 pr-1" style="min-height: auto;">
												<input class="form-control mb-3" id="length" placeholder="Введите длину" required>
												<input class="form-control mb-3" id="width" placeholder="Введите ширину (для угловых)">
												<input class="form-control mb-3" id="height" placeholder="Введите высоту" required>
												<input class="form-control mb-3" id="depth" placeholder="Введите глубину" required>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 animated fadeIn text-center">
								<a href="#sp-calculator" onclick="question2();">
									<button class="btn btn-lg btn-corporation-orange text-light">Следующий вопрос</button>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Quiz container content -->
		
	<?php } else if ($_POST['question'] == 'question2') {
		$_SESSION['answer2-1'] = $_POST['answer1'];
		$_SESSION['answer2-2'] = $_POST['answer2'];
		$_SESSION['answer2-3'] = $_POST['answer3'];
		$_SESSION['answer2-4'] = $_POST['answer4']; ?>
	
		<!-- Quiz container content -->
		<div class="modal-header">
			<h4 class="modal-title fs-5" id="exampleModalLabel">Количество дверей:</h4>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col">
						<div class="row justify-content-center">
							<div class="col-md-10 text-center animated fadeIn">
								<div class="row align-items-center justify-content-center animated fadeIn quiz-content">		
									<div class="col-md-3 col-6 pb-4">
										<label class="form-check-label w-100" for="customRadioInline1" style="cursor: pointer;">
											<div class="card border-0 bg-dark text-white">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz/shkaf-kupe-2-dveri.jpg" class="card-img-top rounded" alt="...">
												<div class="card-img-overlay pl-1 pr-1 d-flex align-items-end">
													<div class="form-check">
														<input class="form-check-input" type="radio" name="customRadioInline1" id="customRadioInline1">
														<h5 class="card-title mb-0 quiz-title">2 двери</h5>
													</div>
												</div>
											</div>
										</label>
									</div>
									<div class="col-md-3 col-6 pb-4">
										<label class="form-check-label w-100" for="customRadioInline2" style="cursor: pointer;">
											<div class="card border-0 bg-dark text-white">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz/shkaf-kupe-3-dveri.jpg" class="card-img-top rounded" alt="...">
												<div class="card-img-overlay pl-1 pr-1 d-flex align-items-end">
													<div class="form-check">
														<input class="form-check-input" type="radio" name="customRadioInline1" id="customRadioInline2">
														<h5 class="card-title mb-0 quiz-title">3 двери</h5>
													</div>
												</div>
											</div>
										</label>
									</div>
									<div class="col-md-3 col-6 pb-4">
										<label class="form-check-label w-100" for="customRadioInline3" style="cursor: pointer;">
											<div class="card border-0 bg-dark text-white">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz/shkaf-kupe-4-dveri.jpg" class="card-img-top rounded" alt="...">
												<div class="card-img-overlay pl-1 pr-1 d-flex align-items-end">
													<div class="form-check">
														<input class="form-check-input" type="radio" name="customRadioInline1" id="customRadioInline3">
														<h5 class="card-title mb-0 quiz-title">4 двери</h5>
													</div>
												</div>
											</div>
										</label>
									</div>
									<div class="col-md-3 col-6 pb-4">
										<label class="form-check-label w-100" for="customRadioInline4" style="cursor: pointer;">
											<div class="card border-0 bg-dark text-white">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz/shkaf-kupe-5-dverey.jpg" class="card-img-top rounded" alt="...">
												<div class="card-img-overlay pl-1 pr-1 d-flex align-items-end">
													<div class="form-check">
														<input class="form-check-input" type="radio" name="customRadioInline1" id="customRadioInline4">
														<h5 class="card-title mb-0 quiz-title">5 и более дверей</h5>
													</div>
												</div>
											</div>
										</label>
									</div>
								</div>
							</div>
							<div class="col-12 text-center">
								<a href="#sp-calculator" onclick="question3();">
									<button class="btn btn-lg btn-corporation-orange text-light">Следующий вопрос</button>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Quiz container content -->
		
		
	
	<!-- QUESTION 4 -->
	<?php } else if ( $_POST['question'] == 'question3' ) {
		$_SESSION['answer3'] = $_POST['answer']; ?>
	
		<!-- Quiz container content -->
		<div class="modal-header">
			<h4 class="modal-title fs-5" id="exampleModalLabel">Материал фасада:</h4>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col">
						<div class="row justify-content-center">
							<div class="col-md-10 text-center animated fadeIn">
								<div class="row align-items-center justify-content-center animated fadeIn quiz-content">		
									<div class="col-md-3 col-6 pb-4">
										<label class="form-check-label w-100" for="customRadioInline1" style="cursor: pointer;">
											<div class="card border-0 bg-dark text-white">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz/material-gluhie-ldsp.jpg" class="card-img-top rounded" alt="...">
												<div class="card-img-overlay pl-1 pr-1 d-flex align-items-end">
													<div class="form-check">
														<input class="form-check-input" type="radio" name="customRadioInline1" id="customRadioInline1">
														<h5 class="card-title mb-0 quiz-title">Глухие ЛДСП</h5>
													</div>
												</div>
											</div>
										</label>
									</div>
									<div class="col-md-3 col-6 pb-4">
										<label class="form-check-label w-100" for="customRadioInline2" style="cursor: pointer;">
											<div class="card border-0 bg-dark text-white">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz/material-zerkalo.jpg" class="card-img-top rounded" alt="...">
												<div class="card-img-overlay pl-1 pr-1 d-flex align-items-end">
													<div class="form-check">
														<input class="form-check-input" type="radio" name="customRadioInline1" id="customRadioInline2">
														<h5 class="card-title mb-0 quiz-title">Зеркало</h5>
													</div>
												</div>
											</div>
										</label>
									</div>
									<div class="col-md-3 col-6 pb-4">
										<label class="form-check-label w-100" for="customRadioInline3" style="cursor: pointer;">
											<div class="card border-0 bg-dark text-white">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz/material-peskostruy.jpg" class="card-img-top rounded" alt="...">
												<div class="card-img-overlay pl-1 pr-1 d-flex align-items-end">
													<div class="form-check">
														<input class="form-check-input" type="radio" name="customRadioInline1" id="customRadioInline3">
														<h5 class="card-title mb-0 quiz-title">Пескоструйный рисунок</h5>
													</div>
												</div>
											</div>
										</label>
									</div>
									<div class="col-md-3 col-6 pb-4">
										<label class="form-check-label w-100" for="customRadioInline4" style="cursor: pointer;">
											<div class="card border-0 bg-dark text-white">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz/material-orakal.jpg" class="card-img-top rounded" alt="...">
												<div class="card-img-overlay pl-1 pr-1 d-flex align-items-end">
													<div class="form-check">
														<input class="form-check-input" type="radio" name="customRadioInline1" id="customRadioInline4">
														<h5 class="card-title mb-0 quiz-title">Оракал</h5>
													</div>
												</div>
											</div>
										</label>
									</div>
									<div class="col-md-3 col-6 pb-4">
										<label class="form-check-label w-100" for="customRadioInline5" style="cursor: pointer;">
											<div class="card border-0 bg-dark text-white">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz/material-gluhie-mdf.jpg" class="card-img-top rounded" alt="...">
												<div class="card-img-overlay pl-1 pr-1 d-flex align-items-end">
													<div class="form-check">
														<input class="form-check-input" type="radio" name="customRadioInline1" id="customRadioInline5">
														<h5 class="card-title mb-0 quiz-title">Глухие МДФ</h5>
													</div>
												</div>
											</div>
										</label>
									</div>
									<div class="col-md-3 col-6 pb-4">
										<label class="form-check-label w-100" for="customRadioInline6" style="cursor: pointer;">
											<div class="card border-0 bg-dark text-white">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz/material-fotopechat.jpg" class="card-img-top rounded" alt="...">
												<div class="card-img-overlay pl-1 pr-1 d-flex align-items-end">
													<div class="form-check">
														<input class="form-check-input" type="radio" name="customRadioInline1" id="customRadioInline6">
														<h5 class="card-title mb-0 quiz-title">Фотопечать</h5>
													</div>
												</div>
											</div>
										</label>
									</div>
									<div class="col-md-3 col-6 pb-4">
										<label class="form-check-label w-100" for="customRadioInline7" style="cursor: pointer;">
											<div class="card border-0 bg-dark text-white">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz/material-lakobel.jpg" class="card-img-top rounded" alt="...">
												<div class="card-img-overlay pl-1 pr-1 d-flex align-items-end">
													<div class="form-check">
														<input class="form-check-input" type="radio" name="customRadioInline1" id="customRadioInline7">
														<h5 class="card-title mb-0 quiz-title">Лакобель</h5>
													</div>
												</div>
											</div>
										</label>
									</div>
									<div class="col-md-3 col-6 pb-4">
										<label class="form-check-label w-100" for="customRadioInline8" style="cursor: pointer;">
											<div class="card border-0 bg-dark text-white">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quiz/material-steklo.jpg" class="card-img-top rounded" alt="...">
												<div class="card-img-overlay pl-1 pr-1 d-flex align-items-end">
													<div class="form-check">
														<input class="form-check-input" type="radio" name="customRadioInline1" id="customRadioInline8">
														<h5 class="card-title mb-0 quiz-title">Стекло</h5>
													</div>
												</div>
											</div>
										</label>
									</div>
								</div>
							</div>
							<div class="col-12 text-center">
								<a href="#sp-calculator" onclick="question4();">
									<button class="btn btn-lg btn-corporation-orange text-light">Следующий вопрос</button>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Quiz container content -->
		<!-- END QUESTION 4 -->
	
	
	
	<?php } else if ( $_POST['question'] == 'question4' ) {
		$_SESSION['answer4'] = $_POST['answer']; ?>
		
		<!-- Quiz container content -->
		<div class="modal-header">
			<h4 class="modal-title fs-5" id="exampleModalLabel">Оставьте Ваши контакты и мы вышлем Вам расчет:</h4>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col">
						<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/quiz-order-shkafy-cupe.php">
							<div class="row justify-content-center">	
								<div class="col text-center animated fadeIn">
									<div class="row align-items-center justify-content-center animated fadeIn quiz-content">	
										<div class="col-md-6">
											<input type="text" class="form-control" name="name" placeholder="Ваше имя" style="margin: auto; margin-bottom: 15px; max-width: 400px;" required>
											<input type="tel" class="form-control" name="tel" pattern="^((\+?7|8)[ \-] ?)?((\(\d{3}\))|(\d{3}))?([ \-])?(\d{3}[\- ]?\d{2}[\- ]?\d{2})$" placeholder="Ваш телефон" data-bs-toggle="tooltip" data-bs-placement="top" title="8-888-888-88-88" style="margin: auto; margin-bottom: 15px; max-width: 400px;" required> <!--  pattern="8-[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}" -->
											<input type="email" class="form-control" name="email" placeholder="Ваш email" style="margin: auto; margin-bottom: 15px; max-width: 400px;" required>
											<input type="hidden" name="answer1" value="<?php echo $_SESSION['answer1']; ?>">
											<input type="hidden" name="answer2-1" value="<?php echo $_SESSION['answer2-1']; ?>">
											<input type="hidden" name="answer2-2" value="<?php echo $_SESSION['answer2-2']; ?>">
											<input type="hidden" name="answer2-3" value="<?php echo $_SESSION['answer2-3']; ?>">
											<input type="hidden" name="answer2-4" value="<?php echo $_SESSION['answer2-4']; ?>">
											<input type="hidden" name="answer3" value="<?php echo $_SESSION['answer3']; ?>">
											<input type="hidden" name="answer4" value="<?php echo $_SESSION['answer4']; ?>">
											<p class="text-center">Нажимая кнопку «Получить расчет» Вы&nbsp;соглашаетесь с <a href="">Политикой конфиденциальности.</a></p>
										</div>
									</div>
								</div>
								<div class="col-12 text-center animated fadeIn">
									<!-- reCaptcha v3 -->
									<input type="hidden" id="g-recaptcha-response-quiz" name="g-recaptcha-response">
									<button type="submit" class="btn btn-lg btn-corporation-orange text-light">Получить расчет</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Quiz container content -->
		
	<?php }
?>