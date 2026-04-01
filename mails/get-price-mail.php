<?php
	session_start();
	$win = "true";
	// Если существует переменная POST, то
	
	if($_POST){
		// Отправляем данные в Google
		function getCaptcha($SecretKey){
			$Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdV1IcUAAAAABnQ0mXIp5Yh7tLEcAXzdqG6rx9Y&response={$SecretKey}");
			$Return = json_decode($Response);
			return $Return;
		}
		
		/* Принимаем данные обратно */
		$Return = getCaptcha($_POST['g-recaptcha-response']);
		// Если вероятность робота более 0.5, то считаем отправителя человеком и выполняем отправку почты
		if( $Return->success == true && $Return->score > .25 ){
			
			$name = $_POST['name'];	
			$tel = $_POST['tel'];	
			
			
			mail( "vasilyev-r@mail.ru, vasilyev-r@yandex.ru, 1001_1@bk.ru", "Заявка с сайта 1001i1kuhnya.ru. Узнать стоимость.", "Имя: ".$name.". Телефон: " . $tel );
			mail( "1001_1@bk.ru", "Заявка с сайта 1001i1kuhnya.ru. Узнать стоимость.", "Имя: ".$name.". Телефон: " . $tel );
			
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