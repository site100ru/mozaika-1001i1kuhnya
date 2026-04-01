<?php
	
	session_start();
	$win = "true";

	$name = $_POST['name'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];

	$answer1 = $_SESSION['answer1'];
	$answer2_1 = $_SESSION['answer2-1'];
	$answer2_2 = $_SESSION['answer2-2'];
	$answer2_3 = $_SESSION['answer2-3'];
	$answer2_4 = $_SESSION['answer2-4'];
	$answer3 = $_SESSION['answer3'];
	$answer4 = $_SESSION['answer4'];

	$mail .= "Имя клиента: ".$name."\n\n";
	$mail .= "Телефон клиента: ".$tel."\n\n";
	$mail .= "Email клиента: ".$email."\n\n";
	$mail .= "Тип шкафа: ".$answer1."\n\n";
	$mail .= "Длина: ".$answer2_1."\n\n";
	$mail .= "Ширина: ".$answer2_2."\n\n";
	$mail .= "Высота: ".$answer2_3."\n\n";
	$mail .= "Глубина: ".$answer2_4."\n\n";
	$mail .= "Количество дверей: ".$answer3."\n\n";
	$mail .= "Материал фасада: ".$answer4."\n\n";

	/* Send mails */
	mail( "1001_1@bk.ru", "Заявка на расчет шкафа-купе с сайта 1001i1kuhnya.ru", $mail );
	mail( "vasilyev-r@mail.ru", "Заявка на расчет шкафа-купе с сайта 1001i1kuhnya.ru", $mail );

	$_SESSION['win'] = 1;
	$_SESSION['recaptcha'] = '<p>Спасибо, что Вы обратились именно к нам. Мы свяжемся с Вами в ближайшее время.</p>';
	header("Location: ".$_SERVER['HTTP_REFERER']);
	
?>