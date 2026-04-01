<?php
		
	session_start();
	$win = "true";
	
	if ( $_POST ) {
		// Отправляем данные в Google
		function getCaptcha($SecretKey){
			$Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdV1IcUAAAAABnQ0mXIp5Yh7tLEcAXzdqG6rx9Y&response={$SecretKey}");
			$Return = json_decode($Response);
			return $Return;
		}
		
		/* Принимаем данные обратно */
		$Return = getCaptcha($_POST['g-recaptcha-response']);
		// Если вероятность робота более 0.5, то считаем отправителя человеком и выполняем отправку почты
		if( $Return->success == true && $Return->score > .125 ) {
			$tel = $_POST['tel'];
			$name = $_POST['name'];
			$email = $_POST['email'];
			$mes = $_POST['mes'];
			
			$headers = "MIME-Version: 1.0\r\n";
			//$headers .= "From: 1001i1kuhnya.ru\r\n";
			$headers .= "Content-type: text/html; charset=utf-8";
			$message .= "Имя: " . $name . "<br><br>";
			$message .= "Емаил: " . $email . "<br><br>";
			$message .= "Телефон: " . $tel . "<br><br>";
			$message .= "Сообщение: " . $mes;
			
			mail( "vasilyev-r@yandex.ru", "Сообщение с сайта 1001i1kuhnya.ru", $message, $headers );
			
			mail("vasilyev-r@mail.ru", "Сообщение с сайта 1001i1kuhnya.ru.", "Потенциальный клиент с именем ".$name." оставил номер телефона: ".$tel.", адрес электронной почты: ".$email." и сообщение: ".$mes);
			
			mail("1001_1@bk.ru", "Сообщение с сайта 1001i1kuhnya.ru.", "Потенциальный клиент с именем ".$name." оставил номер телефона: ".$tel.", адрес электронной почты: ".$email." и сообщение: ".$mes);
			
			$_SESSION['win'] = 1;
			$_SESSION['recaptcha'] = '<p class="text-light">Спасибо, что Вы обратились именно к нам. Мы свяжемся с Вами в ближайшее время.</p>';
			header("Location: ".$_SERVER['HTTP_REFERER']);
		} else {
			// Иначе считаем отправителя роботом и выводим сообщение с просьбой повторить попытку
			$_SESSION['win'] = 1;
			$_SESSION['recaptcha'] = '<p class="text-light"><strong>Извините!</strong><br>Ваши действия похожи на робота. Пожалуйста повторите попытку!</p>';
			header("Location: ".$_SERVER['HTTP_REFERER']);
		}
	}
	
?>