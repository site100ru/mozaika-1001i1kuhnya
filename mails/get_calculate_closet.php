<?php
	session_start();
	$win = "true";
			
	$answer1 = $_POST['answer1'];
	$answer2 = $_POST['answer2'];
	$answer3 = $_POST['answer3'];	
	$answer4 = $_POST['answer4'];	
	$answer5 = $_POST['answer5'];	
	$answer6 = $_POST['answer6'];	
	$name = $_POST['name'];	
	$phone = $_POST['phone'];
	
	$headers = "From: info@1001i1kuhnya.ru\r\n";
	$headers .= "Reply-To: info@1001i1kuhnya.ru\r\n";
	$headers .= "Return-Path: info@1001i1kuhnya.ru\r\n";
	$headers .= "CC: info@1001i1kuhnya.ru\r\n";
	$headers .= "BCC: info@1001i1kuhnya.ru\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	
	/* Проверям что заполнено поле с телефоном */
	if ( $_POST['phone'] AND $_POST['answer6'] ) {
		// Если поле с телефоно заполненно
		mail( "vasilyev-r@mail.ru, vasilyev-r@yandex.ru, 1001_1@bk.ru", "Заявка на расчет стоимости шкафа с сайта 1001i1kuhnya.ru", "
			Имя: " . $name ."<br><br>
			Телефон: " . $phone ."<br><br>
			Тип мебели: " . $answer1 ."<br><br>
			Тип шкафа: " . $answer2 ."<br><br>
			Материал фасада: " . $answer3 ."<br><br>
			Ширина: " . $answer4 ."<br><br>
			Количество дверей: " . $answer5 ."<br><br>
			Желаемый подарок: " . $answer6,
		$headers ); 	
		$_SESSION['win'] = 1;
		$_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение в мебельный магазин «1001 и 1 кухня». Мы ответим Вам в&#160;ближайшее время.</p>';
		header("Location: ".$_SERVER['HTTP_REFERER']);
	} else {
		// Если поле с телефоно НЕ заполненно
		$_SESSION['win'] = 1;
		$_SESSION['recaptcha'] = '<p class="text-light">Обязательное поле с номером телефона не заполненно! Пожалуйста, повторите попытку и заполенте поле с номером телефона.</p>';
		header("Location: ".$_SERVER['HTTP_REFERER']);
	}
?>