<?php
	session_start();
	$win = "true";
	// Если существует переменная POST, то
	
	/*
	if($_POST){
		// Отправляем данные в Google
		function getCaptcha($SecretKey){
			$Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdV1IcUAAAAABnQ0mXIp5Yh7tLEcAXzdqG6rx9Y&response={$SecretKey}");
			$Return = json_decode($Response);
			return $Return;
		}
		
		/* Принимаем данные обратно
		$Return = getCaptcha($_POST['g-recaptcha-response']);
		// Если вероятность робота более 0.5, то считаем отправителя человеком и выполняем отправку почты
		if( $Return->success == true && $Return->score > 0 ){ */
			
			
			
			if ( isset( $_POST['form-name'] ) ) {
				$theme = $_POST['form-name'];
			} else {
				$theme = 'Заявка на обратный звонок с сайта 1001i1kuhnya.ru';
			}
			$name = $_POST['name'];	
			$tel = $_POST['tel'];
			
			//mail( "vasilyev-r@mail.ru, 1001_1@bk.ru, kuhnya1001i1@yandex.ru", $theme, "Имя: ".$name.". Телефон: " . $tel );
			
			
			$to      = 'vasilyev-r@mail.ru, vasilyev-r@yandex.ru, 1001_1@bk.ru';
			$subject = $theme;
			$message = "Имя: ".$name.". Телефон: " . $tel;
			$headers = "From: info@1001i1kuhnya.ru\r\n";
			$headers .= "Reply-To: info@1001i1kuhnya.ru\r\n";
			$headers .= "Return-Path: info@1001i1kuhnya.ru\r\n";
			$headers .= "CC: info@1001i1kuhnya.ru\r\n";
			$headers .= "BCC: info@1001i1kuhnya.ru\r\n";
			$headers .= "Content-type: text/html; charset=utf-8\r\n";
			mail($to, $subject, $message, $headers);
			
			$_SESSION['win'] = 1;
			$_SESSION['recaptcha'] = '<p class="text-light">Спасибо, что Вы обратились именно к нам. Мы свяжемся с Вами в ближайшее время.</p>';
			header("Location: ".$_SERVER['HTTP_REFERER']);
		
		/* } else {
			// Иначе считаем отправителя роботом и выводим сообщение с просьбой повторить попытку
			$_SESSION['win'] = 1;
			$_SESSION['recaptcha'] = '<p class="text-light"><strong>Извините!</strong><br>Ваши действия похожи на робота. Пожалуйста повторите попытку!</p>';
			header("Location: ".$_SERVER['HTTP_REFERER']);
		}
	} */
?>