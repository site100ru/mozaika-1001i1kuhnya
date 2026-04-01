<?php
	session_start();
	$win = "true";
	
	if ($_POST['question'] == 'question1' ) {
		$_SESSION['answer1'] = $_POST['answer'];
		echo '
			<div class="row animated fadeIn">
				<div class="col pb-4 text-center">
					<h3>Укажите размеры</h3>
				</div>
			</div>';
		if ( $_SESSION['answer1'] == 'Линейная' ) {
			echo '
				<div class="row align-items-center justify-content-center animated fadeIn" style="min-height: 275px;">
					<div class="col-md-6 pb-5">
						<div class="card bg-dark w-100 border-0">
							<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz/q-2-1.jpg" class="card-img" alt="...">
							<div class="card-img-overlay">
								<input class="form-control d-inline" id="d1" style="height: 40px; max-width: 100px; position: absolute; top: -13px; right: 19%; text-align: center;" placeholder="??? м" required>
								<input type="hidden" id="d2" value="0">
								<input type="hidden" id="d3" value="0">
							</div>
						</div>
					</div>
				</div>
			';
		
		} else if ( $_SESSION['answer1'] == 'Г-образная' ) {
			echo '
				<div class="row align-items-center justify-content-center animated fadeIn" style="min-height: 275px;">
					<div class="col-md-6 pb-5">
						<div class="card bg-dark w-100 border-0">
							<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz/q-2-2.jpg" class="card-img" alt="...">
							<div class="card-img-overlay">
								<input class="form-control d-inline" id="d1" style="height: 40px; max-width: 100px; position: absolute; top: -13px; right: 19%; text-align: center;" placeholder="??? м" required>
								<input class="form-control d-inline" id="d2" style="height: 40px; max-width: 100px; position: absolute; top: 42%; left: -10%; text-align: center;" placeholder="??? м" required>
								<input type="hidden" id="d3" required>
							</div>
						</div>
					</div>
				</div>
			';
			
		} else if ( $_SESSION['answer1'] == 'П-образная' ) {
			echo '
				<div class="row align-items-center justify-content-center animated fadeIn" style="min-height: 275px;">
					<div class="col-md-6 pb-5">
						<div class="card bg-dark w-100 border-0">
							<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz/q-2-3.jpg" class="card-img" alt="...">
							<div class="card-img-overlay">
								<input class="form-control d-inline" id="d1" style="height: 40px; max-width: 100px; position: absolute; top: -13px; right: 19%; text-align: center;" placeholder="??? м" required>
								<input class="form-control d-inline" id="d2" style="height: 40px; max-width: 100px; position: absolute; top: 42%; left: -10%; text-align: center;" placeholder="??? м" required>
								<input class="form-control d-inline" id="d3" style="height: 40px; max-width: 100px; position: absolute; bottom: -13px; right: 19%; text-align: center;" placeholder="??? м" required>
							</div>
						</div>
					</div>
				</div>
			';
		}	
		echo '	
			<div class="row pb-5 animated fadeIn">
				<div class="col text-center">
					<button class="btn btn-lg btn-primary2 btn-corporation-orange" onclick="question2();">Следующий вопрос</button>
				</div>
			</div>
		';
	} else if ($_POST['question'] == 'question2') {
		$_SESSION['answer2-1'] = $_POST['answer1'];
		$_SESSION['answer2-2'] = $_POST['answer2'];
		$_SESSION['answer2-3'] = $_POST['answer3'];
		echo '
			<div class="row animated fadeIn">
				<div class="col pb-4 text-center">
					<h3>Материал</h3>
				</div>
			</div>
			<div class="row justify-content-center text-center animated fadeIn pl-5 pr-5" style="min-height: 275px;">
				<div class="col-md-3 pb-5">
					<div class="card w-100 border-0">
						<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz/q-3-1.jpg" class="m-auto w-75" alt="...">
						<div class="card-body" style="min-height: auto;">
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
								<label class="custom-control-label" for="customRadioInline1"><h5 class="card-title mb-0">ДСП</h5></label>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 pb-5">
					<div class="card w-100 border-0">
						<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz/q-3-2.jpg" class="m-auto w-75" alt="...">
						<div class="card-body" style="min-height: auto;">
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
								<label class="custom-control-label" for="customRadioInline2"><h5 class="card-title mb-0">Пленка</h5></label>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 pb-5">
					<div class="card w-100 border-0">
						<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz/q-3-3.jpg" class="m-auto w-75" alt="...">
						<div class="card-body" style="min-height: auto;">
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
								<label class="custom-control-label" for="customRadioInline3"><h5 class="card-title mb-0">Пластик</h5></label>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 pb-5">
					<div class="card w-100 border-0">
						<img src="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/images/quiz/q-3-4.jpg" class="m-auto w-75" alt="...">
						<div class="card-body" style="min-height: auto;">
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" id="customRadioInline4" name="customRadioInline1" class="custom-control-input">
								<label class="custom-control-label" for="customRadioInline4"><h5 class="card-title mb-0">Массив</h5></label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row pb-5 animated fadeIn">
				<div class="col text-center">
					<button class="btn btn-lg btn-primary2 btn-corporation-orange" onclick="question3();">Следующий вопрос</button>
				</div>
			</div>
		';
	} else if ( $_POST['question'] == 'question3' ) {
		$_SESSION['answer3'] = $_POST['answer'];
		echo '
			<form method="post" action="https://1001i1kuhnya.ru/wp-content/themes/furniture-catalog/mails/kitchen-quiz-mail.php">
				<div class="row animated fadeIn">
					<div class="col pb-4 text-center">
						<h3>Оставьте Ваши контакты и мы вышлем Вам рассчет</h3>
					</div>
				</div>
				<div class="row pb-5 align-items-center justify-content-center text-left animated fadeIn" style="min-height: 275px;">
					<div class="col-md-6">
						<input type="text" class="form-control" name="name" placeholder="Введите Ваше имя" style="margin: auto; margin-bottom: 15px; max-width: 400px;" required>
						<input type="text" class="form-control" name="tel" placeholder="Введите Ваш телефон" style="margin: auto; margin-bottom: 15px; max-width: 400px;" required>
						
						<input type="hidden" name="answer1" value="'.$_SESSION['answer1'].'">
						<input type="hidden" name="answer2-1" value="'.$_SESSION['answer2-1'].'">
						<input type="hidden" name="answer2-2" value="'.$_SESSION['answer2-2'].'">
						<input type="hidden" name="answer2-3" value="'.$_SESSION['answer2-3'].'">
						<input type="hidden" name="answer3" value="'.$_SESSION['answer3'].'">
					</div>
					<div class="col-md-10 text-center">
						<p>Нажимая кнопку «Получить консультацию» Вы соглашаетесь с <a href="">Политикой конфиденциальности.</a></p>
					</div>
				</div>
				<div class="row pb-5 animated fadeIn">
					<div class="col text-center">
						<!-- reCaptcha v3 -->
						<input type="hidden" id="g-recaptcha-response-quiz" name="g-recaptcha-response">
						<button type="submit" class="btn btn-lg btn-primary2 btn-corporation-orange">Получить рассчет</button>
					</div>
				</div>
			</form>
		';
	}
	
?>